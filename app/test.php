<?php
if (isset($_POST['name'], $_POST['email'], $_POST['comment'])) {
    echo 'Your name is ' . $_POST['name'] . '<br />';
    echo 'Your email is ' . $_POST['email'] . '<br />';
    echo 'Your comment is ' . $_POST['comment'] . '<br />';
}
