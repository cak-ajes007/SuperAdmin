<div class="main">
	<div class="container mt-5">
		<h2 class="p-2">Users</h2>

		<div class="row no-gutters" id="header">
			<div class="p-3">
				<button type="button" class="btn active" onclick="changeTab('user')">Users</button>
			</div>
			<div class="p-3">
				<button type="button" class="btn" onclick="changeTab('admin')">Super Admin</button>
			</div>
		</div>

		<!--		table users-->
		<div class="card w-75 mx-auto single-tab" id="user">
			<div class="card-body">
				<table id="example" class="table table-dark">
					<thead class="thead-primary">
						<tr>
							<th>Username</th>
							<th>Email</th>
							<th>Nickname</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<div class="row">
									<div class="col">
										<img src="" alt="" class="img-thumbnail img">
									</div>
									<div class="col">
										Dhaniel
									</div>
								</div>
							</td>
							<td>
								<div class="text-white">
									dhaniarfebrinwahyudi@gmail.com
								</div>
							</td>
							<td>
								<div class="text-white">
									Dhaniel
								</div>
							</td>
							<td>
								<a href="<?= base_url('Admin/user_details') ?>">Details</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!--		end table users-->

		<!--	table admin	-->
		<div class="single-tab" id="admin">
			<div class="row">
				<div class="col-3">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Tambah admin</div>
						</div>
						<div class="card-body">
							<button class="btn btn-primary w-100" data-toggle="modal" data-target="#staticBackdrop"><i class="fa fa-plus"></i></button>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card">
						<div class="card-body">
							<table class="table table-dark" id="TabAdmin">
								<thead class="thead-primary">
									<tr>
										<th></th>
										<th>Name</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="">
											<div class="p-0">
												<img src="<?= base_url()  ?>assets/illustration.jpg" alt="" class="img-thumbnail img">
											</div>
										</td>
										<td>albed</td>
										<td  class="text-right"><a href="<?= base_url('Admin/user_details') ?>">Details</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end table admin-->

		<!--		modal add admin-->
		<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content rounded-0">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Add Admin</h5>
						<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body mt-3">
						<form action="" class="w-75 mx-auto form">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text text-dark">@</span>
								</div>
								<input type="text" class="form-control bg-dark text-white border-0" placeholder="Username">
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-envelope  text-dark"></i></span>
								</div>
								<input type="email" class="form-control bg-dark text-white border-0" placeholder="Email">
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-lock text-dark"></i></span>
								</div>
								<input type="password" class="form-control bg-dark text-white border-0" placeholder="password">
							</div>

							
								<button type="button" class="btn btn-primary d-block ml-auto mt-5">Add</button>
							
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--	modal add admin-->

	</div>
</div>
<script src="<?= base_url() ?>assets/Admin/js/jquery.js"></script>
	<script src="<?= base_url() ?>assets/Admin/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatable/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatable/js/dataTables.bootstrap.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="<?= base_url() ?>assets/Admin/js/myscript.js"></script>