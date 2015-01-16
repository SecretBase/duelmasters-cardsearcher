<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RaceModel extends CI_Model {

	private $table = 'race';
	private $table_i18n = 'race_i18n';

	function __construct()
	{
		parent::__construct();
	}

	public function get_all_race()
	{
		return $this->db->get($this->table)->result_array();
	}

	public function create_race()
	{
		//insert
	}

	public function update_race()
	{
		//edit
	}

	public function delete_race()
	{

	}

}