<?php

/**
* 
*/
class Service extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->helper('application');
		$this->load->library('Template');
		$this->load->library('Assets');
		$this->lang->load('application');
		$this->load->library('events');	}

	function index()
	{
		Template::render();
	}
}

