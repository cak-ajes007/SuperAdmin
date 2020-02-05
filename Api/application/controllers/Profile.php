<?php 

require APPPATH.'libraries/Format.php';
require APPPATH.'libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Profile extends REST_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Profile_model', 'Profile');
	}

	// add photo controllers
	public function Add_photo_post()
	{
		$req = $this->Profile->Add_photo($this->post());
		return $this->response($req);
	}
	// add photo controllers

	

	
	// Setting Controllers
	public function Change_password_post()
	{
		$req = $this->Profile->Change_password($this->post());
		return $this->response($req);
	}
	// end of Setting controllers




	// Player info Controller
	public function Read_Player_info_post()
	{
		$req = $this->Profile->Read_Player_info($this->post());
		return $this->response($req);
	}
	public function Update_Player_info_post()
	{
		$req = $this->Profile->Update_Player_info($this->post());
		return $this->response($req);
	}
	// End Controller of player info




	// about me Controller
	public function Read_About_me_post()
	{
		$req = $this->Profile->Read_About_me($this->post());
		return $this->response($req);
	}
	public function Update_About_me_post()
	{
		$req = $this->Profile->Update_About_me($this->post());
		return $this->response($req);
	}
	// end controller of about me




	// Career Experience Controller
	public function Insert_Career_experience_post()
	{
		$req = $this->Profile->Insert_Career_experience($this->post());
		return $this->response($req);
	}
	public function Read_Career_experience_post()
	{
		$req = $this->Profile->Read_Career_experience($this->post());
		return $this->response($req);
	}
	public function Update_Career_experience_post()
	{
		$req = $this->Profile->Update_Career_experience($this->post());
		return $this->response($req);
	}
	public function Delete_Career_experience_post()
	{
		$req = $this->Profile->Delete_Career_experience($this->post());
		return $this->response($req);
	}
	// end Controller of Career Experience

}