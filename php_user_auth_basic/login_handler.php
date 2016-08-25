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
    if ($username == $user_info[$i]['username'] && $password == $user_info[$i]['password']){
        $_SESSION['user_id'] = $i;
        print ' **it worked!** '. $_SESSION['user_id'];
    }
    else {
        print ' it didnt work ';
    }
}

//if(!empty($_POST['username']) && (!empty($_POST['password'])){
//    if($user_info[$_POST['username']]['password'])
//    })


$output = [
    'success' => true,
];


?>


Make a php array called $output
Give it an element of success. Set it to true if login was successful, false if not
If successful, give it an element of user_id. Set it to the logging in user
Give it an element of message. Put an appropriate login message depending on login result
Use json_encode() to encode $output into a string, $output_string
Print: $output_string
Remember: If any other text is printed out alongside the json, the json conversion in the AJAX call will fail. The only thing printed can be json
