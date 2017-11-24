<?php
class Model_messages extends Model {



    public function showAll() {
        //получить числовой массив с индексом, равным номеру строки БД, в каждом из которых будет лежать ассоциативный массив значений
        $stmt = Model::$connect->prepare("SELECT `id_author`, `datetimewriting`, `message` FROM `messages` ORDER BY `id_msg` DESC");
        $stmt->execute();
        $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

        Session::init();
        echo '<pre>';
        var_dump($_SESSION);
        echo '</pre>';

        return $messages;
    }

}