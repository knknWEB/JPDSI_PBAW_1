<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use core\Validator;
use app\forms\QuestForm;


class QuestCtrl {
    private $records;
    private $form;
    private $user;
    //stworzenie obiektów - z formularza
    public function __construct() {
        $this->form = new QuestForm();
    }
    //walidacja wbudwoanym walidatorem z Frameworku
    public function validate() {
        $v = new Validator();
        $this->typeMember = $v->validateFromRequest("typeMember", [
        'required' => true,
        'required_message' => 'Typ członkostwa jest wymagany!',
        ]);
        if  ($v->isLastOk()) {
            $this->value = $v->validateFromRequest("value", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Wartość wymagana',
                'numeric' => true,
                'validator_message' => 'Wartość powinna być liczbą!',
            ]);
        }
        if  ($v->isLastOk()) {
            $this->description = $v->validateFromRequest("description", [
                'trim' => true,
                'required' => true,
                'required_message' => 'Opis wymagany!',
                'min_length' => 10,
                'validator_message' => 'Opis powinien miec minimum 10 znaków!',
            ]);
        }
        return !App::getMessages()->isError();
    }
    public function action_quest() {
            if ($this->validate()) {
                if(!isset($this->user)){
                    $this->user=SessionUtils::loadObject('Login', true);
                }
                //blok instrukcji do wstawienia danych do tabeli uczestnik
                try{
                    $this->records = App::getDB()-> insert("participant", [
                    "ParticipeDate"=>date("Y-m-d M:i:s"),
                    "TypeOfMember"=>$this->typeMember,
                    "ValueLoss"=> $this->value,
                    "Description"=>  $this->description,
                    "UsersLogin"=> $this->user
                    ]);
                    RoleUtils::addRole($this->typeMember);
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
                Utils::addErrorMessage('Wystąpił błąd!');
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