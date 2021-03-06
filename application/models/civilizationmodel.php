<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CivilizationModel extends CI_Model {

    private $table = 'civilization';
    private $table_card_civilization = 'card_civilization';

    function __construct()
    {
        parent::__construct();
    }

    public function get_all_civilization()
    {
        return $this->db->select('civilization_id, civilization_name')->get($this->table)->result_array();
    }

    public function join()
    {
        $this->db->join($this->table_card_civilization, 'civilization_id = card_civilization_civilization_id and card_id = card_civilization_card_id')
                 ->from($this->table);

        return true;
    }

    public function concat()
    {
        $this->db->select('GROUP_CONCAT( DISTINCT civilization_name SEPARATOR "/") as civilization', false);
        return true;
    }

    public function create_civilization()
    {

    }

    public function update_civilization()
    {

    }

    public function delete_civilization()
    {

    }

}