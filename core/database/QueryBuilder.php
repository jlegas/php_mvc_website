<?php

/**
 * Created by PhpStorm.
 * User: justi
 * Date: 2016-09-30
 * Time: 22:45
 */

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll($table, $intoClass)
    {

        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

//all comments are downloaded from the db
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);

    }

    //returns true or false if it finds matching user+password in the db
    public function selectUserExists($username, $password)
    {
        if ($username && $password) {
            $statement = $this->pdo->prepare("select * from users where username='$username'");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_COLUMN, 1);
            if ($result) {
                return password_verify($password, $result[0]);
            }
            return false;
        }
        return false;
    }

    public function storeComment()
    {
            $statement = $this->pdo->prepare("INSERT INTO comments (`userid`, `comment`, `recipeid`) 
              VALUES ('" . htmlentities($_SESSION['user_session'], ENT_QUOTES) . "', '" . htmlentities($_POST['text'], ENT_QUOTES) . "', '" . htmlentities($_POST['recipeid'], ENT_QUOTES) . "');");
            $statement->execute();
            return true;
    }

    public function deleteComment()
    {
            $statement = $this->pdo->prepare("DELETE FROM comments WHERE id = '" . $_POST['commentid'] . "';");
            $statement->execute();
            return true;
    }



}
