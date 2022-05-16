<?php

namespace app\controllers;

use core\App;
use core\Utils;
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
            RoleUtils::addRole('user');
            SessionUtils::storeObject('Login', $this->form->login); 
        } 
        else{
            Utils::addErrorMessage('Błędny login lub hasło!');   
        }



        // if (App::getMessages()->isError())
        //     return false;

        //     if (!App::getMessages()->isError()) {
        //     try {
        //         $this->records = App::getDB()->select("users", [
        //             "Login",
        //             "Password"
        //                 ], ["Login" => $this->form->login]);
        //     } catch (\PDOException $e) {
        //         Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
        //         if (App::getConf()->debug)
        //             Utils::addErrorMessage($e->getMessage());
        //     }



        //     if (password_verify($this->form->pass, $this->records[0]["Password"])) 
        //     {

        //         RoleUtils::addRole('user');
               
              
        //     }
        // }

            // if (!App::getMessages()->isError()) {
            //     $hashed_pwd = App::getDB('users', null, 'Password', [
            //                 'Login' => $this->form->login
            //     ]);
    
            //     if (password_verify($this->form->pass, $this->records[0]["Password"])) 
            //     {
    
            //         RoleUtils::addRole('user');
                   
                  
            //     }
            //      else {
            //         Utils::addErrorMessage('Niepoprawny login lub hasło!');
            //     }
            // }


        // //łączenie z BD
        // try {
        //     $this->records = App::getDB()->select("users", [
        //         "Login",
        //         "Password"
        //     ], [
        //         "Login" => $this->form->login,
        //     ]);
        // } catch (Exception $e) {
        //     echo $e;
        // }


        // if ($this->records != null && password_verify($this->form->pass, $this->records[0]["Password"])) {
        //     RoleUtils::addRole('user');
        // } else {
        //     Utils::addErrorMessage('Niepoprawny login lub hasło');
        // }


        // // (takie informacje najczęściej przechowuje się w bazie danych)
        // if ($this->form->login == "admin" && $this->form->pass == "admin") {
        //     RoleUtils::addRole('admin');
        // } else if ($this->form->login == "user" && $this->form->pass == "user") {
        //     RoleUtils::addRole('user');
        // } else {
        //     Utils::addErrorMessage('Niepoprawny login lub hasło');
        // }

        return !App::getMessages()->isError();
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("home");
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('home');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('LoginView.tpl');
    }

}
