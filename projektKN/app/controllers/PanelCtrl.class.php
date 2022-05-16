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


    

    public function action_panel() {
        //załadowanie loginu z sesji - tylko raz, aby nie nadpisywać jeżeli już istnieje
        if(!isset($this->records)){
            $this->records=SessionUtils::loadObject('Login', true);
        }

        try {
            $this->userData = App::getDB()->select("users",
                [
                    "UserId",
                    "Name",
                    "Surname",
                    "Login",
                    "Mail",
                    "Role",
                ],[
                    "Login" =>$this->records
                ]);
        
        } catch (Exception $e) {
            echo $e;
        }


        try {
            $this->participantData = App::getDB()->select("participant",
                [
                    "ParticipantId",
                    "ParticipeDate",
                    "TypeOfMember",
                    "ValueLoss",
                    "Description",
                    "UsersLogin",
                ],[
                    "UsersLogin" =>$this->records
                ]);
        
        } catch (Exception $e) {
            echo $e;
        }


        $this->generateView(); 
       

    }

        // try {
        //     $this->records = App::getDB()->select("users", [
        //         "Name",
        //         "Surname",
        //         "Login",
        //         "Mail",
        //         "Role"
        //             ]);
        // } catch (\PDOException $e) {
        //     Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
        //     if (App::getConf()->debug)
        //         Utils::addErrorMessage($e->getMessage());
        // }
        //     $this->generateView();
        // }
    public function generateView() {
        App::getSmarty()->assign('infos', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->assign('users', $this->userData[0]);  // lista rekordów z bazy danych
        App::getSmarty()->assign('participant', null);
        if(isset($this->participantData[0])){
            App::getSmarty()->assign('participant', $this->participantData[0]);  
        }
        App::getSmarty()->assign('participant_is',0); 
        App::getSmarty()->assign('participant_no_is',0); 
        
        if (isset($this->participantData[0]))
        {
            App::getSmarty()->assign('participant_is',1);  
        }
        else if ($this->participantData==null)
        {
            App::getSmarty()-> assign('participant_no_is',1);
        
        }
           
        
        App::getSmarty()->display('panelView.tpl');
    }
}