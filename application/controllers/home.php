<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$this->load->model('CardModel');
		$this->twig->display('home.html', $this->data);
	}
}