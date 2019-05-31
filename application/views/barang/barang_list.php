<!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(../assets/images/Hero/heroku-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">
                    <h1>Daftar Barang</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="#">Barang</a></li>
                        <li><a href="#">Daftar Barang</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->
<div class="blog-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
        <div class="container">
            <!-- <div class="row"> -->
    <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="table-responsive">
            <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        <th>Nama Item</th>
        <th>Warna</th>
        <th>Foto</th>
        <th>Kondisi</th>
        <!-- <th>Lama Penggunaan</th> -->
        <!-- <th>No Ktp Penyewa</th> -->
        <th style="text-align: center;">Lihat Detail</th>
        <?php if($this->session->userdata('login_id')!='' || $this->session->userdata('login_id')!=NULL) { ?>
        <th>Action</th>
    <?php } ?>
            </tr><?php
            foreach ($barang_data as $barang)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $barang->nama_item ?></td>
            <td><?php echo $barang->warna ?></td>
            <td><img src=<?php echo '"assets/images/blog/'.$barang->url_foto.'"'?> alt="Blog Author"></td>
            <td><?php echo $barang->kondisi ?></td>
            <td style="text-align:center" width="200px">
                <?php 
                echo anchor(site_url('barang/read/'.$barang->id_barang),'Read'); 
                ?>
            </td>
            <!-- <td><?php //echo $barang->lama_penggunaan ?></td> -->
            <!-- <td><?php //echo $barang->no_ktp_penyewa ?></td> -->
            <?php if($this->session->userdata('role')=="admin") { ?>
            <td style="text-align:center" width="200px">
                <?php 
                echo anchor(site_url('barang/update/'.$barang->id_barang),'Update'); 
                echo ' | '; 
                echo anchor(site_url('barang/delete/'.$barang->id_barang),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?>
            </td>
        <?php } elseif ($this->session->userdata('role')=="admin") { ?>
            <td>
                
            </td>
        <?php } ?>
        </tr>
                <?php
            }
            ?>
        </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
            <div class="col-md-3">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
        </div>
            <div class="col-md-9 text-right">
                <?php echo $pagination ?>
            </div>
        </div>  

            </div>
        </div>
    </div>
