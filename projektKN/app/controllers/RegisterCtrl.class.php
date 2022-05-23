<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\RegisterForm;
use PDOException;


class RegisterCtrl {

    private $form;
    private $records;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new RegisterForm();
    }

    public function validate() {
        $this->form->name = ParamUtils::getFromRequest('name');
        $this->form->surname = ParamUtils::getFromRequest('surname');
        $this->form->mail = ParamUtils::getFromRequest('mail');
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
        $this->form->pass2 = ParamUtils::getFromRequest('pass2');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login))
            return false;
        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->name)) {
            Utils::addErrorMessage('Nie podano imienia');
        }
        if (empty($this->form->surname)) {
            Utils::addErrorMessage('Nie podano nazwiska');
        }
        if (empty($this->form->mail)) {
            Utils::addErrorMessage('Nie podano adresu e-mail');
        }
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }
        if (empty($this->form->pass2)) {
            Utils::addErrorMessage('Nie potwierdzono hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        // sprawdzenie, czy hasła się zgadzają
        if (!($this->form->pass == $this->form->pass2)) {
            Utils::addErrorMessage('Hasła się nie zgadzają!');
        }

        //sprawdzenie, czy nie ma rekordów o tym samym mailu
        $existMail = App::getDB()->count("users",[
                    "Mail" => $this->form->mail
        ]);
        if($existMail!=0){
            Utils::addErrorMessage('Użytkownik o takim e-mailu już istnieje!');
        }

        //sprawdzenie, czy nie ma rekordów o tym samym loginie
        $existMail = App::getDB()->count("users",[
            "Login" => $this->form->login
        ]);
        if($existMail!=0){
            Utils::addErrorMessage('Użytkownik o takim loginie już istnieje!');
        }
            return !App::getMessages()->isError();
    }


    public function action_registerShow() {
        $this->generateView();
    }

    public function action_register() {
        if ($this->validate()) {
            try{
                $this->records = App::getDB()-> insert("users", [
                "Name"=> $this->form->name,
                "Surname"=>$this->form->surname,
                "Mail"=> $this->form->mail,
                "Login"=>  $this->form->login,
                "Password"=> $this->form->pass
               
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            App::getMessages()->addMessage(new \core\Message("'Poprawnie zarejestrowano! Teraz zaloguj się!'", \core\Message::INFO));
            App::getRouter()->forwardTo('home');
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }



    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('RegisterView.tpl');
        
    }

}
