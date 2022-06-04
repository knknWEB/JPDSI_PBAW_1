<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\ShopForm;


class ShopCtrl {
    private $products;
    private $form;
    private $records;

    public function __construct() {
        $this->form = new ShopForm();
    }
    public function validate() {

        if(!isset($this->records)){
            $this->records=SessionUtils::loadObject('Login', true);
        }
        //sprawdzenie czy w pobranych rekordach, znajduje się login z sesji, jezeli jest pusty, przekierowanie do logowania z przekazaniem wiadomosci Message.
        if(($this->records)==null){
            App::getMessages()->addMessage(new \core\Message("Aby złożyć zamówienie musisz być zalogowany!", \core\Message::ERROR));
            App::getRouter()->forwardTo('login');
        }    
        
        //pobranie parametrów z CleanURL - id produktu i ceny
        $this->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji! Przeniesiono na stronę startową!');
        $this->price = ParamUtils::getFromCleanURL(2, true, 'Błędne wywołanie aplikacji! Przeniesiono na stronę startową!');
    
        //sprawdzenie czy użytkownik podał adres, jeżeli nie - przekierowanie do panelu
        $existAddress=App::getDB()->count("address", "addressID", [
            "AND" => [
                "UsersLogin" => [$this->records]]
        ]);
        if($existAddress==0){
            Utils::addErrorMessage('Aby złożyć zamówienie musisz najpierw uzupełnić adres!');
            App::getRouter()->forwardTo('panel');
        }
        //sprawdzenie, czy użytkownik złożył dzisiaj zamówienie, jeżeli tak, przekierowanie i wyświetlenie błędu
        $existToday=App::getDB()->count("order", "OrderDate", [

            "AND" => [
                "UsersLogin" => [$this->records],
                "OrderDate" => [date("Y-m-d M:i:s")]]
            
            ]);
        if($existToday!=0){
            Utils::addErrorMessage('W danym dniu złożono już inne zamówienie! Jednego dnia można składać tylko jedno zamówienie!');
            App::getRouter()->forwardTo('home');
        }
        return !App::getMessages()->isError();
    }

    public function action_shop() {
        //blok instrukcji do pobrania produktów z bazy danych
            try {
                $this->products = App::getDB()->select("product",[
                        "ProductId",
                        "ProductName",
                        "QuantityInPackage",
                        "Type",
                        "Price"
                    ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów: ');
                if (App::getConf()->debug){
                    Utils::addErrorMessage($e->getMessage());
                    App::getRouter()->forwardTo('home');
                }
                App::getRouter()->forwardTo('home');
            }
            //sprawdzenie czy rola to wpłacający, jeżeli tak, nadanie isRole jednyki - w celu przekazania do widoku infromacji o cenie zerowej
            if(RoleUtils::inRole('Wpłacający')){
                $this->isRole=1;
            }
            else{
                $this->isRole=0;
            }
            $this->generateView();      
    }
    public function action_shopBuy() {
        if ($this->validate()) {
            //sprawdzenie czy rola to wpłacający, jeżeli tak, ustawienie ceny równej zero
            if(RoleUtils::inRole('Wpłacający')){
                $this->price=0;
            }
            //blok instrukcji do wstawiania rekordów do bazy danych
            try{
                $this->records = App::getDB()-> insert("order", [
                "OrderDate"=>date("Y-m-d M:i:s"),
                "ProductId"=> $this->id,
                "Price"=> $this->price,
                "OrderStatus"=>"Nowe",
                "UsersLogin"=> $this->records
                ]);
                App::getMessages()->addMessage(new \core\Message("Poprawnie złożono zamówienie! Poniżej znajdują się szczegóły zamówień.", \core\Message::INFO));
                App::getRouter()->forwardTo('orders');
            } 
            catch (\PDOException $e) { 
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów: ');
                if (App::getConf()->debug){
                    Utils::addErrorMessage($e->getMessage());
                    App::getRouter()->forwardTo('panel');
                }
                else {
                    //niezalogowany => pozostań na stronie logowania
                    Utils::addErrorMessage('Nie dziala walidacja!');
                    $this->generateView();
                }
            }
        }
        else{
            App::getRouter()->forwardTo('home');
        }
    }
    //generowanie widoku i przekazywanie parametrów
    public function generateView() {
        App::getSmarty()->assign('products',$this->products);
        App::getSmarty()->assign('isRole',$this->isRole);
        App::getSmarty()->assign('form',$this->form);
        App::getSmarty()->display('shopView.tpl');
    }
}