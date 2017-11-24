<?php
class Routing
{
    static function execute()
    {
        $controllerName = 'messages';
        $actionName = 'index';

        $piecesOfUrl = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($piecesOfUrl[1]))
        {
            $controllerName = $piecesOfUrl[1];
        }
        if (!empty($piecesOfUrl[2]))
        {
            $actionName = $piecesOfUrl[2];
            if ($partActionName = stristr($actionName, '?', true)) {
                $actionName = $partActionName;
            }
        }

        Controller::$nameFolderViews = $controllerName;

        $modelName = 'Model_' . $controllerName;
        $controllerName = 'Controller_' . $controllerName;
        $actionName = 'action_' . $actionName;

        $fileWithModel = strtolower($modelName) . '.php';
        $fileWithModelPath	=  $_SERVER['DOCUMENT_ROOT']."/application/models/". $fileWithModel;
        if (file_exists($fileWithModelPath))
        {
            include $fileWithModelPath;
        }

        $fileWithController = strtolower($controllerName) . '.php';
        $fileWithControllerPath =  $_SERVER['DOCUMENT_ROOT']."/application/controllers/". $fileWithController;
        if (file_exists($fileWithControllerPath))
        {
            include $fileWithControllerPath;
        }
        else
        {
            Routing::ErrorPage404();
        }

        $controller = new $controllerName;
        $action = $actionName;
        if (method_exists($controller, $action))
        {
            call_user_func(array($controller, $action));
        }
        else
        {
            Routing::ErrorPage404();
        }
    }

    function ErrorPage404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
}

