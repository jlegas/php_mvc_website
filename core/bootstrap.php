<?php
/**
 * Created by PhpStorm.
 * User: justi
 * Date: 2016-09-30
 * Time: 22:53
 */

session_start();

App::bind('config', require 'config.php');
App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));
App::bind('user', new User);


function view($name, $data = []) {
    extract($data);
    return require "views/{$name}.view.php";
}