<?php

/**
 * Created by PhpStorm.
 * User: justi
 * Date: 2016-09-30
 * Time: 22:19
 */
class Connection
{
    public static function make($config) {

        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        }
        catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}