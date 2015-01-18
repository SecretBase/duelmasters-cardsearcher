<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CardModel extends CI_Model {

	private $table = 'card';

	function __construct()
	{
		parent::__construct();

		$this->load->model('RaceModel');
		$this->load->model('CivilizationModel');
	}

	public function get_cards($criteria = array())
	{
		if ( ! empty($criteria['race_id']))
			$this->db->where('race_id', $criteria['race_id']);

		$this->RaceModel->join();
		$results_array = $this->db->select('card_id')
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

	public function get_all_race()
	{
		return $this->RaceModel->get_all_race();
	}

	public function get_all_civilization()
	{
		return $this->CivilizationModel->get_all_civilization();
	}

}
