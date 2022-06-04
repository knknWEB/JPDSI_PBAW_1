<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\Validator;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;
    private $records;
    private $pass;
    private $login;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        if(!isset($this->records)){
            $this->records=SessionUtils::loadObject('Login', true);
        }
        //sprawdzenie czy w pobranych rekordach, znajduje się login z sesji, jezeli jest pusty, przekierowanie do panelu z przekazaniem wiadomosci Message.
        if(($this->records)!=null){
            App::getMessages()->addMessage(new \core\Message("Jesteś zarejstrowany i zalogowany! Nie ma potrzeby logowania się ponownie!", \core\Message::ERROR));
            App::getRouter()->forwardTo('panel');
        }
        //walidacja danych wbudowanym walidatorem we Framework
        $v = new Validator();
        $this->login = $v->validateFromRequest("login", [
        'trim' => true,
        'required' => true,
        'required_message' => 'Podanie loginu jest wymagane!'
        ]);
        if  ($v->isLastOk()) {
            $this->pass = $v->validateFromRequest("pass", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Podanie hasła jest wymagane!',
            ]);
                //operacja sprawdzenia czy uzytkownik o podanych danych jest w BD
                if (App::getDB()->has("users",[
                    "AND" => [
                    "Login" => $this->login],
                    "Password" => $this->pass, ])){
                    //jezeli jest, sprawdzenie czy uzytkownik jest w bazie uczestnik i czy mozna przypisac mu jego role        
                    $existRole=App::getDB()->select("participant", "TypeOfMember", [
                        "UsersLogin" => $this->login
                    ]);
                    if($existRole!=NULL){
                    RoleUtils::addRole($existRole[0]);
                    }
                    //jezeli nie ma roli, dodanie domyslnej roli "logged"
                    else{
                        RoleUtils::addRole('logged');
                    }
                    SessionUtils::storeObject('Login', $this->login); 
                } 
                else{
                    Utils::addErrorMessage('Błędny login lub hasło!');   
                }
        }
        return !App::getMessages()->isError();
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages)
            App::getMessages()->addMessage(new \core\Message("Poprawnie zalogowano!", \core\Message::INFO));
            App::getRouter()->forwardTo('panel');
            
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        RoleUtils::removeRole("logged");
        RoleUtils::removeRole("Wpłacający");
        RoleUtils::removeRole("Wspierający");
        session_unset();
        session_destroy();
       
        App::getMessages()->addMessage(new \core\Message("Wylogowano!", \core\Message::INFO));
        App::getRouter()->forwardTo('home');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('LoginView.tpl');
    }

}
