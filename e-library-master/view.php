<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="html for begginner ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- page style  -->
    <link rel="stylesheet" href="css/main.css">
    <!-- page title -->
    <title>E-Library</title>
</head>

<body>
    <!-- slider and navigation bar -->
    <section class="slider">
        <div class="container">
            <nav>
                <div class="navbar-header">
                    <div class="navbar-logo">
                        <a href="welcome.php" title="E-Library Online Library">
                            <p><span> E-</span>Library</p>
                        </a>
                    </div>
                    <label for="toggele" title="Menu">&#9776</label>
                    <input type="checkbox" id="toggele" />
                    <div class="navbar-list">
                        <ul>
                            <li><a href="#" title="Home"> Home</a></li>
                            <li><a href="#" title="About the library"> About Library</a></li>
                            <li><a href="#" title="Find resourses"> Find Resourses</a></li>
                            <li><a href="#" title="Student support"> Student Support</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <!-- form  -->
    <section class="search-form">
        <div class="container">
            <div class="form">
                <form action="" method="POST">
                    <div class="form-component">
                        <!-- ---------------------- -->
                        <div class="about-book">
                           <?php
                                include 'fun/connect.php';
                                if(isset($_POST['submit'])){
    
	                               $book_name=$_POST['bookname'];
	                               $book_num=$_POST['booknum'];
	                               $author_name=$_POST['authername'];
                                    
    
                                    $search="SELECT * FROM `books` WHERE name='$book_name' ";
                                    $result = $conn->query($search);
                                    //print_r($result);
                                    //echo $book_name ;
                                    $row=$result->fetch_assoc()
                                       
                                
                                           
                            ?>                              
                            <!-- بحث عن كتاب  -->
                            <div class="book">
                                <label for=""> اسم الكتاب </label>
                                <input type="text" name="" id="" placeholder="ادخل اسم الكتاب" value="<?php echo $row['name']; ?>">
                            </div>
                            <div class="book">
                                <label for="">اسم المؤلف </label>
                                <input type="text" placeholder="اكتب اسم المؤلف" value="<?php echo $row['author-name']; ?>">
                            </div>
                             
                           
                           <?php
                                     
                                }
                            ?>
                        </div>
                    </div>
                </form>
                <form action="pdf.php" method="POST">
                <div class="book" class="form-component">
                                <label for=""><?php echo $row['pdf-file']; ?> </label>
                                <input type="submit" name="submit" placeholder="Show PDF" value="Show PDF" >
                            </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>