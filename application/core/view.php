<?php
class View
{

    function generate($content_view, $data1 = null, $data2 = null, $data3 = null)
    {
        $content_view = Controller::$nameFolderViews.'/'.$content_view;

        include 'application/views/view_template.php';
   }

}