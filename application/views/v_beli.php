<?php
	$no = 1;
	$jumlah = 0;
	echo $_SESSION['id_kasir'];
?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">
    </div>    
    <div class="col-sm-10">
      <!-- row 2 -->
      <div class="row well">
        <div class="col-sm-11">
          <div>
            <h4>Jual Parts</h4>            
            <br>
            <table class="table table-bordered">
              <thead>
                <tr class="table table-primary">
                  <th>No</th>
                  <th>Nama Parts</th>
                  <th>Harga</th>
                  <th>Qty</th>
                  <th>Total</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
			  	<?php foreach ($part as $value){ ?>

                <tr class="table table-light">
					<td><?php echo $no++; ?></td>
					<td><?php echo $value->nama_part; ?></td>
					<td><?php echo $value->harga_part; ?></td>
					<td><?php echo $value->quantity; ?></td>
					<td><?php echo $value->harga_part * $value->quantity; ?></td>
                  <td><a href="<?php echo base_url('Service/remove_parts/').$value->id;?>" class="btn btn-warning">Delete</a></td>
                </tr>

			  	<?php $jumlah = $jumlah + $value->harga_part * $value->quantity; } ?>
              </tbody>
            </table>
            <div class="col-xs-2 col-md-offset-8">
              <h5 class="pt-2">Total Harga</h5>
            </div>
            <div class="col-sm-2">
              <input class="form-control input-sm" type="text" name="total_harga" readonly="" value="<?php echo $jumlah?>">
            </div>
          </div>
        </div>
        <div class="col-xm-2">
          <div>
            <button class="btn btn-light" id="myBtn_parts">
              <i class="fa fa-plus fa-lg mr-5"> Tambah</i>
            </button>
          </div>
        </div>
      </div>
      <!-- end row 2 -->
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">
    </div>    
    <div class="col-sm-10">
      <!-- row 2 -->
      <div class="row well">
        <div class="col-sm-11">
          <a target="_blank" href="<?php echo base_url('Report/pdf') ?>">
            <button class="btn btn-light">
                <i class="fa fa-print fa-lg"> Cetak</i>
            </button>
          </a>
          <a href="<?php echo base_url('Service') ?>">
            <button class="btn btn-light">
              <i class="fa fa-print fa-lg"> Selesai</i>
            </button>
          </a>
        </div>
      </div>
      <!-- end row 2 -->
    </div>
  </div>
</div>




