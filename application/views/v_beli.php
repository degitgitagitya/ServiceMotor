<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<?php
	$no = 1;
	$jumlah = 0;
	echo $_SESSION['id_kasir'];
?>
<body>
<div><br><br></div>


<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">
    </div>
    <br>
    
    <div class="col-sm-10">
    <h3><b>Beli Parts</b></h3>
    <hr>
      <!-- row 1 -->
      <div class="row well">
        <div class="col-xm-2">
          <div>
            <h5>No. Transaksi</h5>
            <h5 class="pt-2">Tanggal</h5>
            <h5 class="pt-2">Nama Customer</h5>
          </div>
        </div>
        <div class="col-sm-3">
          <form method="post" action="<?php echo base_url('index.php/Beli/save')?>">
			  <input readonly class="form-control input-sm" type="text" name="no_transaksi" value="<?php echo $_SESSION['id_transaksi'] ?>">
			  <input readonly class="form-control input-sm" type="text" name="tanggal" value="<?php echo date("d/n/Y") ?>">
			  <input class="form-control input-sm" type="text" name="nama_cust" value="<?php if(isset($_SESSION['cust'])){echo $_SESSION['cust'];}?>">
			  <?php if ($_SESSION['cust'] == ""){ ?>
			  <input type="submit" class="input-sm btn btn btn-success" value="Ok">
			  <?php } ?>
          </form>
        </div>
        <div class="col-xm-2 col-sm-offset-5">
          <div>
            <h5>Nama Kasir</h5>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="form-group">
            <input class="form-control input-sm" type="text" name="nama_kasir" value="<?php echo $_SESSION['nama_kasir'] ?>" readonly>
          </div>
        </div>
      </div>
      <!-- end row 1 -->

      <!-- row 2 -->
      <div class="row well">
        <div class="col-sm-11">
          <div>
            <h4>Keranjang Parts</h4>            
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
                  <td><a href="<?php echo base_url('index.php/Beli/remove/').$value->id;?>" class="btn btn-warning">Delete</a></td>
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
      </div>
      <!-- end row 2 -->

      <!-- row 1 -->
      <div class="row well">
        <div class="col-xm-2">
          <div>
            <button class="btn btn-light" id="myBtn">
              <i class="fa fa-plus fa-lg mr-5"> Tambah</i>
            </button>
            <a target="_blank" href="<?php echo base_url('Report/pdf') ?>">
              <button class="btn btn-light">
                  <i class="fa fa-print fa-lg"> Cetak</i>
              </button>
            </a>
			  <a href="<?php echo base_url('index.php/Beli') ?>">
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
                <h4>Daftar Parts</h4>
            </div>
        </center>
    </div>
    <br>
    <div class="modal-body">
      <div class="col-sm-12">
        <!-- row 1 -->

			  <table class="table table-bordered" id="myTable">
				  <tr class="header table table-primary">
					  <th style="width:10%;">Kode</th>
					  <th style="width:40%;">Nama Parts</th>
					  <th style="width:10%;">Stok</th>
					  <th style="width:20%;">Harga</th>
					  <th style="width:20%;">Add</th>
				  </tr>
				  <?php foreach ($referensipart as $key) { ?>

					  <tr>
						  <td><?php echo $key->id ?></td>
						  <td><?php echo $key->nama_part ?></td>
						  <td><?php echo $key->stok ?></td>
						  <td><?php echo $key->harga_part ?></td>
						  <td>
							  <form action="<?php echo base_url('index.php/Beli/add')?>" method="post">
							  	<input type="text" hidden name="id_part" value="<?php echo $key->id ?>">
							  	<input type="number" name="qty">
							  	<button class="btn btn-success ml-2" <?php if ($key->stok == 0){ ?> disabled <?php } ?> >Add</button>
							  </form>
						  </td>
					  </tr>

				  <?php } ?>
			  </table>
		  <!-- end row 1 -->

        <div class="row well">
          <div class="col-xm-2">
            <h5>Cari Nama Parts</h5>
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control input-sm" id="myInput" onkeyup="myFunction()" placeholder="Cari parts..">
          </div>
        </div>


      </div>
    </div>
  </div>
</div>


