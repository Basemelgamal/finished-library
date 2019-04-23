<?php
echo "basem";
include ('connect.php');
if(isset($_POST['submit'])){
    
	$book_name=$_POST['bookname'];
	$name=$_POST['name'];
	$idnum=$_POST['id-number'];
    $date=$_POST['deliver-date'];
    }
    
    $select_user="SELECT * FROM borrow WHERE book='$book_name' ";
    $user_result = $conn->query($select_user);
    $row = $user_result->fetch_assoc();
    $count_user=$user_result->num_rows;
    print_r($count_user);
    if ($count_user > 0) {
     header("Location: ../borrow.php?error");
    }else{
    $borrow="INSERT INTO borrow(book, date, name, cardnum) VALUES ('$book_name','$date','$name','$idnum')";
    $result = $conn->query($borrow);
    //print_r($result);
     header("Location: ../index.php");
    }
?>