<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/style2.css'); ?>">

<script src="<?php echo base_url('/assets/js/script.js'); ?>"></script> 



<div class="nav-side-menu">
    <div class="brand"><img src="<?php echo base_url('/assets/img/Logo.png'); ?>" width="200px"></div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">

                <?php if ($_SESSION['role'] == 'Kasir'): ?>
                  
                <li class="<?php echo $pembelian ?>">
                  <a href='<?php echo base_url('Beli'); ?>'>
                  <i class="fa fa-motorcycle fa-lg"></i> Penjualan
                  </a>
                </li>

                <li class="<?php echo $service ?>">
                  <a href='<?php echo base_url('Service'); ?>'>
                  <i class="fa fa-cog fa-lg"></i> Service
                  </a>
                </li>

                <?php endif ?>

                <?php if ($_SESSION['role'] == 'Admin'): ?>

                <li class="<?php echo $laporan ?>">
                  <a href='<?php echo base_url('Laporan'); ?>'>
                  <i class="fa fa-bar-chart fa-lg"></i> Laporan
                  </a>
                </li>

                <?php endif ?>

                <li class="#">
                  <a href='<?php echo base_url('Login/logout'); ?>'>
                  <i class="fa fa-sign-out fa-lg"></i> Logout
                  </a>
                </li>
            </ul>
     </div>
</div>
<head>