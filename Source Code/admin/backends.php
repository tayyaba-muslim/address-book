<?php
require("../includes/config.php");

$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$Image = $_FILES["img"]["name"];
$Image_tmp = $_FILES["img"]["tmp_name"];
$Image_size = $_FILES["img"]["size"];
// print_r($_POST);

// print_r($_FILES);
// die();
$update = "UPDATE `admin_reg` SET `name` = '$name' , `email` = '$email' , `phone` = '$phone' , `images` = '$Image' WHERE `id` = '$id'";
$conn = mysqli_query($connection, $update);
move_uploaded_file($Image_tmp, "../includes/imgs/" . " $Image");
if (!$conn) {
    echo "<script> alert('Query Failed') </script>";
} else {
    echo "<script> alert('Profile Update Successfully') </script>";
    echo "<script> window.location.href='myprofile.php' </script>";
}
?>