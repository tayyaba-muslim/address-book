<?php
include('includes/navbar.php');
include('includes/config.php');
?>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div class="content-offers"
    style="background:url(images/cosmetic.jpg); background-size: cover; margin-top:40px; height: 150px;">

    <div class="container">
        <div class="ct-offers">
            <!-- <div class="ct-offers-title" style="color: white; margin-left: 80px;">Cosmetics Collection</div> -->

        </div>
    </div>
</div>


<div class="newest" id="newest">
    <div class="container">
        <div class="newest-content">
            <div class="newest-tab">



                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="1" aria-labelledby="cat-1">
                        <div class="row clearfix">
                            <?php

                            $cosmeticsfetch = "SELECT * from `addproduct` where pcategory = '1'";
                            $runquery = mysqli_query($connection, $cosmeticsfetch);
                            if (mysqli_num_rows($runquery) > 0) {
                                while ($row = mysqli_fetch_assoc($runquery)) {

                                    ?>
                                    <div class="col-md-4 col-lg-2 col-sm-12">
                                        <div class="product-fade">
                                            <div class="product-fade-wrap">
                                                <div id="product-image" class="">
                                                    <div class="item"><img src="<?php echo 'images/' . $row['pimage']; ?>"
                                                            alt="" class="img-responsive"></div>

                                                </div>
                                                <div class="product-fade-ct">
                                                    <div class="product-fade-control">
                                                        

                                                        <div class="clearfix"></div>
                                                        <a href="singleproduct.php?pid=<?php echo $row['pid'] ?>"
                                                            style="font-size: 60%; width: 75%; height: 30%;  margin-top:120px;"
                                                            class="btn btn-to-cart">View Product</a>
                                                        <div class="clearfix"></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-name">
                                            <a href="">
                                                <?php echo $row['ptitle']; ?>
                                            </a>
                                        </div>
                                        <div class="star-1"></div>
                                        <div class="product-price">
                                            <span>
                                                <?php echo $row['pprice']; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
   

                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="2" aria-labelledby="cat-2">
                        <div class="row">
                            <div class="col-md-12">
                                <p>....</p>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="3" aria-labelledby="cat-3">
                        <div class="row">
                            <div class="col-md-12">
                                <p>....</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="content-offers" style="background:url(images/slider5.jpg); background-size: cover;">

    <div class="container">
        <div class="ct-offers">
            <div class="ct-offers-title" style="color: white; margin-left: 80px;">Stylish Jewelery</div>
            <p style="color: white;margin-left: 80px;">The generated Lorem Ipsum is therefore always free from
                repetition, injected humour</p>
            <a href="" class="btn btn-blue" style="margin-left: 80px;">Discover more Product</a>
        </div>
    </div>
</div>

<div class="brands">
    <div class="container">
        <div class="brands-inner">
            <div class="brand-title">
                <span>Brands</span>
            </div>

            <div id="slider-home"> <!-- Slider -->
                <div id="brand-carousel" class="owl-carousel owl-theme">
                <div class="item">
                                        <h2>Jenny</h2>

                                    </div>
                                    <div class="item">
                                        <h2>Cosmetics</h2>
                                    </div>
                                    <div class="item">
                                        <h2>&</h2>
                                    </div>
                                    <div class="item">
                                        <h2>Jewellery</h2>
                                    </div>
                                    <div class="item">
                                        <h2>Store</h2>
                                    </div>
                                    <div class="item">
                                        <h2>Online</h2>
                                    </div>
                                    <div class="item">
                                        <h2>Shopping</h2>
                                    </div>
                                    <div class="item">
                                        <h2>Platform</h2>
                                    </div>
                                    <div class="item">
                                        <h2>Let's Go</h2>
                                    </div>
                                    <div class="item">
                                        <h2>Shopping</h2>
                                    </div>
                </div>
            </div> <!-- Slider -->

        </div>
    </div>
</div>




</div> <!-- Content -->
<?php
include('includes/footer.php')
    ?>