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

    function action_showAll()
    {
        $data = $this->model->showAll();

        $paginationSettings = $this->model->paginationSettings();

        if (empty($_POST["writeMessage"])) {
            if (sizeof($data) != 0) {
                $this->view->generate('view_display_all_messages.php', $paginationSettings, $data);
            } else {
                $this->view->generate('view_regret.php');
            }
        } else {
            $data1 = $this->model->writeMessage($_POST['username'], $_POST['boxAnonym'], $_POST['utext']);
            $data2 = $this->model->rememberEnteredValues($_POST['username'], $_POST['boxAnonym'], $_POST['utext']);
            if (sizeof($data) != 0) {
                $this->view->generate('view_display_all_messages.php', $paginationSettings, $data, $data1, $data2);
            } else {
                $this->view->generate('view_regret.php', $data, $data1, $data2);
            }
        }
    }
}
