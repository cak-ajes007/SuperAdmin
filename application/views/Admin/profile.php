<div class="main">
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<div class="d-block text-right my-auto p-2">
							<span class="badge badge-primary" data-toggle="modal" data-target="#avatar" style="cursor: pointer">
								<i class="fa fa-edit"> Edit</i>
							</span>
						</div>
						<div class="card-image">
							<div class="pt-3 image-thumbnail">
								<img src="<?= base_url()  ?>assets/Admin/img/illustration.jpg" alt="" style="width: 125px" class="img">
							</div>
						</div>
						<div class="mt-3 text-center">
							<h5 class="card-title text-center font-weight-bold">
								<!--								<?= $this->session->userdata('username'); ?>-->
								Dhaniar
							</h5>
							<div class="card-text text-secondary">
								Programmer | Super Admin
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<h5 class="p-2">Your info</h5>
								<hr>
							</div>
							<div class="col">
								<div class="d-block text-right my-auto p-2">
									<span class="badge badge-primary" data-toggle="modal" data-target="#info" style="cursor: pointer">
										<i class="fa fa-edit"> Edit</i>
									</span>
								</div>
							</div>
						</div>
						<div class="container mt-3">
							<table class="table table-borderless text-white mx-auto">
								<tbody>
									<tr>
										<th>Name</th>
										<td class="text-secondary">Dhaniar</td>
									</tr>
									<tr>
										<th>Email</th>
										<td class="text-secondary">dhaniarfebrinwahyud@gmail.com</td>
									</tr>
									<tr>
										<th>Country</th>
										<td class="text-secondary">Indonesia</td>
									</tr>
									<tr>
										<th>City</th>
										<td class="text-secondary">Banyuwangi</td>
									</tr>
									<tr>
										<th>Birth Date</th>
										<td class="text-secondary">28 Juni 2002</td>
									</tr>
									<tr>
										<th>Gender</th>
										<td class="text-secondary">Male</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-4"></div>
			<div class="col-md">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<h5 class="p-2">About You</h5>
								<hr>
							</div>
							<div class="col">
								<div class="d-block text-right my-auto p-2">
									<span class="badge badge-primary" data-toggle="modal" data-target="#about" style="cursor: pointer">
										<i class="fa fa-edit"> Edit</i>
									</span>
								</div>
							</div>
						</div>
						<div class="text-truncate d-block text-secondary">
							something
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--modal about-->
<div class="modal fade" id="about" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content rounded-0">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">About You</h5>
				<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body mt-3">
				<form action="" class="w-75 mx-auto form">

					<textarea name="" id="" cols="30" rows="10" class="form-control bg-dark text-white border-0"></textarea>

					<button type="button" class="btn btn-primary d-block ml-auto mt-5">Save</button>

				</form>
			</div>
		</div>
	</div>
</div>
<!--end modal-->



<!--modal info-->
<div class="modal info fade" id="info" data-backdrop="static" tabindex="-2" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content rounded-0">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Your Info</h5>
				<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body mt-3">
				<form action="" class="w-75 mx-auto form">

					<div class="form-group">
						<input type="text" placeholder="Name" class="form-control w-75 d-block mx-auto bg-dark border-0 text-white  rounded-0 ">
					</div>

					<div class="form-group">
						<input type="email" placeholder="Email" class="form-control w-75 d-block mx-auto bg-dark border-0 text-white  rounded-0 ">
					</div>

					<div class="form-group">
						<input type="text" placeholder="Country" class="form-control w-75 d-block mx-auto bg-dark border-0 text-white  rounded-0 ">
					</div>

					<div class="form-group">
						<input type="text" placeholder="City" class="form-control w-75 d-block mx-auto bg-dark border-0 text-white  rounded-0 ">
					</div>

					<div class="form-group">
						<input type="date" placeholder="Birth Date" class="form-control w-75 d-block mx-auto bg-dark border-0 text-white  rounded-0 ">
					</div>

					<div class="form-group">
						<div class="custom-control custom-radio d-inline ml-5">
							<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input bg-dark">
							<label class="custom-control-label" for="customRadio1">Male</label>
						</div>
						<div class="custom-control custom-radio d-inline">
							<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input bg-dark">
							<label class="custom-control-label" for="customRadio2">Female</label>
						</div>
					</div>

					<button type="button" class="btn btn-primary d-block ml-auto mt-5">Save</button>

				</form>
			</div>
		</div>
	</div>
</div>
<!--end modal info-->


<!--modal avatar-->
<div class="modal fade" id="avatar" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content rounded-0">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Edit Avatar</h5>
				<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body mt-3">
				<form action="" class="w-75 mx-auto form">

					<div class="custom-file mb-3">
						<input type="file" multiple class="custom-file-input " multiple id="customFile">
						<label class="custom-file-label bg-dark border-0 text-white d-block mx-auto" for="customFile">Your Avatar</label>
					</div>
					
					<div class="form-group">
						<input type="text" placeholder="Bio" class="form-control d-block mx-auto bg-dark border-0 text-white  rounded-0 " value="Programmer | Super Admin">
					</div>

					<button type="button" class="btn btn-primary d-block ml-auto mt-5">Save</button>

				</form>
			</div>
		</div>
	</div>
</div>
<!--end avatar-->
<script src="<?= base_url() ?>assets/Admin/js/jquery.js"></script>
	<script src="<?= base_url() ?>assets/Admin/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatable/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatable/js/dataTables.bootstrap.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="<?= base_url() ?>assets/Admin/js/myscript.js"></script>