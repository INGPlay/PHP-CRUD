<?php
    include("config.php");

    $userId = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    $userPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);

    $db_table = 'crud';
    
    $sql = "INSERT INTO {$db_table} (userId, userPassword, title, content) VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    
    $db_userId = $userId;
    $db_userPassword = $userPassword;
    $db_title = $title;
    $db_content = $content;

    if($stmt->execute(array($db_userId,$db_userPassword,$db_title,$db_content)) == TRUE) {
        mysqli_close($db);
        header("Location:/thread.html");
    }
    else {
        echo("nono");
    }

    mysqli_close($db);
    //db end
?>