<?php
class Controller {

    /* описание переменных */
    public $model;
    public $view;
    public static $nameFolderViews;

    function __construct()
    {
        $this->view = new View();
        /* $modelName = 'Model_' . Controller::$nameFolderViews;
        $this->model = new $modelName(); */
    }

    /*
     * Action по умолчанию
     * $id int июентифитора
     * return string
     */
    function action_index()
    {

    }
}