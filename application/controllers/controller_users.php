<?php
class Controller_users extends Controller
{
    function __construct() {
        parent::__construct();
        $this->model = new Model_users();
    }

    function action_index() {
        $this->action_auth();
    }

    function action_auth() {
        if(!empty($_POST["auth"])) {
            $data1 = $this->model->authorization($_POST['login'], $_POST['password']);
            if (sizeof($data1) == 0) {
                $this->view->generate('view_profile.php');
            } else {
                $this->view->generate('view_authorization.php', $pagSet = null, $data1);
            }
        } else {
            $this->view->generate('view_authorization.php');
        }
    }

    function action_logOut() {
        Session::init();
        Session::destroy();
        header('Location: /users/auth');
        exit();
    }

    function action_reg() {
        if(!empty($_POST["reg"])) {
            $data1 = $this->model->registration($_POST['firstname'], $_POST['lastname'], $_POST['login'],
                $_POST['email'], $_POST['password'], $_POST['confirm_password'], $_POST['optionsRadios']);
            $data2 = $this->model->rememberEnteredValues($_POST['firstname'], $_POST['lastname'], $_POST['login'], $_POST['email'], $_POST['optionsRadios']);
            if (sizeof($data1) == 0) {

                $this->view->generate('view_successful_registration.php');
            } else {
                $this->view->generate('view_registration.php', $pagSet = null, $data1, $data2);
            }
        } else {
            $this->view->generate('view_registration.php');
        }
    }
}
