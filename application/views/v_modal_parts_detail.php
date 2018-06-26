<!-- The Modal -->
<div id="myModal_parts" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div style="background-color: #2e353d; color: white">
      <span class="close_parts p-3">&times; </span>
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
        <div class="row well">
          <div class="col-xm-2">
            <h5>Cari Nama Parts</h5>
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control input-sm" id="myInput_parts" onkeyup="myFunction2()" placeholder="Cari parts..">
          </div>
        </div>
        <!-- end row 1 -->

        <!-- row 2 -->
        <table class="table table-bordered" id="myTable_parts">
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
                <form action="<?php echo base_url('Log/add_parts')?>" method="post">
                  <input type="text" hidden name="id_part" value="<?php echo $key->id ?>">
                  <input class="form-control row col-sm-3 mr-2 col-sm-offset-0" type="number" name="qty">
                  <button class="btn btn-success ml-2" <?php if ($key->stok == 0){ ?> disabled <?php } ?> >Add</button>
                </form>
              </td>
            </tr>

          <?php } ?>
        </table>
        <!-- end row 2 -->

      </div>
    </div>
  </div>
</div>  