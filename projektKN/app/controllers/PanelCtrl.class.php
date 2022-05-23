<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;


class PanelCtrl {
    private $records;
    private $mail;
    private $userData;
    private $participantData;
    private $address;

    public function action_panel() {
        //załadowanie loginu z sesji - tylko raz, aby nie nadpisywać jeżeli już istnieje
        if(!isset($this->records)){
            $this->records=SessionUtils::loadObject('Login', true);
        }
        //sprawdzenie czy w pobranych rekordach, znajduje się login z sesji, jezeli jest pusty, przekierowanie do logowania z przekazaniem wiadomosci Message.
        if(($this->records)==null){
            App::getMessages()->addMessage(new \core\Message("Aby wejść do panelu, musisz się zalogować!", \core\Message::ERROR));
            App::getRouter()->forwardTo('login');
        }
        try {
            $this->userData = App::getDB()->select("users",[
                    "UserId",
                    "Name",
                    "Surname",
                    "Login",
                    "Mail",
                    "Role",
                ],["Login" =>$this->records]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów: ');
            if (App::getConf()->debug){
                Utils::addErrorMessage($e->getMessage());
                App::getRouter()->forwardTo('panel');
            }
            App::getRouter()->forwardTo('panel');
        }
        try {
            $this->participantData = App::getDB()->select("participant",[
                    "ParticipantId",
                    "ParticipeDate",
                    "TypeOfMember",
                    "ValueLoss",
                    "Description",
                    "UsersLogin",
                ],["UsersLogin" =>$this->records]);
            RoleUtils::addRole('TypeOfMember');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów: ');
            if (App::getConf()->debug){
                Utils::addErrorMessage($e->getMessage());
                App::getRouter()->forwardTo('panel');
            }
            App::getRouter()->forwardTo('panel');
        }
        try {
            $this->address = App::getDB()->select("address",[
                    "city",
                    "postcode",
                    "street",
                    "nofHouse",
                    "nofFlat",
                    "UsersLogin",
                ],["UsersLogin" =>$this->records]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów: ');
            if (App::getConf()->debug){
                Utils::addErrorMessage($e->getMessage());
                App::getRouter()->forwardTo('panel');
            }
            App::getRouter()->forwardTo('panel');
        }
        $this->generateView(); 
    }

    public function generateView() {
        App::getSmarty()->assign('infos', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->assign('users', $this->userData[0]);  // lista rekordów z bazy danych
        
        //kontrola danych dla widoku, czy w bazie jest dany czlonek, czy go nie ma
        if(isset($this->participantData[0])){
            App::getSmarty()->assign('participant', $this->participantData[0]);  
        }
        App::getSmarty()->assign('participant_is',0); 
        App::getSmarty()->assign('participant_no_is',0); 
        if (isset($this->participantData[0])){
            App::getSmarty()->assign('participant_is',1);  
        }
        else if ($this->participantData==null){
            App::getSmarty()-> assign('participant_no_is',1);
        
        }
        //analogicznie jak wyzej, tylko dla adresu
        if(isset($this->address[0])){
            App::getSmarty()->assign('address', $this->address[0]);  
        }
        App::getSmarty()->assign('address_is',0); 
        App::getSmarty()->assign('address_no_is',0); 
        
        if (isset($this->address[0])){
            App::getSmarty()->assign('address_is',1);  
        }
        else if ($this->address==null){
            App::getSmarty()-> assign('address_no_is',1);
        }
   

        App::getSmarty()->display('panelView.tpl');
    }
}