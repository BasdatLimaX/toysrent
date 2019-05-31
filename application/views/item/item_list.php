<!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">
                    <h1>Daftar Item</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Daftar Item</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->
    <div class="blog-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
        <div class="container">

        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php if($this->session->userdata('role')=="admin") { echo anchor(site_url('item/create'),'Tambah Baru', 'class="btn btn-primary"'); } ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('item/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('item'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="cart-table table-responsive mb-40">
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kategori</th>
		<!-- <th>Deskripsi</th>
		<th>Usia Dari</th>
		<th>Usia Sampai</th>
		<th>Bahan</th> -->
		<th>Action</th>
            </tr><?php
            foreach ($item_data as $item)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td width="300px"><?php echo $item->nama ?></td>
            <td width="300px"><?php echo $item->nama_kategori ?></td>
            <!-- <td><?php //echo $item->deskripsi ?></td>
			<td><?php //echo $item->usia_dari ?></td>
			<td><?php //echo $item->usia_sampai ?></td>
			<td><?php //echo $item->bahan ?></td> -->
			<td class="pro-subtotal" style="text-align:center" width="200px">
                <a href="<?php echo site_url('item/read/'.$item->nama) ?>">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
                <?php if($this->session->userdata('role')=="admin") { ?>
                <a href="<?php echo site_url('item/update/'.$item->nama) ?>">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
                <a href="<?php echo site_url('item/delete/'.$item->nama) ?>">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
            <?php } ?>
				
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
    </div>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6" style="text-align: center;">
                <?php echo $pagination ?>
            </div>
        </div>