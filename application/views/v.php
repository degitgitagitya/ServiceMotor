
</head>

<body>
<div><br><br></div>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">
    </div>
    <br>

    <div class="col-sm-10">
        <h3><b>Animated Modal with Header and Footer</b></h3>  
        <hr>
        <!-- Trigger/Open The Modal -->
        <button class="btn" id="myBtn">Open Modal</button>
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
        <div class="row well">
          <div class="col-xm-2">
            <h5>Masukkan Nama Parts</h5>
          </div>
          <div class="col-md-2">
            <input class="form-control input-sm" type="text" name="cari">
          </div>
        </div>
        <!-- end row 1 -->

        <!-- row 2 -->
        <table class="table table-bordered">
          <thead>
            <tr class="table table-primary">
              <th>Kode Parts</th>
              <th>Nama Parts</th>
              <th>Stok</th>
              <th>Harga</th>
              <th>Add</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table table-light">
              <td>A200</td>
              <td>Stang</td>
              <td>10</td>
              <td>500000000</td>
              <td>
                <input class="form-control input-sm col-md-1" type="text" name="jumlah">
                <button class="btn btn-success ml-2">Add</button>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- end row 2 -->
      </div>
    </div>
  </div>

</div>

</body>
</html>