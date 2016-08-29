<!doctype html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#submit').click(function(){
                var formEle = $('#ajax-upload');

                $.ajax({
                    url: 'file_handler.php',
                    processData: false,
                    contentType: false,
                    method: 'post',
                    data: new FormData(formEle[0]),
                    success: function(result){
                        console.log(result);
                    }
                })
            })
        })
    </script>
</head>
<body>
<form id="ajax-upload" action="file_handler.php" method="post" enctype="multipart/form-data">
    <input type="file" name="upload_file">
    <input type="text" name="description" placeholder="description">
    <button type="button" id="submit">Submit</button>
</form>
</body>
</html>