<?php
defined('BASEPATH') OR exit("No direct script access allowed");

class LangSwitch extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		//$this->load->helper('SAMETRICA_url_helper');
		$this->load->library('session');
	}

	public function switchLanguage($lang = "")
	{
		$lang = !empty($lang) ? $lang : "english";

		$this->session->set_userdata('site_lang', $lang);

		redirect_back();
	}	
}