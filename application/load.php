<?php
require_once 'core/libs/config.php';
require_once 'core/libs/session.php';
require_once 'core/libs/routing.php';
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';

Routing::execute();
