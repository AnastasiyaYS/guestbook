<?php
class Model_users extends Model {

    /**
     *
     */
    public function test(){

        $stmt = Model::$connect->query('SELECT `firstname` FROM `users`');
        while ($row = $stmt->fetch())
        {
            echo $row['firstname'] . "\n";
        }

        $pass = 'admin'.$this->salt;
        $password = password_hash($pass, PASSWORD_DEFAULT);

        $stmt = Model::$connect->prepare('INSERT INTO `users` (`login`, `password`, `user_status`) VALUES (?, ?, ?)');
        $stmt->execute(array('admin', $password, 'admin'));

        echo $password;

        if (password_verify('admin'.$this->salt, $password)) {
            echo 'Пароль правильный!';
        } else {
            echo 'Пароль неправильный.';
        }
    }

    public function authorization(){

    }

    public function registration($firstname, $lastname, $login, $email, $password, $confirm_password, $gender){
        $err = [];
        if ($password==$confirm_password){

            //TODO: ПРОВЕРКА НЕТ ЛИ УЖЕ ТАКОГО ЛОГИНА ПОЛЬЗОВАТЕЛЯ
            $stmt = Model::$connect->query("SELECT * FROM users WHERE login LIKE '{$login}'");
            if ($stmt == 0) {



            }
            else $err[] = 'Этот логин уже занят';

            $pass = $password.$this->salt;
            $password = password_hash($pass, PASSWORD_DEFAULT); // - хешированный пароль, который можно передавать в БД


            $stmt = Model::$connect->prepare('INSERT INTO `users` (`firstname`, `lastname`, `login`, `email`,
                    `password`, `gender`, `user_status`) VALUES (?, ?, ?, ?, ?, ?, ?)');
            $stmt->execute(array($firstname, $lastname, $login, $email, $password, $gender, 'user'));


        }
        else {
            $err[] = 'Пароли не совпадают'; //если значение переменной не пусто, то будем выводить ошибки в нужных местах
        }

        return $err;
    }
}