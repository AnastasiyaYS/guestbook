<?php
require_once 'core/conf/config.php';
require_once 'core/conf/session.php';
require_once 'core/conf/routing.php';
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';

Routing::execute();
