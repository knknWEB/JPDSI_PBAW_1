<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use core\Validator;
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

        if(!isset($this->records)){
            $this->records=SessionUtils::loadObject('Login', true);
        }
        //sprawdzenie czy w pobranych rekordach, znajduje się login z sesji, jezeli jest pusty, przekierowanie do panelu z przekazaniem wiadomosci Message.
        if(($this->records)!=null){
            App::getMessages()->addMessage(new \core\Message("Jesteś zarejstrowany i zalogowany! Aby utworzyć konto wyloguj się!", \core\Message::ERROR));
            App::getRouter()->forwardTo('panel');
        }

        //walidacja parametrów wbudowanym we Framework walidatorem
        $v = new Validator();
        $this->name = $v->validateFromRequest("name", [
        'trim' => true,
        'required' => true,
        'required_message' => 'Imię jest wymagane!',
        'min_length' => 3,
        'max_length' => 30,
        'validator_message' => 'Imię powinno mieć 3-30 znaków!',
        ]);
        if  ($v->isLastOk()) {
            $this->surname = $v->validateFromRequest("surname", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Nazwisko jest wymagane',
                'min_length' => 3,
                'max_length' => 30,
                'validator_message' => 'Nazwisko powinno mieć 3-30 znaków!',
            ]);
        }
        if  ($v->isLastOk()) {
            $this->mail = $v->validateFromRequest("mail", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Adres e-mail jest wymagany!',
                'email' => true,
                'validator_message' => 'Błędny mail! Adres e-mail powinien wyglądać: example@stopdlaodlewni.pl',
            ]);
        }
        if  ($v->isLastOk()) {
            //sprawdzenie, czy nie ma rekordów o tym samym mailu
            $existMail = App::getDB()->count("users",[
                "Mail" => $this->mail
            ]);
            if($existMail!=0){
                Utils::addErrorMessage('Użytkownik o takim e-mailu już istnieje!');
            }
        }
        if  ($v->isLastOk()) {
            $this->login = $v->validateFromRequest("login", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Login jest wymagany!',
                'min_length' => 3,
                'max_length' => 30,
                'validator_message' => 'Login powinien mieć 3-30 znaków!',
            ]);
        }
        if  ($v->isLastOk()) {
             //sprawdzenie, czy nie ma rekordów o tym samym loginie
            $existLogin = App::getDB()->count("users",[
                "Login" => $this->login
            ]);
            if($existLogin!=0){
                Utils::addErrorMessage('Użytkownik o takim loginie już istnieje!');
            }
            $this->password = $v->validateFromRequest("pass", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Hasło jest wymagane!',
                'min_length' => 8,
                'max_length' => 30,
                'validator_message' => 'Hasło powininno mieć 8-30 znaków!',
            ]);
        }
        if  ($v->isLastOk()) {
            $this->password2 = $v->validateFromRequest("pass2", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Drugie hasło jest wymagane!',
                'min_length' => 8,
                'max_length' => 30,
                'validator_message' => 'Hasło powininno mieć 8-30 znaków!',
            ]);
            if (!($this->password == $this->password2)) {
                Utils::addErrorMessage('Hasła się nie zgadzają!');
            }
        }
        //zwrócenie false jeżeli wystąpiły błedy
        if (App::getMessages()->isError())
            return false;
        return !App::getMessages()->isError();
    }
    public function action_registerShow() {
        $this->generateView();
    }

    public function action_register() {
        if ($this->validate()) {
            try{
                $this->records = App::getDB()-> insert("users", [
                "Name"=>  $this->name,
                "Surname"=> $this->surname,
                "Mail"=>  $this->mail,
                "Login"=>   $this->login,
                "Password"=>  $this->password
               
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            App::getMessages()->addMessage(new \core\Message("'Poprawnie zarejestrowano! Teraz zaloguj się!'", \core\Message::INFO));
            App::getRouter()->forwardTo('home');
        } else {
            $this->generateView();
        }
    }
//generowanie widoku i przekazanie danych
    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('RegisterView.tpl');
        
    }

}
