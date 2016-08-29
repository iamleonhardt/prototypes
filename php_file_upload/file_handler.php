<!-- File Handler -->
<pre>
<?php
$uploadFolder = 'uploads/';
if (!file_exists($uploadFolder)) {
    mkdir('uploads');
}
$errors = [];
$messages = [];
$allowed = array('gif', 'jpeg', 'jpg', 'png');
$filename = $_FILES['upload_file']['name'];
$tempname = $_FILES['upload_file']['tmp_name'];

$ext = pathinfo($_FILES['upload_file']['name'])['extension'];
$maxsize = 2000000;
if ($_FILES['upload_file']['size'] < $maxsize) {
    $messages[] = 'filesize is good yo';
} else {
    $errors[] = 'File size is too large. File must be less than 2 megabytes.';
}
if (in_array($ext, $allowed)) {
   $messages[] = 'ext is valid';
} else {
    $errors[] =  'ext is not valid';
}
if (count($errors) == 0) {
    if(move_uploaded_file($tempname, $uploadFolder . $filename)){
        $messages[] = 'the upload worked';
    }
    else {
        $errors[] = 'the upload didnt work';
    };
}
else {
    $errors[] =  'filesize or extension are not valid';
}
print ('errors : ' . '<br>');
print_r($errors);
print ('messages : ' . '<br>');
print_r($messages);

$images = glob($uploadFolder."*.jpg");
foreach($images as $image) {
    echo '<img style="width:200px; float:left" src="'.$image.'" /><br />';
}
?>
</pre>


