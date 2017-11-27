<?php
class Model_users extends Model {

    public function create_admin(){
        $pass = 'qwe1!QWE'.$this->salt;
        $password = password_hash($pass, PASSWORD_DEFAULT);

        $stmt = Model::$connect->prepare('INSERT INTO `users` (`login`, `password`, `user_status`) VALUES (?, ?, ?)');
        $stmt->execute(array('admin', $password, 'admin'));

        if (password_verify('qwe1!QWE'.$this->salt, $password)) {
            echo 'Пароль правильный!';
        } else {
            echo 'Пароль неправильный.';
        }
    }

    public function authorization($login, $password){

        $err = [];

        $login = $this->clean($login);
        $password = $this->clean($password);

        if(!$this->check_length($login, 2, 30)) {
            $err[1] = 'Длина вашего логина не может быть менее 2 и более 30 символов';
        };

        if(!$this->check_length($password, 8, 30)) {
            $err[2] = "Длина вашего пароля не может быть менее 8 и более 30 символов";
        }

        if (sizeof($err) == 0) {

            $stmt = Model::$connect->prepare("SELECT * FROM `users` WHERE `login` = ?");
            $stmt->execute(array($login));

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!is_null($user) && password_verify($password . $this->salt, $user['password'])) {
                Session::init();
                Session::set('loggedIn', true);
                Session::set('user', $user);
            } else {
                $err[3] = "Неверный логин или пароль!";
            }
        }

        return $err;
    }

    public function registration($firstname, $lastname, $login, $email, $password, $confirm_password, $gender){

        $err = [];

        $firstname = $this->clean($firstname);
        $lastname = $this->clean($lastname);
        $login = $this->clean($login);
        $email = $this->clean($email);
        $password = $this->clean($password);
        $confirm_password = $this->clean($confirm_password);

        if(empty($firstname) || empty($lastname) || empty($login) || empty($email) || empty($password) || empty($confirm_password)) {
            $err[0] = "Заполните пустые поля!";
        }

        if(!$this->check_length($firstname, 2, 30)) {
            $err[1] = "Имя должно содержать не менее 2 и не более 30 символов";
        };

        if(!$this->check_length($lastname, 2, 30)) {
            $err[2] = "Фамилия должна содержать не менее 2 и не более 30 символов";
        };

        if(!$this->check_length($login, 2, 30)) {
            $err[3] = "Логин должен содержать не менее 2 и не более 30 символов";
        };

        $stmt = Model::$connect->prepare("SELECT * FROM `users` WHERE `login` = ?");
        $stmt->execute(array($login));

        $stmt = Model::$connect->prepare("SELECT `id_user` FROM `users` WHERE `login` LIKE ?");
        $stmt->execute(array($login));
        $stmt = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!empty($stmt)) {
            $err[4] = "Этот логин уже занят. Выберите другой";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err[5] = "Неверный формат email";
        }

        if(!$this->check_length($password, 8, 30)) {
            $err[6] = "Пароль должен содержать не менее 8 и не более 30 символов";
        }

        if (sizeof($err) == 0) {
            if ($password == $confirm_password) {
                $pass = $password . $this->salt;
                $password = password_hash($pass, PASSWORD_DEFAULT);

                $stmt = Model::$connect->prepare('INSERT INTO `users` (`firstname`, `lastname`, `login`, `email`,
                        `password`, `gender`, `user_status`) VALUES (?, ?, ?, ?, ?, ?, ?)');
                $stmt->execute(array($firstname, $lastname, $login, $email, $password, $gender, 'user'));

            } else {
                $err[7] = "Пароли не совпадают";
            }
        }
        return $err;
    }

    public function rememberEnteredValues ($var1, $var2, $var3, $var4, $var5){
        $values = [
            1 => $var1,
            2 => $var2,
            3 => $var3,
            4 => $var4,
            5 => $var5,
        ];

        return $values;
    }
}