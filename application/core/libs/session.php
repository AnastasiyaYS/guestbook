<?php
class Session {
    public static function init() {
        session_start();
    }

    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public static function get($key , $key2 = null) {
        if (isset($_SESSION[$key]) && isset($_SESSION[$key][$key2])){
            return $_SESSION[$key][$key2];
        } else if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }

    public static function destroy() {
        session_destroy();
        $_SESSION = array();
    }
}