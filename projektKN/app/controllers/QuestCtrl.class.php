<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\QuestForm;


class QuestCtrl {
    private $records;
    private $form;

    private $user;


    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new QuestForm();
    }

    public function validate() {
        $this->form->typeMember = ParamUtils::getFromRequest('typeMember');
        $this->form->value = ParamUtils::getFromRequest('value');
        $this->form->description = ParamUtils::getFromRequest('description');


        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->typeMember)) {
            Utils::addErrorMessage('Nie podano typu członkostwa!');
        }
        if (empty($this->form->value)) {
            Utils::addErrorMessage('Nie podano wartości szkody!');
        }
        if (empty($this->form->description)) {
            Utils::addErrorMessage('Nie podano opisu!');
        }
        return !App::getMessages()->isError();
    }

    public function action_quest() {


            if ($this->validate()) {
                if(!isset($this->user)){
                    $this->user=SessionUtils::loadObject('Login', true);
                }
                try{
                    $this->records = App::getDB()-> insert("participant", [
                    "ParticipeDate"=>date("Y-m-d M:i:s"),
                    "TypeOfMember"=>$this->form->typeMember,
                    "ValueLoss"=> $this->form->value,
                    "Description"=>  $this->form->description,
                    "UsersLogin"=> $this->user
                    ]);
                    App::getMessages()->addMessage(new \core\Message("Poprawnie wypełniono ankietę członkostwa!!", \core\Message::INFO));
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

    public function action_questView() {
    
        $this->generateView();
    

          

    }

       
    public function generateView() {
        App::getSmarty()->display('questView.tpl');
    }
}