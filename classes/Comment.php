<?php

/**
 * Created by PhpStorm.
 * User: justi
 * Date: 2016-09-30
 * Time: 21:50
 */
class Comment
{
    private $id;
    private $userid;
    private $recipeid;
    private $comment;
    private $date;
    private $isdeleted;

    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @return mixed
     */
    public function getRecipeid()
    {
        return $this->recipeid;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $isdeleted
     */
    public function setIsdeleted()
    {
        $this->isdeleted = 1;
    }

}