<?php
require_once('model.php');
require_once('view.php');

if(isset($_POST['send'])) {
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comment'])) {
        $output = '<p class="error">You did not fill in a required field.</p>';
    } else {
        $name  = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
        $comment  = htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8');
        $time = new DateTime('NOW', new DateTimeZone('Europe/Dublin'));
        $post_time = $time->format('Y-m-d H:i:s');

        $data  = ['name' => $name, 'email' => $email, 'comment' => $comment, 'created_at' => $post_time];
        $cols  = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));

        $sql = 'INSERT INTO comment (' . $cols . ') VALUES (' . $values . ')';

        $insert = $db->prepare($sql);

        $output = ($insert->execute($data)) 
        ? message('Thanks for commenting!', 'success') 
        : message('There was an error submitting your comment. Please try again later.', 'error');
    }
}
