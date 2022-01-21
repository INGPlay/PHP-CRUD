<?php
    include("../config.php");

    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $userId = filter_input(INPUT_POST, 'userId', FILTER_SANITIZE_STRING);
    $userPassword = filter_input(INPUT_POST, 'userPassword', FILTER_SANITIZE_STRING);
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);

    $sql = "UPDATE crud SET userId = '$userId', userPassword = '$userPassword', title = '$title', content = '$content' WHERE id = ?";
    
    echo $sql;
    $stmt = $db->prepare($sql);
    
    $stmt->execute(array($id));

    $db->close();

    header("Location:/thread.html");
?>