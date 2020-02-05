<?php
 
require APPPATH.'libraries/REST_Controller.php';
require APPPATH.'libraries/Format.php';

use Restserver\libraries\REST_Controller;

class Super_admin extends REST_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Super_admin_model", "Super_admin");
	}
	// controller game site
	public function Add_game_post()
	{
		$req = $this->Super_admin->Add_game($this->post());
		return $this->response($req);
	}
	public function Read_game_post()
	{
		$req = $this->Super_admin->Read_game($this->post());
		return $this->response($req);
	}
	public function Game_details_post()
	{
		$req = $this->Super_admin->Game_details($this->post());
		return $this->response($req);
	}


	// controller game site
}