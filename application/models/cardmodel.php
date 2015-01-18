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

		$this->RaceModel->join();
		$results_array = $this->db->select('card_id, GROUP_CONCAT(race_name SEPARATOR ",") as race', false)
		                          ->get($this->table)->result_array();

      	return $results_array;
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