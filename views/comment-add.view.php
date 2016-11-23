

<form method='post' action='addcomment'>
    <input type='hidden' name='recipeid' value='<?php echo $recipeid; ?>'/>
    <input type='hidden' name='action' value='store'/>
    <input type='text' name='text'/>
    <input type='submit' value='Create Comment'/>
</form>
