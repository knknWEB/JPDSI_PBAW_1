<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)
//App::getRouter()->setRegisterRoute('register'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('home', 'HomePageCtrl');
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('registerShow',     'RegisterCtrl');
Utils::addRoute('register',     'RegisterCtrl');
Utils::addRoute('panel',     'PanelCtrl');
Utils::addRoute('questView',     'QuestCtrl');
Utils::addRoute('quest',     'QuestCtrl');
Utils::addRoute('address',     'AddressCtrl');
Utils::addRoute('addressView',     'AddressCtrl');
Utils::addRoute('shop',     'ShopCtrl');
Utils::addRoute('shopBuy',     'ShopCtrl');
Utils::addRoute('orders',     'OrderCtrl');
Utils::addRoute('news',     'NewsCtrl');

//Utils::addRoute('action_name', 'controller_class_name');