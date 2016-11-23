<?php

/**
 * Created by PhpStorm.
 * User: justi
 * Date: 2016-10-02
 * Time: 13:44
 */
class User
{
    public function login($username)
    {
            $_SESSION['user_session'] = $username;
            return true;
    }

    public function isLoggedin()
    {
        if (isset($_SESSION['user_session'])) {
            return true;
        }
    }

    public function redirect($url)
    {
        header("Location: $url");
    }

    public function doLogout()
    {
        session_destroy();
        unset($_SESSION['user_session']);
        $cookiesSet = array_keys($_COOKIE);
        for ($x=0;$x<count($cookiesSet);$x++) setcookie($cookiesSet[$x],"",time()-1);
    }

}