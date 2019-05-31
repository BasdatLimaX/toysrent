<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Pemesanan List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('pemesanan/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('pemesanan/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('pemesanan'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Datetime Pemesanan</th>
		<th>Kuantitas Barang</th>
		<th>Harga Sewa</th>
		<th>Ongkos</th>
		<th>No Ktp Pemesan</th>
		<th>Status</th>
		<th>Action</th>
            </tr><?php
            foreach ($pemesanan_data as $pemesanan)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $pemesanan->datetime_pemesanan ?></td>
			<td><?php echo $pemesanan->kuantitas_barang ?></td>
			<td><?php echo $pemesanan->harga_sewa ?></td>
			<td><?php echo $pemesanan->ongkos ?></td>
			<td><?php echo $pemesanan->no_ktp_pemesan ?></td>
			<td><?php echo $pemesanan->status ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('pemesanan/read/'.$pemesanan->id_pemesanan),'Read'); 
				echo ' | '; 
				echo anchor(site_url('pemesanan/update/'.$pemesanan->id_pemesanan),'Update'); 
				echo ' | '; 
				echo anchor(site_url('pemesanan/delete/'.$pemesanan->id_pemesanan),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>