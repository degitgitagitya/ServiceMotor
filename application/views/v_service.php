
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
      <h3><b>Service Motor</b></h3>
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
			  <input readonly class="form-control input-sm" type="text" name="no_transaksi" value="<?php echo $_SESSION['id_transaksi'];?>">
			  <input readonly class="form-control input-sm" type="text" name="tanggal" value="<?php echo date("d/n/Y") ?>">
			  <input class="form-control input-sm" type="text" value="<?php if(isset($_SESSION['cust'])){echo $_SESSION['cust'];}?>" name="nama_cust">

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
            <input class="form-control input-sm" value="<?php if(isset($_SESSION['alamat'])){echo $_SESSION['alamat'];}?>" type="text" name="alamat">
            <input class="form-control input-sm" value="<?php if(isset($_SESSION['stnk'])){echo $_SESSION['stnk'];}?>" type="text" name="no_stnk">
            <input class="form-control input-sm" value="<?php if(isset($_SESSION['merk'])){echo $_SESSION['merk'];}?>" type="text" name="merk_motor">
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
			  <input class="form-control input-sm" type="text" name="nama_kasir" value="<?php echo $_SESSION['nama_kasir'] ?>" readonly>
			  <select class="form-control input-sm" name="mekanik" id="mekanik">
				  <option value="" selected disabled hidden>Pilih Mekanik</option>
				  <?php foreach ($mekanik as $value){ ?>
				  <option <?php if(isset($_SESSION['mekanik'])){if ($_SESSION['mekanik'] == $value->nama){?> selected <?php } } ?> value="<?php echo $value->nama?>"><?php echo $value->nama?></option>
				  <?php } ?>
			  </select>
			  <?php if ($_SESSION['cust'] == ""){ ?>
				  <input type="submit" class="input-sm btn btn btn-success" value="Ok">
			  <?php } ?>
          </div>
        </div>
      </form>
      <!-- end row 1 -->

      <!-- row 2 -->
      <div class="row well">
        <div class="col-sm-11 ">
          <div>
            <h4>Keranjang Service</h4>            
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
			  <?php foreach ($jasa as $value){?>
                <tr class="table table-light">
                  <td><?php echo $no++;?></td>
                  <td><?php echo $value->kategori?></td>
                  <td><?php echo $value->harga_jasa?></td>
                  <td><a href="<?php echo base_url('index.php/Service/remove/').$value->id;?>" class="btn btn-warning">Delete</a></td>
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
      </div>
      <!-- end row 2 -->

      <!-- row 1 -->
      <div class="row well">
        <div class="col-xm-2">
          <div>
            <button class="btn btn-light" id="myBtn">
              <i class="fa fa-plus fa-lg mr-5"> Tambah</i>
            </button>
            <a href="<?php echo base_url('Report/pdf') ?>">
              <button class="btn btn-light">
                  <i class="fa fa-print fa-lg"> Cetak</i>
              </button>
            </a>
			  <a href="<?php echo base_url('index.php/Service') ?>">
				  <button class="btn btn-light">
					  <i class="fa fa-print fa-lg"> Selesai</i>
				  </button>
			  </a>
          </div>
        </div>
      </div>
      <!-- end row 1 -->

    </div>
  </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div style="background-color: #2e353d; color: white">
      <span class="close p-3">&times; </span>
        <center>
            <div class="p-2">
                <h4>Daftar Service</h4>
            </div>
        </center>
    </div>
    <br>
    <div class="modal-body">
      <div class="col-sm-12">
        <!-- row 1 -->
        <div class="row well">
          <div class="col-xm-2">
            <h5>Cari Jenis Service</h5>
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control input-sm" id="myInput" onkeyup="myFunction()" placeholder="Cari service..">
          </div>
        </div>
        <!-- end row 1 -->

        <!-- row 2 -->
        <table class="table table-bordered" id="myTable">
          <tr class="header table table-primary">
            <th style="width:10%;">Kode</th>
            <th style="width:50%;">Kategori Jasa</th>
            <th style="width:20%;">Harga Jasa</th>
            <th style="width:20%;">Add</th>
          </tr>
          <?php foreach ($referensijasa as $key) { ?>

          <tr>
            <td><?php echo $key->id ?></td>
            <td><?php echo $key->kategori ?></td>
            <td><?php echo $key->harga_jasa ?></td>
            <td>
              <a href="<?php echo base_url('Service/add/').$key->id; ?>" class="btn btn-success ml-2" style="color: white;">Add</a>
            </td>
          </tr>

          <?php } ?>
        </table>
        <!-- end row 2 -->
      </div>
    </div>
  </div>
</div>
