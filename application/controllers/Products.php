<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{

	public function index($page='index')
	{
		if( ! file_exists(APPPATH . 'views/pages/products/' . $page . '.php')) {

			show_404();
		}

		$data['title'] = $page;

		$data['products'] = [
			'Nokia',
			'Samsung',
			'Apple',
			'Alienware',
			'Dell'
		];

		$this->load->view('templates/header', $data);
		$this->load->view('pages/products/'.$page, $data);
		$this->load->view('templates/footer', $data);
		
	}
}