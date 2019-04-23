<html>

<?php
    include('include-des/header.php');
    ?>

<body>
    <?php
    include('include-des/menu.php');
    ?>
    <!-- form  -->
    <section class="search-form">
        <div class="container">
            <div class="form">
                <form method="POST" action="fun/add-book.php" enctype="multipart/form-data">
                    <div class="form-component">
                        <!-- ---------------------- -->
                        <!-- اختيار الشعبه  -->
                        <div class="select-class-search">
                            <div class="options">
                                <label for="">اختر الشعبه</label>
                                <div class="select">
                                     <select name="category">
                                                 	<?php 
                                                 	include 'fun/connect.php';
                                                 	$admin="SELECT * FROM category ";
                                                    $result = $conn->query($admin);
                                                 	while ($row2=$result->fetch_assoc()) {
                                                ?>
                                                <option value="<?php echo $row2['cat_id'];?>"> <?php echo $row2['name'];?> </option>
                                                <?php } ?>
                                                </select>
                                </div>
                            </div>
                        </div>
                        <!-- علوم الحاسب -->
                        <div class="select-branch">
                            <div class="select-class-search">
                                <div class="options">
                                    <label for="">علوم الحاسب</label>
                                    <div class="select">
                                        <select name="category3">
                                                 	<?php 
                                                 	include 'fun/connect.php';
                                                 	$admin="SELECT * FROM category3 ";
                                                    $result = $conn->query($admin);
                                                 	while ($row2=$result->fetch_assoc()) {
                                                ?>
                                                <option value="<?php echo $row2['cat3_id'];?>"> <?php echo $row2['name'];?> </option>
                                                <?php } ?>
                                                </select>
                                    </div>
                                </div>
                            </div>
                            <!-- نظم المعلومات -->
                            <div class="select-class-search">
                                <div class="options">
                                    <label for="">نظم ادارية </label>
                                    <div class="select">
                                        <select name="category2">
                                                 	<?php
                                                 	include 'fun/connect.php';
                                                 	$admin="SELECT * FROM category2 ";
                                                    $result = $conn->query($admin);
                                                 	while ($row2=$result->fetch_assoc()) {
                                                ?>
                                                <option value="<?php echo $row2['cat2_id'];?>"> <?php echo $row2['name'];?> </option>
                                                <?php } ?>
                                                </select>
                                    </div>
                                </div>
                            </div>
                            <!-- محاسبه1 -->
                            <div class="select-class-search">
                                <div class="options">
                                    <label for=""> محاسبه</label>
                                    <div class="select">
                                        <select name="category1">
                                                 	<?php
                                                 	include 'fun/connect.php';
                                                 	$admin="SELECT * FROM category1 ";
                                                    $result = $conn->query($admin);
                                                 	while ($row2=$result->fetch_assoc()) {
                                                ?>
                                                <option value="<?php echo $row2['cat1_id'];?>"> <?php echo $row2['name'];?> </option>
                                                <?php } ?>
                                                </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ---------------------- -->
                        <div class="about-book">
                            <!-- بحث عن كتاب  -->
                            <div class="book">
                                <label for=""> اسم الكتاب </label>
                                <input type="text" placeholder="اكتب اسم الكتاب" value="" name="books-name" required>
                            </div>
                            <!-- ---------------------- -->
                            <div class="book">
                                <label for="">رقم الكتاب</label>
                                <input type="number" placeholder="ادخل رقم الكتاب " value="" name="book-num"
                                    required>
                            </div>
                            <div class="book">
                                <label for="">اسم المؤلف </label>
                                <input type="text" placeholder="اكتب اسم المؤلف" value="" name="auther-name" required>
                            </div>
                            <div class="book">
                                <label for="">اختر الملف </label>
                                <input type="file" value="" name="myfile" >
                            </div>
                        </div>
                        <div class="buttons">
                            <input type="submit" name="submit" value=" حفظ " title=" حفظ " enctype="multipart/form-data" accept="application/pdf">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>