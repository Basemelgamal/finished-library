<html>
    <head>
<?php
    include('include-des/header.php');
    header("Content-type: text/html; charset=utf-8");
    ?>
    </head>
<body>
	<?php
    include('include-des/menu.php');
    ?>
	<!-- form  -->
	<section class="search-form">
		<div class="container">
			<div class="form">
				<form method="POST" action="view.php" enctype="multipart/form-data">
					<div class="form-component">
						<!-- ---------------------- -->
						<!-- اختيار الشعبه  -->
						<div class="select-class-search">
							<div class="options">
								<label for="">اختر الشعبه</label>
								<div class="select">
									<select name="slct" id="slct">
										<option value="1">علوم حاسب </option>
										<option value="2">نظم المعلومات</option>
										<option value="3">محاسبه</option>
									</select>
								</div>
							</div>
						</div>
						<!-- ---------------------- -->
						<div class="about-book">
						<!-- بحث عن كتاب  -->
						<div class="book">
							<label for=""> اسم الكتاب   </label>
							<input type="text" placeholder="ادخل اسم الكتاب" value="" name="bookname" required>
						</div>
						<!-- ---------------------- -->
							<div class="book">
								<label for="">رقم الكتاب</label>
								<input type="number" placeholder="ادخل رقم الكتاب " value="" name="booknum" >
							</div>
							<div class="book">
									<label for="">اسم المؤلف </label>
									<input type="text" placeholder="اكتب اسم المؤلف" value="" name="authername">
								</div>
						</div>
						<div class="buttons">
				        <input type="submit" name="submit" value=" بحث " title=" بحث " enctype="multipart/form-data">
                            <a href="borrow.php" title="استعارة الكتاب ">استعارة الكتاب </a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
</body>

</html>
                                         