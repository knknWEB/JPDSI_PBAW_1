<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\Messages;
use core\Message;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;
    private $records;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }


        if (App::getDB()->has("users",[
            "AND" => [
            "Login" => $this->form->login],
            "Password" => $this->form->pass, ])){
            RoleUtils::addRole('logged');
            SessionUtils::storeObject('Login', $this->form->login); 
        } 
        else{
            Utils::addErrorMessage('Błędny login lub hasło!');   
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
