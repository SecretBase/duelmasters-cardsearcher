<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('CardModel');
	}

	public function index()
	{
		$this->load->model('CardModel');
		$this->twig->display('home.html', $this->data);
	}

	public function race_debug()
	{
		$this->load->model('RaceModel');
		debug($this->RaceModel->get_all_race());
	}

	public function card_debug()
	{
		debug($this->CardModel->get_cards());
	}
}