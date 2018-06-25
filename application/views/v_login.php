
  <div class="login-page">
    <div class="form">
      <div class="brand pb-3  "><img src="<?php echo base_url('/assets/img/Logo.png'); ?>" width="200px"></div>
      
      <form class="form-group" action="<?php echo base_url('Login/verifikasi')?>" method="POST">

        <div style="color: red">
          <?php
           if (isset($warning)) {
              echo $warning; 
           }
           ?>
        </div>
        <input class="form-control" type="text" placeholder="username" name="username" required/>
        
        <div class="p-1"></div>

        <input class="form-control" type="password" placeholder="password" name="password" required/>
        
        <div class="p-1"></div>

        <div class="span2">
          <p><button class="btn btn-success btn-block">Login</button></p>
        </div>
      </form>
    </div>
  </div>
