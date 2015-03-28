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

    ob_start();
?>
<ul class="commentbox">

<?php
while ($comment = $query->fetch()) {

    // create our Gravatar from each users email address.
    $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=" . md5( strtolower($comment->email) ) . "&size=70";

?>
    <li class="comment">
        <h4 class="title"> <?php echo $comment->name; ?> at <?php echo $comment->created_at; ?> </h4>
        <div class="avatar">
            <img src="<?php echo $grav_url; ?>" alt="Gravatar" />
        </div>
        <p>
            <?php echo $comment->comment; ?>
        </p>
    </li>
<?php
}
?>
</ul>
<form action="" method="post">
    <h2>Shout! Let it all out!</h2>
    <div class="fname">
        <label for="name">Name: </label>
        <input id="name" name="name" type="text" cols="20" />
    </div>
    <div class="femail">
        <label for="email">Email: </label>
        <input id="email" name="email" type="text" cols="20" />
    </div>
    <textarea name="comment" rows="5" cols="40"></textarea>
    <input name="send" type="hidden" />
    <p><input type="submit" value="send" /></p>
</form>

<?php
    return ob_get_contents();

}