<div class="main">
	<div class="container mt-5">
		<h2 class="p-2">Teams</h2>
		<div class="card">
			<div class="card-body">
				<table class="table table-striped table-borderless text-white table-dark" id="example" style="">
					<thead class="thead-primary">
						<tr>
							<th>Name</th>
							<th>Tag</th>
							<th>Game</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for($i = 1; $i <= 40; $i++){ ?>
						<tr>
							<td>
								<div class="row">
									<div class="col-2">
										<img src="https://esportsnesia.com/wp-content/uploads/2018/06/evos-esports.jpg" alt="" class="img-thumbnail rounded-circle p-0" width="60px">
									</div>
									<div class="col">EVOS ESPORTs</div>
								</div>
							</td>
							<td>EVOS</td>
							<td>Mobile Legends: Bang Bang</td>
							<td><a href="<?= base_url('Admin/team_details') ?>">Details</a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
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