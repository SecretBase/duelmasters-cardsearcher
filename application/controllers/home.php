<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('CardModel');
		// $this->load->model('RaceModel');
	}

	public function index()
	{
		$this->data['races'] = $this->CardModel->get_all_race();
		$this->data['civilizations'] = $this->CardModel->get_all_civilization();
		$this->data['cardtype'] = $this->CardModel->get_all_cardtype();
		$this->twig->display('home.html', $this->data);
	}

	public function model_debug()
	{
		
	}
}