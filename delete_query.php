<?php include_once('includes/connection.php'); ?>
<?php
    $query = "SELECT id, first_name, last_name, email FROM users_1";

    $result_set = mysqli_query($connection, $query);

    if($result_set){
        echo mysqli_num_rows($result_set). " records are in the table. <br>";

        /*$record =  mysqli_fetch_assoc($result_set);
        echo("<pre>");
            print_r($record);
        echo("</pre>");

        $record =  mysqli_fetch_assoc($result_set);
        echo("<pre>");
            print_r($record);
        echo("</pre>");*/

        $table = '<table>';
        $table .= '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>E-mail</th></tr>';

        while($record = mysqli_fetch_assoc($result_set)){
            //echo ($record['first_name'] ."<br>");

            $table .='<tr>';
            $table .='<td>' .$record['id'] .'</td>';
            $table .='<td>' .$record['first_name'] .'</td>';
            $table .='<td>' .$record['last_name'] .'</td>';
            $table .='<td>' .$record['email'] .'</td>';
            $table .='<tr>';
            
        }
        $table .='</table>';    
    }

    //update the db

    /*$query = "UPDATE users_1 SET first_name = 'Dhanushka' WHERE id = 6";

    $result_list = mysqli_query($connection, $query);

    if($result_list){
        echo mysqli_affected_rows($connection). " is/are changed in the table <br>";

    }else{
        echo"database is not changed";
    }*/

    //delete a record

    $query = "DELETE FROM users_1 WHERE id= 1 LIMIT 1";

    $result_set = mysqli_query($connection, $query);

    if($result_set){
        echo mysqli_affected_rows($connection). "is deleted from the table";
    }else{
        echo "There is no record deleted yet";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/table.css">
    <title>Select_query</title>
    
</head>
<body>
    <?php echo $table;?>
</body>
</html>

<?php mysqli_close($connection); ?>