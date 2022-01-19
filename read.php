<?php
    include("config.php");
    
    $db_table = 'crud';

    $sql = "SELECT id, userId, userPassword, title, content FROM {$db_table}";
    $result = $db->query($sql);

    echo "
        <table border=1>
        <th>
            <td>Id</td>
            <td>password</td>
            <td>title</td>
            <td>content</td>
        </th>
        ";
    while($row = $result->fetch_row()){
        echo"
            <tr>
                <td>
                    {$row[0]}
                </td>
                <td>
                    {$row[1]}
                </td>
                <td>
                    {$row[2]}
                </td>
                <td>
                    {$row[3]}
                </td>
                <td>
                    {$row[4]}
                </td>
            </tr>
            ";
    }
    echo "</table>";


    mysqli_close($db);
    //db end
?>