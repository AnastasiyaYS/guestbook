<?php
class View
{

    function generate($content_view, $data = null)
    {
        $content_view = Controller::$nameFolderViews.'/'.$content_view;

        /*
        if(is_array($data)) {
        // преобразуем элементы массива в переменные
        extract($data);
        }*/

        include 'application/views/view_template.php';
   }

}