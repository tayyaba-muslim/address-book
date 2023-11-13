<?php
session_start();
if (isset($_SESSION["useremail"])) {
    header('location:index.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jenny Cosmetics & Jewellery Shop</title>

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
    <link href='font-awesome/css/font-awesome.css' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- main css -->
    <link href="style.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">

    <!-- Slider -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">

    <!-- lightbox -->
    <link href="css/prettyPhoto.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="wrapper" class="homepage-1"> <!-- wrapper -->
        <div id="header" style=" width:100%; position:fixed; z-index:1; background-color: white; margin:0 auto 0 auto;">
            <!-- header -->
            <a class="navbar-brand" href="index.php" style="margin-top:-15px"><img src="images/lo3.png" alt=""></a>
            <div class="top" style="height:100px"> <!-- top -->
                <div class="container">

                    <ul class="top-support" style="margin-top:20px">
                        <li><i class="fa fa-phone-square"></i><span>(+800) 123 456 7890</span></li>
                        <li><a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJTNqLMpQQVMLsFJHVzlDRPKmqFRjbSkHmQFRtCkCcHNZRpQdfLqrPZwFgXHskTdBBDHQxq"><i class="fa fa-envelope-square"></i><span>addressbook@gmail.com</span></a></li>
                    </ul>
                    <div class="top-control" style="margin-top:20px">
                        <a href="register.php"></a><span>•</span><a href="register.php"> Register</a><span>•..</span><a
                            href="login.php">Login</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div> <!-- top -->
        </div> <!-- top -->