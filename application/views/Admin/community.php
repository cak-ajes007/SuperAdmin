<div class="main">
	<div class="container mt-5">
		<h2 class="p-2">Communities in Besaf</h2>
		<div class="row no-gutters" id="header">
			<div class="p-3">
				<button type="button" class="btn rounded-0 active" onclick="changeTab('com')">Communities</button>
			</div>
			<div class="p-3">
				<button type="button" class="btn rounded-0" onclick="changeTab('req')">Request(s)</button>
			</div>
		</div>
		<div class="card  rounded-0 shadow-none border-0">
			<div class="card-body">

				<!--			table komunitas-->
				<div id="com" class="single-tab d-flexbox">
					<table class="table table-striped table-borderless text-white table-hover table-dark" id="example" style="">
						<thead class="thead-primary">
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Game</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for($i = 1; $i <= 40; $i++){ ?>
							<tr>
								<td><?= $no++ ?></td>
								<td>Mobel Lejen Community</td>
								<td>Mobile Legends: Bang Bang</td>
								<td><a href="<?= base_url('Admin/community_details') ?>">Details</a></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<!--				end-->

				<!--				Request-->
				<div class="card bg-secondary mb-2 single-tab" id="req">
					<div class="row no-gutters">
						<div class="col-md-4">
							<div class="card-image">
								<img src="https://screenshotlayer.com/images/assets/placeholder.png" alt="images" class="img-thumbnail rounded-circle" style="width: 60px;">
							</div>
						</div>
						<div class="col-md">
							<div class="card-body p-2">
								<p class="card-title my-auto font-weight-bold">Icafe Tournament</p>
							</div>
						</div>
					</div>
				</div>
				<!--				end-->

			</div>
		</div>
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