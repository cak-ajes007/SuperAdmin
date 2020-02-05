<?php 

class Super_admin_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	// Start modal of model Super_admin game site
 	public function Add_game($isi)
	{
		// image upload
		function get_guid() {
			$data = PHP_MAJOR_VERSION < 7 ? openssl_random_pseudo_bytes(16) : random_bytes(16);
			$data[6] = chr(ord($data[6]) & 0x0f | 0x40); 
			$data[8] = chr(ord($data[8]) & 0x3f | 0x80);
			return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
		}

		$image = $isi['image'];
		$nama = $isi['nama'];
		$role = $isi['role'];

		if (empty($nama)) {
			$notif = array(
				'error' => true,
				'message' => "Please insert the Game name!!!."
			);
			goto output;
		}
		else if (empty($role)) {
			$notif = array(
				'error' => true,
				'message' => "Please insert the role in Game!!!."
			);
			goto output;
		}
		// else if (empty($image_name)) {
		// 	$notif = array(
		// 		'error' => true,
		// 		'message' => "Please change your photo and Upload it!!!."
		// 	);
		// 	goto output;
		// }
		else
		{
			$image_name = '';

			if (!empty($image)) {
				mkdir(FCPATH.'img/', 0777);
				mkdir(FCPATH.'img/game/', 0777);

				$img = str_replace("data:image/jpeg;base64", "", $image);
				$img = str_replace("data:image/jpg;base64", "", $img);
				$img = str_replace("data:image/png;base64", "", $img);
				
				$base64 = base64_decode($img);

				$image_name = get_guid().'.jpeg';

				file_put_contents(FCPATH. 'img/game/'.$image_name, $base64);
				// end of image upload
			}

			$add_game = $this->db->insert("game", array(
				'name' => $nama,
				'image'=> $image_name
			));

			$game_id = $this->db->insert_id();

			$jumlah_role = count($role);

			for ($i=0; $i < $jumlah_role; $i++) { 
				$this->db->insert("role_game", array(
					'name' => $role[$i]['name'],
					'game_id' => $game_id
				));
			}

			$notif = array(
				'error' => false,
				'message' => "Success."
			);
			goto output;
		}

		output:
		return $notif;
	}
	public function Read_game()
	{
		$read = $this->db->query("
			SELECT
				game.id,
				game.name as game_name
			FROM 
				game
			INNER JOIN 
				role_game on role_game.game_id = game.id
			GROUP BY 
				game.id
		");

			$notif['error'] = false;
			$notif['message'] = "Sorry!!!... Data is not exist.";
			$notif['data'] = array();

		$no = 0;
		foreach ($read->result_array() as $key) {
			$notif['error'] = false;
			$notif['message'] = "Success.";
			$notif['data'][$no++] = $key;
		}

		output: 
		return $notif;
	}
	public function Game_details($isi)
	{
		$id = $isi['game_id'];

		if (empty($id)) {
			$notif =  array(
				'error' =>true,
				'message' => "game_id tidak diketahui"
			);
			goto output;
		}

		$details = $this->db->query("
			SELECT 
				role_game.name as role_name,
				game_id,
				created_at,
				game.name as game_name,
				game.image as game_image
			FROM	
				role_game
			INNER JOIN
				game on game.id = role_game.game_id
			WHERE
				game_id = '$id'
		");

		$notif['error'] = false;
		$notif['message'] = "Sorry!!!... Data is not exist.";
		$notif['data'] = array();
		
		foreach ($details->result_array() as $key) {
			$notif['error'] = false;
			$notif['message'] = "Success.";
			$notif['data'] = array(
				'role_name' => $this->role_game($key['game_id']),
				'game_name' => $key['game_name'],
				'created_at' => $key['created_at'],
				'game_image' => $key['game_image']
			);
		}

		output:
		return $notif;
	}

	function role_game($game_id)
	{
		$data = $this->db->query("SELECT name FROM role_game WHERE game_id = '$game_id'");
		$no = 0;
		foreach ($data->result_array() as $key) {
			$notif[$no++] = $key;
		}
		return $notif;
	}

	// Start modal of model Super_admin game site

}