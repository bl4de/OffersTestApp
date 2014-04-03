<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'config.php';

require_once 'core/baseController.php';
require_once 'core/baseModel.php';
require_once 'core/baseCollection.php';
require_once 'core/baseView.php';
require_once 'core/orm.php';
require_once 'core/security.php';

require_once 'application.php';

$app = new Application("App");

$appInstance = $app->getInstance();
