<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 6/25/2018
 * Time: 6:50 AM
 */
?>


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
