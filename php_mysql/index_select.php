<!-- index_select.php -->

<?php
require_once('mysql_connect.php');
//print("conn: ");
//print_r($conn);

$query = 'SELECT id, title, details FROM `todo_items`';

$result = mysqli_query($conn, $query);
//print("<br><br><pre>" . print_r($result, true).'<pre>');
//    print_r($result);
if (!empty($result) && mysqli_num_rows($result) > 0) {
    print("<br>we have results");

        while($row = mysqli_fetch_assoc($result)){
        print("<br><pre>got a row".print_r($row,true));
            $output[] = $row;
    }
}

?>


<!--connect (hide the config!)-->
<!--make query-->
<!--send query-->
<!--check if result is valid-->
<!--check if there are rows-->
<!--go through each row-->
