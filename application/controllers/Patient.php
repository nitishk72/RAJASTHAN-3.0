<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

	public function index()
	{
		$this->load->view('patient_view');
	}
    
	public function Profile()
	{
		$this->load->view('patient_profile_view');
	}
    
	public function Settings()
	{
		$this->load->view('patient__settings_view');
	}
    
	public function Report()
	{
		$this->load->view('patient_report_view');
	}
    
	public function Feedback()
	{
		$this->load->view('patient_feedback_view');
	}
    
	public function Logout()
	{
		$this->load->view('patient_logout_view');
	}
    
}
