<?php
class Controller_messages extends Controller
{
    function action_index()
    {

        $this->model->showAll;
        $this->view->generate('view_display_all_messages.php', $data);
    }

    function action_showOne(){

    }

    function action_write(){

    }


}
