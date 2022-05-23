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
            App::getMessages()->addMessage(new \core\Message("Aby złożyć zamówienie musisz się zarejestrować!", \core\Message::ERROR));
            App::getRouter()->forwardTo('login');
        }    

        $this->form->ProductId = ParamUtils::getFromRequest('produktid');
        $this->form->price = ParamUtils::getFromRequest('price');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->ProductId))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->ProductId)) {
            Utils::addErrorMessage('Nie podano produktu');
        }
    
        return !App::getMessages()->isError();
    }

    public function action_shop() {

    
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


        $this->generateView();
    }
    public function action_shopBuy() {
        if ($this->validate()) {
            

            // //pobieranie aktualnej ceny z bz
            // $this->products = App::getDB()->select("product",[
            //     "ProductId",
            //     "ProductName",
            //     "QuantityInPackage",
            //     "Type",
            //     "Price"
            // ]);
            //tworzenie zamowienia
            try{
                $this->records = App::getDB()-> insert("order", [
                "OrderDate"=>date("Y-m-d M:i:s"),
                "ProductId"=> $this->form->ProductId,
                "Price"=> $this->form->price,
                "UsersLogin"=> $this->records
                ]);
                App::getMessages()->addMessage(new \core\Message("Poprawnie złożono zamówienie! W panelu członkostwa znajdują się szczegóły.", \core\Message::INFO));
                App::getRouter()->forwardTo('panel');
            } catch (\PDOException $e) { 
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
}
    public function generateView() {
        App::getSmarty()->assign('products',$this->products);
        App::getSmarty()->assign('form',$this->form);
        App::getSmarty()->display('shopView.tpl');
    }
}