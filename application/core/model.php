<?php
class Model extends Config
{
    protected static $connect;

    public function __construct()
    {
        if (!isset(self::$connect)) {
            $dsn = "mysql: host=$this->host; dbname=$this->db; charset=$this->charset";
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            self::$connect = new PDO($dsn, $this->user, $this->pass, $opt);
        }
        return self::$connect;
    }

    public function clean($value = "") {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
        return $value;
    }

    public function check_length($value = "", $min, $max) {
        $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
        return !$result;
    }
}