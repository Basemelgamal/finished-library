  <?php
include 'connect.php';
if(isset($_POST['submit'])){
    
	$book_name=$_POST['bookname'];
	$book_num=$_POST['booknum'];
	$author_name=$_POST['authername'];
    
    $search="SELECT * FROM `books` WHERE name='$book_name'";
    $result = $conn->query($search);
    //print_r($result);
    //echo $book_name ;
    while($row=$result->fetch_assoc())
                                       {
        echo $row['name'] ;
        echo $row['author-name'];
        
   // header("Location: ../index.php");
    
}
}
?>