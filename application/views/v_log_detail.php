
<?php
	$no = 1;
  $jumlah = 0;
?>

<div><br><br></div>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">
    </div>
    <br>
    
    <div class="col-sm-10">
      <h3><b>Penjualan & Service Motor</b></h3>
      <hr>
      <!-- row 1 -->
      <form class="row well" method="post" action="<?php echo base_url('Service/save')?>">
        <div class="col-xm-2">
          <div>
            <h5>No. Transaksi</h5>
            <h5 class="pt-2">Tanggal</h5>
            <h5 class="pt-2">Nama Customer</h5>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
        <?php foreach ($iden_id as $key) {?> 
          <input readonly class="form-control input-sm" type="text" name="no_transaksi" value="<?php echo $key->id_transaksi;?>">
          <input readonly class="form-control input-sm" type="text" name="tanggal" value="<?php echo $key->tanggal_transaksi; ?>">
          <input readonly class="form-control input-sm" type="text" name="nama_cust" value="<?php echo $key->nama_pelanggan; ?>">
        <?php } ?>
        
          </div>
        </div>
        <div class="col-xm-2">
          <div>
            <h5>Alamat</h5>
            <h5 class="pt-2">No. STNK</h5>
            <h5 class="pt-2">Merk Motor</h5>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <?php foreach ($iden_id as $key) {?>
              <input readonly class="form-control input-sm" type="text" name="alamat" value="<?php echo $key->alamat;?>">
              <input readonly class="form-control input-sm" type="text" name="no_stnk" value="<?php echo $key->stnk; ?>">
              <input readonly class="form-control input-sm" type="text" name="merk_motor" value="<?php echo $key->merk_motor; ?>">
            <?php } ?>
          </div>
        </div>
        <div class="col-xm-2 col-md-offset-1">
          <div>
			  <h5>Nama Kasir</h5>
			  <h5 class="pt-2">Nama Mekanik</h5>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="form-group">
          <?php foreach ($iden_id as $key) {?>
    			  <input class="form-control input-sm" type="text" name="nama_kasir" value="<?php echo $key->nama_kasir ?>" readonly>
            <input class="form-control input-sm" type="text" name="mekanik" value="<?php echo $key->nama_mekanik ?>" readonly>
          <?php } ?>
          </div>
        </div>
      </form>
      <!-- end row 1 -->

      <!-- row 2 -->
      <div class="row well">
        <div class="col-sm-11 ">
          <div>
            <h4>Service</h4>            
            <br>
            <table class="table table-bordered">
              <thead>
                <tr class="table table-primary">
                  <th>No</th>
                  <th>Kategori Service</th>
                  <th>Harga</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
			  <?php foreach ($jasa_id as $value){?>
                <tr class="table table-light">
                  <td><?php echo $no++;?></td>
                  <td><?php echo $value->kategori?></td>
                  <td><?php echo $value->harga_jasa?></td>
                  <td><a href="<?php echo base_url('Log/remove/').$value->id;?>" class="btn btn-warning">Delete</a></td>
                </tr>
			  <?php $jumlah = $jumlah + $value->harga_jasa; } ?>
              </tbody>
            </table>
            <div class="col-xs-2 col-md-offset-8">
              <h5>Total Harga</h5>
            </div>
            <div class="col-sm-2">
              <input class="form-control input-sm" type="text" name="total_harga" value="<?php echo $jumlah;?>" readonly>
            </div>
          </div>
        </div>
        <div class="col-xm-2">
          <div>
            <button class="btn btn-light" id="myBtn">
              <i class="fa fa-plus fa-lg mr-5"> Tambah</i>
            </button>
          </div>
        </div>
      </div>
      <!-- end row 2 -->
    </div>
  </div>
</div>

<?php
  $no2 = 1;
  $jumlah2 = 0;
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
          <?php foreach ($part_id as $value){ ?>

                <tr class="table table-light">
          <td><?php echo $no2++; ?></td>
          <td><?php echo $value->nama_part; ?></td>
          <td><?php echo $value->harga_part; ?></td>
          <td><?php echo $value->quantity; ?></td>
          <td><?php echo $value->harga_part * $value->quantity; ?></td>
                  <td><a href="<?php echo base_url('Log/remove_parts/').$value->id;?>" class="btn btn-warning">Delete</a></td>
                </tr>

          <?php $jumlah2 = $jumlah2 + $value->harga_part * $value->quantity; } ?>
              </tbody>
            </table>
            <div class="col-xs-2 col-md-offset-8">
              <h5 class="pt-2">Total Harga</h5>
            </div>
            <div class="col-sm-2">
              <input class="form-control input-sm" type="text" name="total_harga" readonly="" value="<?php echo $jumlah2?>">
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
          <a href="<?php echo base_url('Log/update/').($jumlah+$jumlah2) ?>">
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