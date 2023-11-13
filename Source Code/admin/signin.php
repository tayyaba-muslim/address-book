<?php

include('../includes/config.php');
include('navbar1.php');
if (isset($_POST['login'])) {
    $login_mail = $_POST['log_email'];
    $login_pass = $_POST['log_pass'];

    $email_confirm = "SELECT * FROM `admin_reg` WHERE email = '$login_mail'";
    $confirm_email = mysqli_query($connection, $email_confirm);

    if (mysqli_num_rows($confirm_email) > 0) {
        $row = mysqli_fetch_assoc($confirm_email);
        $password = $row['password'];
        $dp_password = password_verify($login_pass, $password);

        if ($dp_password) {
            $_SESSION["admin"] = $row['email'];
            echo '<script> window.location.href="index.php" </script>';
        } else {
            echo "<script>alert('Ivalid password')</script>";
        }
    } else {
        echo "<script>alert('Ivalid Email')</script>";
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h3 class="text-primary"> J's Cosmetics</h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
                            onsubmit="return validateForm()">
                            <div class="form-floating mb-3">
                                <input type="email" name="log_email" id="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                                <span id="emailerror" class="text-danger font-weight-bold"></span>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" id="password" name="log_pass" class="form-control"
                                    id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                <span id="passworderror" class="text-danger font-weight-bold"></span>
                            </div>
                            <!-- <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a> -->
                            <!-- </div> -->
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="login" for="login">Sign
                                In</button>
                            <p class="text-center mb-0">Don't have an Account? <a href="register.php">Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>
    <script>
        function validateForm() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            // Regular expressions for validation
            var emailcheck = /^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
            var passwordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*].{8,16}$/;

            if (emailcheck.test(email)) {
                document.getElementById('emailerror').innerHTML = " ";
            } else {
                document.getElementById('emailerror').innerHTML = " Please Enter Email.";
                return false;
            }
            if (passwordcheck.test(password)) {
                document.getElementById('passworderror').innerHTML = " ";
            } else {
                document.getElementById('passworderror').innerHTML = "Please Enter Password. Incorrect Password ";
                return false;
            }
        }
    </script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>