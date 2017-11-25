<?php
class Model_messages extends Model {

    public function showAll() {
        $stmt = Model::$connect->prepare("SELECT `sender_name`, `anonymity`, `datetimewriting`, `message` FROM `messages` ORDER BY `id_msg` DESC");
        $stmt->execute();
        $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

        Session::init();

        return $messages;
    }

    public function writeMessage($username, $boxAnonym, $utext) {
        $err = [];

        $username = $this->clean($username);
        $utext = $this->clean($utext);

        if(strlen($utext)=="0") {
            $err[0] = 'Заполните поле \'Текст Сообщения\'';
        }  elseif(!$this->check_length($utext, 1, 1000)) {
                $err[2] = "Текст сообщения должен содержать не более 1000 символов";
        }

        if (empty($boxAnonym)){
            if(strlen($username)=="0") {
                $err[3] = 'Заполните поле \'Имя\'';
            } elseif(!$this->check_length($username, 2, 60)) {
                $err[1] = "Имя должно содержать не менее 2 и не более 60 символов ";
            }
        }

        if (sizeof($err) == 0) {
            $utext=str_replace("\r\n","<br>",$utext);

            Session::init();

            $id_user = Session::get('user','id_user');

            $stmt = Model::$connect->prepare('INSERT INTO `messages` (`id_author`, `sender_name`, `anonymity`, `message`, `datetimewriting`) VALUES (?, ?, ?, ?, now())');
            $stmt->execute(array($id_user, $username, $boxAnonym, $utext));

        }
        return $err;
    }

    public function rememberEnteredValues($var1, $var2, $var3) {
        $values = [
            1 => $var1,
            2 => $var2,
            3 => $var3,
        ];
        if(isset($_POST['newMessage']) && (isset($_SESSION))) {
            $values[1]='';
        }
        return $values;
    }

}