<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('articles'); #default action
App::getRouter()->setLoginRoute('accessdenied'); #action to forward if no permissions

Utils::addRoute('articles', 'ArticlesCtrl');
Utils::addRoute('newpost', 'NewPostCtrl', ['user', 'admin']);
Utils::addRoute('login', 'LogInCtrl');

Utils::addRoute('loginAction', 'LoginCtrl');
Utils::addRoute('accessdenied', 'LoginCtrl');
Utils::addRoute('logout', 'LogInCtrl');

Utils::addRoute('signup', 'SignUpCtrl');

//Utils::addRoute('action_name', 'controller_class_name');