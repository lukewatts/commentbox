<?php

function message($msg = '', $type = 'success')
{
    if (!empty($msg)) {
        $output = '<p class="' . $type . '">' . $msg . '</p>';
    } else {
        $output = '';
    }

    return $output;
}

function display_commentbox($num = 5)
{
    $db = DB::getInstance();
    /* DISPLAY SHOUTS*/
    $sql = 'SELECT * FROM comment ORDER BY id DESC LIMIT '. $num .';';
    $query = $db->query($sql);
    $query->setFetchMode(PDO::FETCH_OBJ);

    echo '<ul class="commentbox">';
    while ($comment = $query->fetch()) {
        
        // $post_time = $shout->

        // create our Gravatar from each users email address.
        $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=" . md5( strtolower($comment->email) ) . "&size=70";

        echo '<li class="comment">
            <h4 class="title">'. $comment->name .' at ' . $comment->created_at . '</h4>
            <div class="avatar">
                <img src="'. $grav_url .'" alt="Gravatar" />
            </div>
            <p>' . $comment->comment . '</p>
        </li>';
    }
    echo '</ul>';

}