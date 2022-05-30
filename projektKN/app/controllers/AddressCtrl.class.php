<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use core\Validator;
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

        $v = new Validator();
        $this->postcode = $v->validateFromRequest("postcode", [
        'trim' => true,
        'required' => true,
        'required_message' => 'Kod pocztowy jest wymagany!',
        'min_length' => 5,
        'max_length' => 6,
        'validator_message' => 'Kod pocztowy mieści się między 5, a 6 znaków!',
        ]);
        if  ($v->isLastOk()) {
            $this->city = $v->validateFromRequest("city", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Miasto jest wymagane',
                'min_length' => 3,
                'max_length' => 30,
                'validator_message' => 'Miasto powinno mieć 3-30 znaków!',
            ]);
        }
        if  ($v->isLastOk()) {
            $this->street = $v->validateFromRequest("street", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Ulica jest wymagana',
                'min_length' => 3,
                'max_length' => 30,
                'validator_message' => 'Ulica powinna mieć 3-30 znaków!',
            ]);
        }
        if  ($v->isLastOk()) {
            $this->nofHouse = $v->validateFromRequest("nofHouse", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Numer domu wymagany',
                'int' => true,
                'validator_message' => 'Numer domu musi być liczbą całkowitą!',
            ]);
        }
        if  ($v->isLastOk()) {
            $this->nofFlat = $v->validateFromRequest("nofFlat", [
                'trim' => true,
                'required' => false,
                'int' => true,
                'validator_message' => 'Numer domu musi być liczbą całkowitą!',
            ]);
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
                "city"=>$this->city,
                "postcode"=>$this->postcode,
                "street"=> $this->street,
                "nofHouse"=>  $this->nofHouse,
                "nofFlat"=>  $this->nofFlat,
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
