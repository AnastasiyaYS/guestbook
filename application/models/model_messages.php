<?php
class Model_messages extends Model {

    private $messages;

    public function showAll() {
        $stmt = Model::$connect->prepare("SELECT `id_msg`, `sender_name`, `anonymity`, `datetimewriting`, `message` FROM `messages` ORDER BY `id_msg` DESC");
        $stmt->execute();
        $this->messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

        Session::init();

        return $this->messages;
    }

    public function paginationSettings(){
        $numbMessages = count($this->messages);
        $count_pages = ceil($numbMessages/$this->countMesOnPage);

        if (!empty($_GET['page'])) {
            $active = $_GET['page'];
        }   else $active = 1;

        if ((ceil($numbMessages/$this->countMesOnPage))>=3) {
            $count_show_pages = 3;
        } else {
            $count_show_pages = ceil($numbMessages/$this->countMesOnPage);
        }

        $url = "/";
        $url_page = "/messages/showAll?page=";
        if ($count_pages > 1) {
            $left = $active - 1;
            $right = $count_pages - $active;

            if ($left < floor($count_show_pages / 2)) $start = 1;
            else $start = $active - floor($count_show_pages / 2);
            $end = $start + $count_show_pages - 1;
            if ($end > $count_pages) {
                $start -= ($end - $count_pages);
                $end = $count_pages;
                if ($start < 1) $start = 1;
            }
        }   else {
            $start = 1;
            $end = 1;
        }

        return $paginationSettings = [
            'count_pages' => $count_pages,
            'active' => $active,
            'start' => $start,
            'end' => $end,
            'url' => $url,
            'url_page' => $url_page,
            'countMesOnPage' => $this->countMesOnPage
        ];
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
                $err[3] = 'Заполните поле \'Имя\' или опубликуйтесь анонимно';
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

    public function deleteMessage() {
        if(!empty($_POST["delete"])) {
            $id = $_POST["delete"];

            $stmt = Model::$connect->prepare('DELETE FROM `messages` WHERE `id_msg`=?');
            $stmt->execute(array($id));
        }
    }
}