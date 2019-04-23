<?php
include 'connect.php';
if(isset($_POST['submit'])){
    
	$book_name=$_POST['books-name'];
	$book_num=$_POST['book-num'];
	$author_name=$_POST['auther-name'];
    $category=$_POST['category'];
    $category1=$_POST['category1'];
    $category2=$_POST['category2'];
    $category3=$_POST['category3'];
    $allow=array('pdfarray');
    $temp=explode(".",$_FILES['myfile']['name']);
    $extension=end($temp);
    $upload_file=$_FILES['myfile']['name'];
    move_uploaded_file($_FILES['myfile']['tmp_name'], "../images/pdf/".basename($_FILES['myfile']['name']));
    
    
    $books="INSERT INTO `books`(`name`, `book-num`, `author-name`,`pdf-file`, `cat`, `cat1`, `cat2`, `cat3`
) VALUES ('$book_name','$book_num','$author_name','.$upload_file.','$category','$category1','$category2','$category3')";
    $result = $conn->query($books);
    header("Location: ../index.php");
    
}
?>