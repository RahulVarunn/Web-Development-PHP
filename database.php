<?php
$name_input=$_POST['name_input'];
$email_input=$_POST['email_input'];
$phone_input=$_POST['phone_input'];

$conn=new mysqli('127.0.0.1','root','','web_programing');
if($conn->connect_error){
    die('connection_failed: '.$conn->connection_error);
}
$sql = sprintf("INSERT INTO `registration` (`name`,`email_id`,`phone_no`) values (\"%s\",\"%s\",\"%s\")",$name_input,$email_input,$phone_input);
if(!mysqli_query($conn,$sql)){
  echo mysqli_error($conn);
}

$conn->close();
?>