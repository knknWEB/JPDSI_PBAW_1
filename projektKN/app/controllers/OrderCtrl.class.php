<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;


class OrderCtrl {
    private $records;
    private $orders;


    public function validate() {
        if(!isset($this->records)){
            $this->records=SessionUtils::loadObject('Login', true);
        }
        //sprawdzenie czy w pobranych rekordach, znajduje się login z sesji, jezeli jest pusty, przekierowanie do logowania z przekazaniem wiadomosci Message.
        if(($this->records)==null){
            App::getMessages()->addMessage(new \core\Message("Dostęp do listy zamówień tylko dla zalogowanych!", \core\Message::ERROR));
            App::getRouter()->forwardTo('login');
        }    
        
        return !App::getMessages()->isError();
    }
    public function action_orders() {
        if ($this->validate()) {
            $this->orders = App::getDB()->select("order", [
                "[><]product" => ["ProductId" => "ProductId", "AND" => [
                    "Order.UsersLogin" => $this->records]]
            ], [
                        "OrderId",
                        "OrderDate",
                        "Order.Price",
                        "Order.ProductId",
                        "OrderStatus",
                        "UsersLogin",
                        "ProductName",
                        "QuantityInPackage",
                        "Type"
                        
            ],);
            $this->generateView();
        }
    }
       
    public function generateView() {
        App::getSmarty()->assign('orders',$this->orders);
        App::getSmarty()->assign('records',$this->records);
        App::getSmarty()->display('orderView.tpl');
    }
}