<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CardModel extends CI_Model {

	private $table = 'card';

	function __construct()
	{
		parent::__construct();

		$this->load->model('RaceModel');
	}

	public function get_cards($criteria = array())
	{
		if ( ! empty($criteria['race_id']))
			$this->db->where('race_id', $criteria['race_id']);
	}

	public function create_card()
	{

	}

	public function delete_card()
	{

	}

	public function update_card()
	{

	}

}