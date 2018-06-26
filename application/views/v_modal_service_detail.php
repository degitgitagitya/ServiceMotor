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
              <a href="<?php echo base_url('Log/add/').$key->id; ?>" class="btn btn-success ml-2" style="color: white;">Add</a>
            </td>
          </tr>

          <?php } ?>
        </table>
        <!-- end row 2 -->
      </div>
    </div>
  </div>
</div>