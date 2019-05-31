<!-- Hero Section Start -->
    <div class="hero-section section">

        <!-- Hero Slider Start -->
        <div class="hero-slider hero-slider-one fix">

            <!-- Hero Item Start -->
            <div class="hero-item" style="background-image: url('<?php echo base_url('assets/Jadusona/assets/images/hero/hero-1.jpg') ?>')">

                <!-- Hero Content -->
                <div class="hero-content">

                    <h1>Get 35% off <br>Latest Baby Product</h1>
                    <a href="#">SHOP NOW</a>

                </div>

            </div><!-- Hero Item End -->

            <!-- Hero Item Start -->
            <div class="hero-item" style="background-image: url('<?php echo base_url('assets/Jadusona/assets/images/hero/hero-2.jpg') ?>')">

                <!-- Hero Content -->
                <div class="hero-content">

                    <h1>Get 35% off <br>Latest Baby Product</h1>
                    <a href="#">SHOP NOW</a>

                </div>

            </div><!-- Hero Item End -->

        </div><!-- Hero Slider End -->

    </div><!-- Hero Section End -->

    <!-- Banner Section Start -->
    <div class="banner-section section mt-40 mt-xs-20 mb-60 mb-lg-40 mb-md-40 mb-sm-40 mb-xs-20">
        <div class="container-fluid">
            <div class="row row-10">

                <div class="col-lg-4 col-md-6 col-12 mb-20">
                    <div class="banner banner-1 content-left content-middle">

                        <a href="#" class="image"><img src="<?php echo base_url('assets/Jadusona/assets/images/banner/banner-1.jpg') ?>" alt="Banner Image"></a>

                        <div class="content">
                            <h1>New Arrival <br>Baby’s Shoe <br>GET 30% OFF</h1>
                            <a href="#" data-hover="SHOP NOW">SHOP NOW</a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-20">
                    <a href="#" class="banner banner-2">

                        <img src="<?php echo base_url('assets/Jadusona/assets/images/banner/banner-2.jpg') ?>" alt="Banner Image">

                        <div class="content bg-theme-one">
                            <h1>New Toy’s for your Baby</h1>
                        </div>

                        <span class="banner-offer">25% off</span>

                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-20">
                    <div class="banner banner-1 content-left content-top">

                        <a href="#" class="image"><img src="<?php echo base_url('assets/Jadusona/assets/images/banner/banner-3.jpg') ?>" alt="Banner Image"></a>

                        <div class="content">
                            <h1>Trendy <br>Collections</h1>
                            <a href="#" data-hover="SHOP NOW">SHOP NOW</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div><!-- Banner Section End -->

    <!-- Product Section Start -->
    <div class="product-section section mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">

            <div class="row">
                <div class="section-title text-center col mb-30">
                    <h1>Popular Products</h1>
                    <p>All popular product find here</p>
                </div>
            </div>

            <div class="row">
                <?php foreach ($barang_data as $key) { ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img style="width: 270px;height: 320px" src="<?php echo $key->url_foto ?>" alt="">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button onclick="window.location.href='<?php echo base_url('barang/add_cart/'.$key->id_barang); ?>'">add to cart</button>
                                        <!-- <button>add to wishlist</button> -->
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="#"><?php echo $key->nama_item.' '.$key->warna ?></a></h4>

                                    <!-- <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                    <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5> -->
                                    <!-- <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5> -->

                                </div>
                                <?php if($this->session->userdata('login_id')!='' || $this->session->userdata('login_id')!=NULL) { ?>
                                <div class="content-right">
                                    <span class="price" style="font-size: 14px"><?php echo $key->harga_sewa ?></span>
                                </div>
                            <?php } ?>

                            </div>

                        </div>
                    </div>

                </div>
            <?php } ?>

            </div>

        </div>
    </div><!-- Product Section End -->

    <!-- Banner Section Start -->
    <div class="banner-section section fix mb-70 mb-lg-50 mb-md-50 mb-sm-50 mb-xs-30">
        <div class="row row-5">

            <div class="col-lg-4 col-md-6 col-12 mb-10">
                <div class="banner banner-3">

                    <a href="#" class="image"><img src="<?php echo base_url('assets/Jadusona/assets/images/banner/banner-4.jpg') ?>" alt="Banner Image"></a>

                    <div class="content" style="background-image: url('<?php echo base_url('assets/Jadusona/assets/images/banner/banner-3-shape.png') ?>')">
                        <h1>New Arrivals</h1>
                        <h2>Up to 35% off</h2>
                        <h4>2 - 5 Years</h4>
                    </div>

                    <a href="#" class="shop-link" data-hover="SHOP NOW">SHOP NOW</a>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-10">
                <div class="banner banner-4">

                    <a href="#" class="image"><img src="<?php echo base_url('assets/Jadusona/assets/images/banner/banner-5.jpg') ?>" alt="Banner Image"></a>

                    <div class="content">
                        <div class="content-inner">
                            <h1>Online Shopping</h1>
                            <h2>Flat 25% off <br>New Trend for 2018</h2>
                            <a href="#" data-hover="SHOP NOW">SHOP NOW</a>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-10">
                <div class="banner banner-5">

                    <a href="#" class="image"><img src="<?php echo base_url('assets/Jadusona/assets/images/banner/banner-6.jpg') ?>" alt="Banner Image"></a>

                    <div class="content" style="background-image: url('<?php echo base_url('assets/Jadusona/assets/images/banner/banner-5-shape.png') ?>')">
                        <h1>Collection for <br>Baby Girl’s</h1>
                        <h2>Flat 25% off</h2>
                    </div>

                    <a href="#" class="shop-link" data-hover="SHOP NOW">SHOP NOW</a>

                </div>
            </div>

        </div>
    </div><!-- Banner Section End -->

    

    <!-- Feature Section Start -->
    <div class="feature-section section bg-theme-two pt-65 pt-lg-55 pt-md-45 pt-sm-45 pt-xs-25 pb-65 pb-lg-55 pb-md-45 pb-sm-45 pb-xs-25 fix" style="background-image: url('<?php echo base_url('assets/Jadusona/assets/images/pattern/pattern-dot.png') ?>')">
        <div class="container">
            <div class="feature-wrap row justify-content-between">

                <div class="col-md-4 col-12 mt-15 mb-15">
                    <div class="feature-item text-center">

                        <div class="icon"><img src="<?php echo base_url('assets/Jadusona/assets/images/feature/feature-1.png') ?>" alt=""></div>
                        <div class="content">
                            <h3>Free Shipping</h3>
                            <p>Start from $100</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-12 mt-15 mb-15">
                    <div class="feature-item text-center">

                        <div class="icon"><img src="<?php echo base_url('assets/Jadusona/assets/images/feature/feature-2.png') ?>" alt=""></div>
                        <div class="content">
                            <h3>Money Back Guarantee</h3>
                            <p>Back within 25 days</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-12 mt-15 mb-15">
                    <div class="feature-item text-center">

                        <div class="icon"><img src="<?php echo base_url('assets/Jadusona/assets/images/feature/feature-3.png') ?>" alt=""></div>
                        <div class="content">
                            <h3>Secure Payment</h3>
                            <p>Payment Security</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div><!-- Feature Section End -->

    