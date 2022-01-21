<?php
    include("config.php");
    
    $db_table = 'crud';

    $sql = "SELECT id, userId, userPassword, title, content FROM {$db_table}";
    $result = $db->query($sql);
?>