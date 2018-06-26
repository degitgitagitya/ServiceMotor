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
    <h3><b>Log Transaksi</b></h3>
    <hr>

      <!-- row 2 -->
      <div class="row well">
        <div class="col-sm-11">
          <div>
            <table class="table table-bordered">
              <thead>
                <tr class="table table-primary">
                  <th>No</th>
                  <th>ID Transaksi</th>
                  <th>Tanggal Transaksi</th>
                  <th>Nama Pelanggan</th>
                  <th>Total Harga</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>

              <?php foreach ($transaksi as $value){ ?>

                <tr class="table table-light">
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $value->id_transaksi; ?></td>
                  <td><?php echo $value->tanggal_transaksi; ?></td>
                  <td><?php echo $value->nama_pelanggan; ?></td>
                  <td><?php echo $value->harga_total; ?></td>
                  <td><a href="<?php echo base_url('index.php/transaksi/detail/').$value->id_transaksi;?>" class="btn btn-warning">Detail</a></td>
                </tr>

              <?php } ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- end row 2 -->

    </div>
  </div>
</div>