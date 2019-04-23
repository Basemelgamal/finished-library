<?php
session_start();

include "fun/connect.php";

if (isset($_POST['submit'])) {
$username=$_POST['username'];
$password=$_POST['password'];
}
$select_user="SELECT * FROM users WHERE username='$username' AND password='$password' ";
$user_result = $conn->query($select_user);
$row = $user_result->fetch_assoc();
$count_user=$user_result->num_rows;
print_r($count_user);
if ($count_user > 0) {
$_SESSION["username"] = $row['username'];
$_SESSION["id"] =  $row['id'];
header("Location: newbook.php");
}
else{ echo "incorrect";}
?>