<?php

/**
 * Created by PhpStorm.
 * User: justi
 * Date: 2016-10-22
 * Time: 15:12
 */
class CommentsController
{
    public function view($recipeid)
    {
        $comments = App::get('database')->selectAll('comments', 'Comment');

        $commentBuffer = '';

        foreach ($comments as $comment) {
            if ($comment->getRecipeid() == $recipeid) {
                $commentBuffer .= '<h1>user ' . $comment->getUserid() . ' says: </h1> <p>' . $comment->getComment() . '</p>';

                if (isset($_SESSION['user_session']) && $comment->getUserid() == $_SESSION['user_session']) {
                    $tempId = $comment->getId();

                    $commentBuffer .= "<form action='deletecomment' method='post'>
                      <input type='hidden' name='commentid' value='$tempId'/>
                      <input type='hidden' name='action' value='delete'/>
                      <input type='hidden' name='recipeid' value='$recipeid'/>
                      <input type='submit' value='Delete Comment'/>
                      </form>";
                }
            }
        }

        view("comments", ['commentBuffer' => $commentBuffer, 'recipeid' => $recipeid]);
        if (App::get('user')->isLoggedin()) {
            view("comment-add", ['recipeid' => $recipeid]);
        }
    }

    public function addComment()
    {
        if (App::get('database')->storeComment()) {
            if (htmlentities($_POST['recipeid'], ENT_QUOTES) == 1) {
                header('Location: /meatballs');
            }
            if (htmlentities($_POST['recipeid'], ENT_QUOTES) == 2) {
                header('Location: /pancakes');
            }
        }
    }

    public function deleteComment()
    {
        if (App::get('database')->deleteComment()) {

            if ($_POST['recipeid'] == 1) {
                header('Location: /meatballs');
            }
            if ($_POST['recipeid'] == 2) {
                header('Location: /pancakes');
            }
        }
    }
}