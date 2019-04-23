<!Doctype html>
<html lang="en">

<head>
    <?php
    include('include-des/header.php');
    header("Content-type: text/html; charset=utf-8");
    ?>
    <style>
    body{background-image: url(images/books-.jpg)}
    .search-form form .form-component .about-book .book{width: 50%;margin-bottom: 25px;}
    .search-form form .form-component .buttons{
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 100%;
    }
    .search-form form .form-component .buttons a,
    .search-form form .form-component .buttons input{width: 30%;}
    </style>
</head>

<body>
    <?php
    include('include-des/menu.php');
    ?>

    <section class="search-form">
        <div class="container">
            <div class="form">
                <form action="fun/borrow_book.php" method="POST" enctype="multipart/form-data">
                    <div class="form-component">
                        <div class="about-book">
                            <div class="book">
                                <label for="">اسم الكتاب</label>
                                <input type="text" placeholder="ادخل اسم الكتاب " value="" name="bookname" required>
                            </div>
                            <div class="book">
                                <label for="">اسم المستعير  </label>
                                <input type="text" placeholder="الاسم " value="" name="name" required>
                            </div>
                            <div class="book">
                                <label for=""> رقم الكارنيه  </label>
                                <input type="number" placeholder="ادخل رقم الكارنيه" value="" name="id-number" required>
                            </div>
                            <div class="book">
                                    <label for=""> تاريخ تسليم الكتاب  </label>
                                    <input type="date" placeholder="" value="" name="deliver-date" required>
                                </div>
                        </div>
                        <div class="buttons">
                            <input type="submit" name="submit" value="حفظ" title="حفظ" enctype="multipart/form-data">
                            <a href="index.php" title=" رجوع ">رجوع </a>
                        </div>
                    </div>
                </form>
                <?php
                if(isset($_GET['error'])){
                echo "<script type='text/javascript'>";
                echo "alert('هذا الكتاب مستعار!');";
                echo "</script>";   
                }
                ?>
            </div>
        </div>
    </section>
</body>

</html>