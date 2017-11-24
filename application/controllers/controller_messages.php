<?php
class Controller_messages extends Controller
{
    function __construct() {
        parent::__construct();
        $this->model = new Model_messages();
    }

    function action_index(){
        $this->action_showAll();
    }

    function action_showAll() {
        $data = $this->model->showAll();
        if (sizeof($data) != 0) {
            $this->view->generate('view_display_all_messages.php', $data);
        } else {
            $this->view->generate('view_regret.php');
        }

    }

    function action_write(){

    }


}
