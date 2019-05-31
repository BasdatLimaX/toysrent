<!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(../assets/images/Hero/heroku-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">
                    <h1>Chat</h1>
                   
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
			<th>Pesan</th>
			<th>Date Time</th>
			<th>Nama Pengirim</th>
			<th>Action</th>
            </tr><?php
            foreach ($chat_data as $chat)
            {
               ?>
            <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $chat->pesan ?></td>
			<td><?php echo $chat->date_time ?></td>
			<td><?php echo $chat->nama_lengkap ?></td>
			
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(base_url('chat/read/'.$chat->id),'<i class="fa fa-eye" aria-hidden="true"></i>', $attributes = ''); 
				echo ' | '; 
				echo anchor(base_url('chat/update/'.$chat->id),'<i class="fa fa-pencil" aria-hidden="true"></i>'); 
				echo ' | '; 
				echo anchor(base_url('chat/delete/'.$chat->id),'<i class="fa fa-trash" aria-hidden="true"></i>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
			<?php } ?>
			<tr>
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