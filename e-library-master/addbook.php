<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="html for begginner ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- page style  -->
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
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
                        <a href="welcome.html" title="E-Library Online Library">
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
                        <!-- اختيار الشعبه  -->
                        <div class="select-class-search">
                            <div class="options">
                                <label for="">اختر الشعبه</label>
                                <div class="select">
                                    <select name="slct" class="mainselector" id="slct">
                                        <option value="1" class="cs ">علوم الحاسب</option>
                                        <option value="2" class="mis ">نظم المعلومات</option>
                                        <option value="3" class="acc ">محاسبه</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- علوم الحاسب -->
                        <div class="select-branch">
                            <div class="select-class-search ">
                                <div class="options">
                                    <label for="">علوم الحاسب</label>
                                    <div class="select ">
                                        <select name="slct computer-science" class="computerScience" id="slct"
                                            disabled="true">
                                            <option value="1"> ---------------------- </option>
                                            <option value="2"> ---------------------- </option>
                                            <option value="3"> ---------------------- </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- نظم المعلومات -->
                            <div class="select-class-search ">
                                <div class="options">
                                    <label for="">نظم المعلومات </label>
                                    <div class="select ">
                                        <select name="slct information-systems" class="informationSystem" id="slct"
                                            disabled="true">
                                            <option value="1"> ---------------------- </option>
                                            <option value="2"> ---------------------- </option>
                                            <option value="3"> ---------------------- </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- محاسبه1 -->
                            <div class="select-class-search ">
                                <div class="options">
                                    <label for=""> محاسبه</label>
                                    <div class="select">
                                        <select name="slct accounting" class="accounting_placeholder" id="slct"
                                            disabled="true">
                                            <option value="1"> ---------------------- </option>
                                            <option value="2"> ---------------------- </option>
                                            <option value="3"> ---------------------- </option>
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
                                <input type="text" name="" id="" placeholder="ادخل اسم الكتاب" value="" name="book name"
                                    required>
                            </div>
                            <!-- ---------------------- -->
                            <div class="book">
                                <label for="">رقم الكتاب</label>
                                <input type="number" placeholder="ادخل رقم الكتاب " value="" name="book number"
                                    required>
                            </div>
                            <div class="book">
                                <label for="">اسم المؤلف </label>
                                <input type="text" placeholder="اكتب اسم المؤلف" value="" name="auther name " required>
                            </div>
                            <div class="book">
                                <label for="">اختر الملف </label>
                                <input type="file" value="" name="" required>
                            </div>
                        </div>
                        <div class="buttons">
                            <input type="submit" value=" حفظ " title=" حفظ ">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function () {
            $(".mainselector").bind('change', function () {
                switch ($(this).val()) {
                    case "1":
                        $(".accounting_placeholder").attr('disabled', true);
                        $(".computerScience").attr('disabled', false);
                        $(".informationSystem").attr('disabled', true);
                        break;

                    case "2":
                        $(".accounting_placeholder").attr('disabled', true);
                        $(".computerScience").attr('disabled', true);
                        $(".informationSystem").attr('disabled', false);
                        break;

                    case "3":
                        $(".accounting_placeholder").attr('disabled', false);
                        $(".computerScience").attr('disabled', true);
                        $(".informationSystem").attr('disabled', true);
                        break;
                    default:
                        $(".accounting_placeholder").attr('disabled', true);
                        $(".computerScience").attr('disabled', true);
                        $(".informationSystem").attr('disabled', true);
                }
            });
        });
    </script>
</body>

</html>