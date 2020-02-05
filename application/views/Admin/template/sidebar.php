<!-- Sidebar -->
<div class="sidebar" id="sidebar" style="overflow: hidden">
	<div class="icon-close p-2">
		<button class="btn btn-secondary bg-transparent border-0" onclick="closeNav()">
			<h5 class="fa fa-times mb-0 my-auto"></h5>
		</button></div>
	<div class="nav-title mb-0 mt-4" style="opacity: 0">
		<h2>haha</h2>
	</div>
	<a href="<?= base_url('Admin/profile') ?>">
		<div class="akun mt-0 row text-white">
			<div class="avatar my-auto col">
				<img src="<?= base_url()  ?>assets/Admin/img/illustration.jpg" alt="" class="img">
			</div>
			<div class="username my-auto col">
				<p class="mx-auto text-center mb-0">
<!--					<?= $this->session->userdata('username'); ?>-->Dhaniar
				</p>
			</div>
		</div>
	</a>
	<nav class="">
		<ul class="subnav">
			<li class="nav-item">
				<a href="<?= base_url('Admin/dashboard') ?>" class="nav-link"><span class="fa fa-tachometer-alt mr-3"></span>Dashboard</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('Admin/tournament') ?>" class="nav-link"><span class="fas fa-trophy mr-3"></span>Tournaments</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('Admin/game') ?>" class="nav-link"><span class="fa fa-gamepad mr-3"></span>Games</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('Admin/community') ?>" class="nav-link"><span class="fa fa-users mr-3"></span>Communities</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('Admin/team') ?>" class="nav-link"><span class="fa fa-user-friends mr-3"></span>Teams</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('Admin/user') ?>" class="nav-link"><span class="fa fa-user mr-3"></span>Users</a>
			</li>
			<li class="nav-item mt-5">
				<a href="<?= base_url('Admin/logOut') ?>" class="nav-link">Logout <span class="fa fa-sign-out-alt ml-2"></span></a>
			</li>
		</ul>
	</nav>
</div>
<!--	end sidebar		-->
