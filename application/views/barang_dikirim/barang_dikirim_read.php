<!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(../assets/images/Hero/heroku-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">
                    <h1>Review Barang</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="#">Barang</a></li>
                        <li><a href="#">Review Barang</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->
<div class="blog-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
        <div class="container">        <table class="table">
	    <tr><td>Id Barang</td><td><?php echo $id_barang; ?></td></tr>
	    <tr><td>Tanggal Review</td><td><?php echo $tanggal_review; ?></td></tr>
	    <tr><td>Review</td><td><?php echo $review; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('barang_dikirim') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
