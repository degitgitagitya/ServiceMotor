<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
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
      <div class="row well">
        <div class="col-xm-2">
          <div>
            <h5>No. Transaksi</h5>
            <h5 class="pt-2">Tanggal</h5>
            <h5 class="pt-2">Nama Cust</h5>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <input class="form-control input-sm" type="text" name="no_transaksi">
            <input class="form-control input-sm" type="date" name="tanggal">
            <input class="form-control input-sm" type="text" name="nama_cust">
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
            <input class="form-control input-sm" type="text" name="alamat">
            <input class="form-control input-sm" type="text" name="no_stnk">
            <input class="form-control input-sm" type="text" name="merk_motor">
          </div>
        </div>
        <div class="col-xm-2 col-md-offset-1">
          <div>
            <h5>Nama Kasir</h5>
            <h5 class="pt-2">User</h5>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="form-group">
            <input class="form-control input-sm" type="text" name="nama_kasir" value="<?php echo $_SESSION['nama_kasir'] ?>" readonly>
            <input class="form-control input-sm" type="text" name="user" value="<?php echo $_SESSION['role'] ?>" readonly>
          </div>
        </div>
      </div>
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
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <tr class="table table-light">
                  <td>1</td>
                  <td>Kategori A</td>
                  <td>5000000</td>
                  <td>x</td>
                </tr>
              </tbody>
            </table>
            <div class="col-sm-2">
              <h5>Nama Mekanik</h5>
            </div>
            <div class="col-sm-2">
              <input class="form-control input-sm" type="text" name="nama_mekanik">
            </div>
            <div class="col-xs-2 col-md-offset-4">
              <h5>Total Harga</h5>
            </div>
            <div class="col-sm-2">
              <input class="form-control input-sm" type="text" name="total_harga" readonly>
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
              <input class="form-control input-sm col-md-3" type="number" name="jumlah">
              <button class="btn btn-success ml-2">Add</button>
            </td>
          </tr>

          <?php } ?>
        </table>
        <!-- end row 2 -->
      </div>
    </div>
  </div>
</div>

</body>
</html>
