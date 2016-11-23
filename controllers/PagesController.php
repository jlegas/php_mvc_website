<?php

/**
 * Created by PhpStorm.
 * User: justi
 * Date: 2016-10-18
 * Time: 16:25
 */
class PagesController
{
    public function home()
    {
        if (isset($_SESSION['user_session'])) {
            $userName = $_SESSION['user_session'];
        } else {
            $userName = "unauthenticated user";
        }
        view('head');
        view('nav');
        view('index', ['userName' => $userName]);
        view('footer');
        return;
    }

    public function calendar()
    {
        view('head');
        view('nav');
        view('calendar');
        view('footer');
        return;
    }

    public function login()
    {
        view('head');
        view('nav');

        if (App::get('user')->isLoggedin()) {

            view('auth-logout');
        } else {
            view('auth-login');
        }
        view('footer');
        return;
    }

    public function meatballs()
    {
        view('head');
        view('nav');
        view('meatballs');
        CommentsController::view(1);
        view('footer');
        return;
    }

    public function pancakes()
    {
        view('head');
        view('nav');
        view('pancakes');
        CommentsController::view(2);
        view('footer');
        return;
    }

}

