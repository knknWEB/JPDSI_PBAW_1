<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\AddressForm;

class AddressCtrl {

    public $postcode;
	public $city;
    public $street;
	public $nofHouse;
    public $nofFlat;
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new AddressForm();
    }

    public function validate() {
        $this->form->postcode = ParamUtils::getFromRequest('postcode');
        $this->form->city = ParamUtils::getFromRequest('city');
        $this->form->street = ParamUtils::getFromRequest('street');
        $this->form->nofHouse = ParamUtils::getFromRequest('nofHouse');
        $this->form->nofFlat = ParamUtils::getFromRequest('nofFlat');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->postcode))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->postcode)) {
            Utils::addErrorMessage('Nie podano kodu pocztowego!');
        }
        if (empty($this->form->city)) {
            Utils::addErrorMessage('Nie podano miasta!');
        }
        if (empty($this->form->street)) {
            Utils::addErrorMessage('Nie podano ulicy!');
        }
        if (empty($this->form->nofHouse)) {
            Utils::addErrorMessage('Nie podano numeru domu!');
        }


        return !App::getMessages()->isError();
    }

    public function action_addressView() {
        $this->generateView();
    }

    public function action_address() {
        if ($this->validate()) {
            if(!isset($this->user)){
                $this->user=SessionUtils::loadObject('Login', true);
            }
            try{
                $this->records = App::getDB()-> insert("address", [
                "city"=>$this->form->city,
                "postcode"=>$this->form->postcode,
                "street"=> $this->form->street,
                "nofHouse"=>  $this->form->nofHouse,
                "nofFlat"=>  $this->form->nofFlat,
                "UsersLogin"=> $this->user
                ]);
                App::getMessages()->addMessage(new \core\Message("Poprawnie wypełniono adres!", \core\Message::INFO));
                App::getRouter()->forwardTo('panel');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów: ');
                if (App::getConf()->debug){
                    Utils::addErrorMessage($e->getMessage());
                    App::getRouter()->forwardTo('panel');
                }
                App::getRouter()->forwardTo('panel');
            }
            
        } else {
            //niezalogowany => pozostań na stronie logowania
            Utils::addErrorMessage('Nie dziala walidacja!');
            $this->generateView();
        }

    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('addressView.tpl');
    }

}
