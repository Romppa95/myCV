<?php

$host="127.0.0.1:49613";
$user="azure";
$password="6#vWHD_$";
$db="localdb";

$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
/*if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());}
if(isset(['username'])){

$username = $_POST['username'];
$password = $_POST['password'];



$result = mysql_query("select * from log where username = '".$username."' and password = '".$password."'");


if (mysql_num_rows($result)==1) {
echo "Welcome!"$row['username'];
exit();
} else {
echo "Failed!";
}}*/
echo "hello";
?>