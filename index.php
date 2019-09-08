<?php

if (isset($_POST['cv'])) {

$name = $_POST['name'];

$email = $_POST['email'];

$message = $_POST['message'];

$title = $_POST['title'];

​

$data = "<b>Name:</b> $name <br> <b>Email:</b> $email <br> <b>Title:</b> $title <br><b>Message:</b>$message <br> <hr>";

$fp = fopen('data.txt', 'a');

fwrite($fp, $data);

fclose($fp);

​

$myfile = fopen("data.txt", "r") or die("Unable to open file!");

echo fread($myfile,filesize("data.txt"));

fclose($myfile);

}

?>