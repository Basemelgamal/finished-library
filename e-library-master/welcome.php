<!Doctype html>
<html lang="en">

<head>
   <?php
    include('include-des/header.php');
    ?>
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        .slider {
            background: none;
        }
        .navbar-header{justify-content: center;}
    </style>
</head>

<body>
    <header>
        <video autoplay loop class="background-video" muted>
            <source src="video/cs.mp4" type="video/mp4">
        </video>
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
                    </div>
                </nav>
            </div>
        </section>
        <div class="msg">
            <h1>Welcome To Our E-Library</h1>
            <a href="login.php" class="btn btn1" title="دخول مشرف المكتبه ">مشرف </a>
            <a href="index.php" class="btn btn2" title="البحث عن كتاب ">البحث عن كتاب </a>
        </div>
    </header>

</body>

</html>