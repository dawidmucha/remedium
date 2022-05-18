<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('articles'); #default action
App::getRouter()->setLoginRoute('accessdenied'); #action to forward if no permissions

Utils::addRoute('articles', 'ArticlesCtrl');
Utils::addRoute('newarticle', 'NewArticleCtrl', ['user', 'admin']);

Utils::addRoute('signup', 'SignUpCtrl');
Utils::addRoute('login', 'LogInCtrl');
Utils::addRoute('logout', 'LogInCtrl');

Utils::addRoute('accessdenied', 'LoginCtrl');

//Utils::addRoute('action_name', 'controller_class_name');