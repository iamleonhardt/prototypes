<!-- index_select.php -->

<?php
    require_once('mysql_connect.php');

    $query = 'SELECT * FROM `todo_items`';

    $result = mysqli_query($conn, $query);
    print_r($result);

?>



<!--connect (hide the config!)-->
<!--make query-->
<!--send query-->
<!--check if result is valid-->
<!--check if there are rows-->
<!--go through each row-->
