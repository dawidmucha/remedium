<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('articles'); #default action
App::getRouter()->setLoginRoute('accessdenied'); #action to forward if no permissions

Utils::addRoute('signup', 'SignUpCtrl');

Utils::addRoute('login', 'LogInCtrl');
Utils::addRoute('logout', 'LogInCtrl');

Utils::addRoute('articles', 'ArticlesCtrl');

Utils::addRoute('newarticle', 'NewArticleCtrl', ['user', 'admin']);

Utils::addRoute('articlePage', 'ArticlePageCtrl');
Utils::addRoute('upvote', 'ArticlePageCtrl', ['user', 'admin']);
Utils::addRoute('comment', 'ArticlePageCtrl', ['user', 'admin']);
Utils::addRoute('removeComment', 'ArticlePageCtrl', ['user', 'admin']);
Utils::addRoute('removeArticle', 'ArticlePageCtrl', ['user', 'admin']);

Utils::addRoute('adminPanel', 'AdminPanelCtrl', ['admin']);
Utils::addRoute('adminPanelEdit', 'AdminPanelCtrl', ['admin']);
Utils::addRoute('adminPanelEditSubmit', 'AdminPanelCtrl', ['admin']);
Utils::addRoute('adminPanelAdmin', 'AdminPanelCtrl', ['admin']);
Utils::addRoute('adminPanelRemove', 'AdminPanelCtrl', ['admin']);

Utils::addRoute('user', 'UserProfileCtrl');

Utils::addRoute('accessdenied', 'LogInCtrl');