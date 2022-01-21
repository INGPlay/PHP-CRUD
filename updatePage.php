<?php
        include("./base/uptag.html");
        include("config.php");

        $index = $_GET["index"];
        $sql = "SELECT userId, userPassword, title, content FROM crud WHERE id = ?;";
        $stmt = $db->prepare($sql);
        
        $stmt->execute(array($index));
        $stmt->bind_result($db_userId, $db_userPassword, $db_title, $db_content);

        if($stmt->fetch()){

        }
        else {

        }
    ?>