<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

	public function index()
	{
		$this->load->view('doctor_view');
	}
    
	public function Profile()
	{
		$this->load->view('doctor_profile_view');
	}
	public function Previous()
	{
		$this->load->view('doctor_previous_view');
	}
	public function Statistics()
	{
		$this->load->view('doctor_statistics_view');
	}
    
	public function Settings()
	{
		$this->load->view('doctor_settings_view');
	}
    
	public function Report()
	{
		$this->load->view('doctor_report_view');
	}
    
	public function Check()
	{
		$this->load->view('doctor_Check_view');
	}
    
	public function Logout()
	{
		$this->load->view('doctor_logout_view');
	}
    
}
