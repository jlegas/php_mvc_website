<?php
/**
 * Created by PhpStorm.
 * User: justi
 * Date: 2016-10-01
 * Time: 10:49
 */

$router->get('', 'PagesController@home');
$router->get('calendar', 'PagesController@calendar');
$router->get('meatballs', 'PagesController@meatballs');
$router->get('pancakes', 'PagesController@pancakes');
$router->get('login', 'PagesController@login');
$router->get('comments', 'CommentsController@view');
$router->get('meatballs/sub', 'PagesController@meatballs');


$router->post('login', 'UsersController@login');
$router->post('logout', 'UsersController@logout');
$router->post('addcomment', 'CommentsController@addComment');
$router->post('deletecomment', 'CommentsController@deleteComment');


