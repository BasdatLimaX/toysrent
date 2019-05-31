</head>

<body>

<div class="main-wrapper">
    <div class="header-section section">

            <!-- Header Top Start -->
            <div class="header-top header-top-one bg-theme-two">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-center">

                        <div class="col mt-10 mb-10 d-none d-md-flex">
                            <!-- Header Top Left Start -->
                            <div class="header-top-left">
                                <!-- <p>Welcome to Jadusona</p> -->
                                <!-- <p>Hotline: <a href="tel:0123456789">0123 456 789</a></p> -->
                            </div><!-- Header Top Left End -->
                        </div>

                        <div class="col mt-10 mb-10">
                            <!-- Header Language Currency Start -->
                            <ul class="header-lan-curr">

                               <!--  <li><a href="#">eng</a>
                                    <ul>
                                        <li><a href="#">english</a></li>
                                        <li><a href="#">spanish</a></li>
                                        <li><a href="#">france</a></li>
                                        <li><a href="#">russian</a></li>
                                        <li><a href="#">chinese</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">$usd</a>
                                    <ul>
                                        <li><a href="#">pound</a></li>
                                        <li><a href="#">dollar</a></li>
                                        <li><a href="#">euro</a></li>
                                        <li><a href="#">yen</a></li>
                                    </ul>
                                </li> -->

                            </ul><!-- Header Language Currency End -->
                        </div>

                        <div class="col mt-10 mb-10">
                            <!-- Header Shop Links Start -->
                            <div class="header-top-right">
                                <?php if($this->session->userdata('login_id')!='' || $this->session->userdata('login_id')!=NULL) { ?>
                                <p><a href="<?php echo base_url('pengguna/read/'.$this->session->userdata('no_ktp')) ?>">My Account</a></p>
                            <?php }?>
                                <p><?php if($this->session->userdata('login_id')=='' || $this->session->userdata('login_id')==NULL) { ?>
                                    <a href="#">Register</a><a href="<?php echo base_url('auth') ?>">Login</a>
                                    <?php } else { ?>
                                    <a href="<?php echo base_url('pengguna/read/'.$this->session->userdata('no_ktp')) ?>"><?php echo $this->session->userdata('nama') ?></a><a href="<?php echo base_url('auth/logout') ?>">Logout</a>
                                    <?php } ?>
                                </p>

                            </div><!-- Header Shop Links End -->
                        </div>

                    </div>
                </div>
            </div><!-- Header Top End -->

            <!-- Header Bottom Start -->
            <div class="header-bottom header-bottom-one header-sticky@">
                <div class="container-fluid">
                    <div class="row menu-center align-items-center justify-content-between">

                        <div class="col mt-15 mb-15">
                            <!-- Logo Start -->
                            <div class="header-logo">
                                <a href="index.html">
                                    <img src="<?php echo base_url('assets/Jadusona/assets/images/logo.png') ?>" alt="Jadusona">
                                </a>
                            </div><!-- Logo End -->
                        </div>

                        <div class="col order-2 order-lg-3">
                            <!-- Header Advance Search Start -->
                            <div class="header-shop-links">

                                <div class="header-search">
                                    <button class="search-toggle"><img src="<?php echo base_url('assets/Jadusona/assets/images/icons/search.png') ?>" alt="Search Toggle"><img class="toggle-close" src="<?php echo base_url('assets/Jadusona/assets/images/icons/close.png') ?>" alt="Search Toggle"></button>
                                    <div class="header-search-wrap">
                                        <form action="#">
                                            <input type="text" placeholder="Type and hit enter">
                                            <button><img src="<?php echo base_url('assets/Jadusona/assets/images/icons/search.png') ?>" alt="Search"></button>
                                        </form>
                                    </div>
                                </div>
                                <?php if($this->session->userdata('login_id')!='' || $this->session->userdata('login_id')!=NULL) { ?>
                                <div class="header-wishlist">
                                    <a href="#"><img src="<?php echo base_url('assets/Jadusona/assets/images/icons/wishlist.png') ?>" alt="Wishlist"> <span>02</span></a>
                                </div>
                            <?php } ?>
                                <?php if($this->session->userdata('role')!="admin") { ?>
                                <div class="header-mini-cart">
                                    <a href="#"><img src="<?php echo base_url('assets/Jadusona/assets/images/icons/cart.png') ?>" alt="Cart"> <?php if($this->session->userdata('role')=="anggota") { ?><span>02($250)</span> <?php } ?></a>
                                </div>
                                <?php } ?>

                            </div><!-- Header Advance Search End -->
                        </div>

                        <div class="col order-3 order-lg-2">
                            <div class="main-menu">
                                <nav>

                                    <?php if($this->session->userdata('role')=="admin") { ?>
                                    <ul>
                                        <li><a href="#">ITEM</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?php echo base_url('item') ?>">DAFTAR ITEM</a></li>
                                                <li><a href="<?php echo base_url('item/create') ?>">TAMBAH ITEM</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">BARANG</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?php echo base_url('barang') ?>">DAFTAR BARANG</a></li>
                                                <li><a href="<?php echo base_url('barang/create') ?>">TAMBAH BARANG</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">LEVEL</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?php echo base_url('level_keanggotaan') ?>">DAFTAR LEVEL</a></li>
                                                <li><a href="<?php echo base_url('level_keanggotaan/create') ?>">TAMBAH LEVEL</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">PESANAN</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?php echo base_url('pemesanan') ?>">DAFTAR PESANAN</a></li>
                                                <li><a href="<?php echo base_url('pemesanan/create') ?>">BUAT PESANAN</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">PENGIRIMAN</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?php echo base_url('pengiriman') ?>">DAFTAR PENGIRIMAN</a></li>
                                                <li><a href="<?php echo base_url('pengiriman/create') ?>">BUAT PENGIRIMAN</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                <?php } else { ?>
                                    <ul>
                                        <li class="active"><a href="<?php echo base_url('welcome') ?>">HOME</a>
                                        </li>
                                        <li><a href="<?php echo base_url('item') ?>">DAFTAR ITEM</a>
                                        </li> 
                                        <li><a href="#">BARANG</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?php echo base_url('barang') ?>">DAFTAR BARANG</a>
                                                <li><a href="<?php echo base_url('barang_dikirim/') ?>">DAFTAR REVIEW BARANG</a></li>
                                            </ul>
                                        </li>
                                        <?php if($this->session->userdata('role')=="anggota") { ?>
                                        <li><a href="#">PESANAN</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">DAFTAR PESANAN</a></li>
                                                <li><a href="#">BUAT PESANAN</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">PENGIRIMAN</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">DAFTAR PENGIRIMAN</a></li>
                                                <li><a href="#">BUAT PENGIRIMAN</a></li>
                                            </ul>
                                        </li>
                                    <?php } ?>
                                        
                                    </ul>
                                <?php } ?>
                                </nav>
                            </div>
                        </div>

                        <!-- Mobile Menu -->
                        <div class="mobile-menu order-12 d-block d-lg-none col"></div>

                    </div>
                </div>
            </div><!-- Header BOttom End -->

        </div>