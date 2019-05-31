<!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(../assets/images/Hero/heroku-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">
                    <h1>Detail Barang</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="<?php echo base_url('barang') ?>">Barang</a></li>
                        <li><a href="#">Detail Barang</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->
<div class="blog-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h2 style="margin-top:0px">Detail <?php echo $nama_item.' '.$warna ?></h2>
                    <table class="table">
                        <tr><td style="width: 200px"><strong>Id Barang</strong></td><td><?php echo $id_barang; ?></td></tr>
                        <tr><td><strong>Nama Item</strong></td><td><?php echo $nama_item; ?></td></tr>
                        <tr><td><strong>Warna</strong></td><td><?php echo $warna; ?></td></tr>
                        <tr><td><strong>Url Foto</strong></td><td><img src=<?php echo $url_foto ?>></td></tr>
                        <tr><td><strong>Kondisi</strong></td><td><?php echo $kondisi; ?></td></tr>
                        <tr><td><strong>Lama Penggunaan</strong></td><td><?php echo $lama_penggunaan; ?> Bulan</td></tr>
                        <tr><td><strong>Pemilik/Penyewa</strong></td><td><?php echo $nama_penyewa; ?></td></tr>
                        <tr><td><strong>Info Barang</strong></td>
                            <td>
                                <table>
                                    <tr><th style="width: 100px">Level</th><th>Harga Sewa</th><th>Porsi Loyalti</th></tr>
                                    <?php foreach ($info as $key) { ?>
                                        <tr><td><?php echo $key->nama_level ?></td><td><?php echo $key->harga_sewa ?></td><td class="uang"><?php echo $key->porsi_royalti ?></td></tr>
                                    <?php } ?>
                                    
                                </table>
                            </td>
                        </tr>
                        
                    </table>
                </div>
                <div class="col-6">
                    <h2 style="margin-top:0px">Review Barang </h2>
                    <table class="table">
                        <tr><th style="width: 100px">Id Pengiriman</th><th>Penyewa</th><th>Review</th><th>Tanggal Review</th></tr>
                        <?php foreach ($review as $key) { ?>
                           <tr><td><?php echo $key->no_resi?></td><td><?php echo $key->nama_lengkap ?></td><td><?php echo $key->review ?></td><td><?php echo $key->tanggal_review ?></td></tr> 
                        <?php } ?>
                    </table>
                </div>
                
            </div>
                <div style="margin-bottom: 50px;text-align: center;">
                    <a href="<?php echo site_url('barang') ?>" class="btn btn-primary">Kembali</a>
                </div>
    