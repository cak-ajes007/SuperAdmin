<div class="main">
	<div class="container mt-5">
		<h2 class="p-2">Details</h2>
		<div class="card game_details">
			<div class="card-body">
				<div class="card-image">
					<img src="" class="img-thumbnail d-block mx-auto gambare_game" width="300px">
				</div>
				<div class="w-50 mt-5 mx-auto">
					<table class="table text-white table-borderless">
						<tr>
							<th>Name</th>
							<td class="game_name"></td>
						</tr>
							<th>Role Game</th>
							<td class="role_game"></td>
						<tr>
							<th>Was Created At</th>
							<td class="created_at"></td>
						</tr>
					</table>
				</div>
				<div class="d-block text-center mt-5">
					<button type="button" class="btn btn-secondary">Hapus</button>
				</div>
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

<script type="text/javascript">
	$(document).ready(function() {
		function Game_details(){
			$.ajax({
				url: "<?= base_url('Api/Super_admin/Game_details'); ?>",
				method: "POST",
				data: {
					game_id : '<?php echo $this->session->userdata('game_id') ?>'
				},
				success: function(req){
					$('img.gambare_game').attr('src',"<?php echo base_url('Api/img/game/'); ?>"+req.data.game_image);
					$('td.game_name').html(req.data.game_name);
					$('td.created_at').html(req.data.created_at);

					data = req.data.role_name;

					html = '';
					for( i = 0; i < data.length; i++)
					{
						html += '\
						<ul>\
							<li>'+data[i].name+'</li>\
						</ul>\
						';
					}
					$('td.role_game').html(html);
				}
			})
		}
		Game_details()
	})


</script>