<!--login_form.php-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <input type="text" name="username" placeholder="user name" id="username">
    <input type="password" name="password" placeholder="password" id="password">
    <button type="button" class="login">Login</button>

<script>
    $(document).ready(function(){
        $('.login').click(function(){
            var user = $('#username').val();
            var password = $('#password').val();
            console.log('it was clicked');
            console.log('user is : ', user);
            $.ajax({
                url: 'login_handler.php',
                data: {
                    username: user,
                    password: password
                },
                cache: false,
                method: 'post',
                dataType: 'text',
                success: function(response){
                    console.log(response);
                }
            })
        });
    });
</script>
</body>
</html>




