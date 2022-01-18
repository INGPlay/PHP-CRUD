<?php
    //
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    $pasword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);

    echo $id;
    echo $pasword;
    echo $content;
?>