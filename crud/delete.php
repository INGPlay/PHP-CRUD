<?php
    include("config.php");

    if(array_key_exists('delete',$_POST)){
        $sql = "DELETE FROM crud WHERE id = ?;";
        $stmt = $db->prepare($sql);
        
        $db_index = $_GET["index"];
        $stmt->execute(array($db_index));

        header("Location:/thread.html");
    }
?>