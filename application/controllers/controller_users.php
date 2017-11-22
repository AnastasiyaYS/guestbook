<?php
class Controller_users extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->model = new Model_users();
    }

    function action_index()
    {
        $this->model->authorization();
        $this->view->generate('view_authorization.php');
    }

    function action_auth(){
        $this->model->authorization();
        $this->view->generate('view_authorization.php');
    }

    function action_reg(){
        if(!empty($_POST)) {
            $err = $this->model->registration($_POST['firstname'], $_POST['lastname'], $_POST['login'],
                $_POST['email'], $_POST['password'], $_POST['confirm_password'], $_POST['optionsRadios']);
            if (sizeof($err) == 0) {

                $this->view->generate('view_profile.php');
            } else {
                $this->view->generate('view_registration.php', $err);
            }
        }
        else {
            $this->view->generate('view_registration.php');
        }
    }

}
