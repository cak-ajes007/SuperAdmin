
<div class="main">
	<div class="container mt-5">
		<h2 class="p-3">Games</h2>
		<div class="row">
			<div class="col-md-3">
				<div class="card">
					<div class="card-header text-center">Add Game</div>
					<div class="card-body">
						<button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#add-Gamebro"><span class="fa fa-plus"></span></button>
					</div>
				</div>
			</div>
			<div class="col-md">
				<div class="card rounded-lg">
					<div class="card-body">
						<table id="tabel-game" class="table table-striped table-borderless table-hover table-dark w-100 game" style="width:100%">
							<thead class="thead-primary">
								<tr>
									<th>#</th>
									<th>Game</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!--MOdal-->
<div class="modal fade" id="add-Gamebro" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Game</h5>
				<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="form mt-3 add-game">
					<div class="form-group">
						<input type="text" placeholder="Name" class="form-control w-75 d-block mx-auto bg-dark border-0 text-white  rounded-0 name">
					</div>
					<div class="form-group">
						<div class="input-group w-75 mx-auto">
							<input type="text" placeholder="Roles in Game" class="form-control d-block  bg-dark border-0 text-white rounded-0" id="role">
							<div class="input-group-append">
								<div class="input-group-button">
									<span class="btn btn-secondary rounded-0" onclick="addRole()" type="button"><span class="fa fa-plus"></span></span>
								</div>
							</div>
						</div>
						<ul id="roleList" class="mt-2"></ul>
					</div>
					<div class="custom-file">
						<label class="">Upload Image</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input game_image" id="customFile">
								<label class="custom-file-label filename" for="customFile">Choose file</label>
							</div>
							<input type="hidden" class="game_image_hidden">
					</div>
					<button type="submit" class="btn btn-primary mt-5 ml-auto">Add</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!--end MOdal-->
	
<script src="<?= base_url() ?>assets/Admin/js/jquery.js"></script>
<script src="<?php echo base_url('assets/plugins/compress-image/jquery.exif.js'); ?>"></script>	
<script src="<?php echo base_url('assets/plugins/compress-image/jquery.canvasResize.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/compress-image/zepto.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/compress-image/binaryajax.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/compress-image/exif.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/compress-image/canvasResize.js'); ?>"></script>
<script src="<?= base_url() ?>assets/Admin/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="<?= base_url() ?>assets/Admin/js/myscript.js"></script>

<script>
	$(document).ready(function(){

		$(document).on('change', 'input.game_image', function(e) {
			file =  e.target.files[0];
			$('label.filename').html(file.name);
			canvasResize(file, {
				width: 400,
				height: 400,
				crop: true,
				quality: 100,
				callback: function(data) {
					$("input.game_image_hidden").val(data);
				}
			})
		})

		$(document).on("submit", "form.add-game", function () {
			role = $("input#role-list").val();
			role_array = new Array();
			$("input#role-list").each(function (req) {
				role_array.push({"name": $(this).val()});
			})
			name = $("input.name").val();
			image = $("input.game_image_hidden").val();
			
			$.ajax({
				url: "<?= base_url('Api/Super_admin/Add_game'); ?>",
				type: "POST",
				data: {
					nama : name,
					role : role_array,
					image : image
				},
				success: function (req) {
					$("input.name").val('');
					$("input#role-list").val('');
					$("div#add-Gamebro").modal('hide');
					Read_game();
				}
			})
			return false;
		})

		function Read_game(){
			$('table#tabel-game').DataTable().destroy();
			$("table#tabel-game").DataTable({
				"serverside": true,
				"processing": true,
				"deferRender": true,
				"ajax": {
					"url": "<?= base_url('Api/Super_admin/Read_game'); ?>",
					"method": "POST",
					"dataSrc": "data"
				},
				"columns": [
					{
						data: null,
						render: function(data, type, row, meta) {
							return meta.row + meta.settings._iDisplayStart + 1 + '.';
						}
					},
					{
						data: "game_name"
					},
					{
						data: null,
						render: function(req) {
							return '<a href="<?= base_url('Admin/game_details/') ?>'+req.id+'">Details</a>'
						}
					}
				]
			});
		}
		Read_game();



		function notif(element, type, message) {
			$(element).html('\
			<div class="alert alert-'+type+'" role="alert">\
		        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true" style="margin-top: -20px">&times;</span></button>\
		        '+message+'\
		    </div>\
	    	');
		}


	})
</script>