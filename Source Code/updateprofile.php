<?php
require("includes/config.php");
require("includes/navbar.php");
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="content" style="background:url(images/bg1234.jpg); background-size: cover; height:700px; color:white;">
    <div class="container">
        <div class="ct-offers">
            <div class="ct-offers-title" style="margin-left: 20px;">Edit Profile</div>

        </div>
    </div>


    <div class="container" style="margin-top: 150px; height:300px; background-color:black; opacity: 90%;">
        <div class="col-md-12" style="margin-top: 20px;">
            <?php
            $get = $_GET['id'];
            $fetch = "SELECT * FROM `user-register` WHERE `id` = '$get' ";
            $conn = mysqli_query($connection, $fetch);
            if (mysqli_num_rows($conn) > 0) {
                while ($row = mysqli_fetch_assoc($conn)) {
                    ?>
                    <form action="backends.php" method="post" class="form-group">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="hidden" name="id" class="form-control" value="<?php echo $row['id'] ?>"
                                aria-describedby="emailHelp">
                            <input type="text" name="name" class="form-control" value="<?php echo $row['username'] ?>"
                                aria-describedby="emailHelp">
                        </div>
                        <br>
                        <br>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>"
                                aria-describedby="emailHelp">
                        </div>
                        <br><br>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php
                }
            }
            ?>
        </div>

    </div>
</div>
<?php
require("includes/footer.php");
?>