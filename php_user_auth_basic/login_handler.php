<!--login_handler.php-->
<?php
session_start();

$user_info = [
    ['id' => 0, 'username' => 'Ashley', 'password' => 'stuff'],
    ['id' => 1, 'username' => 'Barb', 'password' => 'stuff'],
    ['id' => 2, 'username' => 'Chelsea', 'password' => 'stuff'],
    ['id' => 3, 'username' => 'April', 'password' => 'stuff'],
    ['id' => 4, 'username' => 'Riley', 'password' => 'stuff'],
];

$username = $_POST['username'];
$password = $_POST['password'];

for($i = 0; $i < count($user_info); $i++){
    if ($username == $user_info[$i]['username']){
        print ' **it worked!** ';
    }
    else {
        print ' it didnt work ';
    }
}

//if(!empty($_POST['username']) && (!empty($_POST['password'])){
//    if($user_info[$_POST['username']]['password'])
//    })

?>