<?php

/**
 * Created by PhpStorm.
 * User: justi
 * Date: 2016-10-22
 * Time: 16:03
 */
class UsersController
{
    public function login()
    {

        $getUsername = htmlentities($_POST['username'], ENT_QUOTES);
        $getPassword = htmlentities($_POST['password'], ENT_QUOTES);

        if (App::get('database')->selectUserExists($getUsername, $getPassword)) {
            App::get('user')->login($getUsername);
            App::get('user')->redirect('login');
        } else {
            App::get('user')->redirect('login');
        }

    }

    public function logout()
    {
    App::get('user')->doLogout();
        App::get('user')->redirect('login');

    }

}