<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CardModel extends CI_Model {

    private $table = 'card';

    function __construct()
    {
        parent::__construct();

        $this->load->model('RaceModel');
        $this->load->model('CivilizationModel');
        $this->load->model('CardTypeModel');
    }

    public function get_cards($criteria = array())
    {
        // Filter query get set of card id
        /*
        if ( ! empty($criteria['race_id']))
            $this->db->where('race_id', $criteria['race_id']);

        $this->RaceModel->join();
        $this->CivilizationModel->join();

        $card_ids = $this->db->select('card_id')
                             ->get($this->table)->result_array();

        if (empty($card_ids))
            return false;
        */

        //Get array of filter id and query again to get concat cards data
        $this->RaceModel->join();
        $this->RaceModel->concat();

        $this->CivilizationModel->join();
        $this->CivilizationModel->concat();

        // $this->db->where_in('card_id', $card_ids);

        $results_array = $this->db->select('card_id, card_cost, card_power')
                                  ->group_by('card_id')
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

    public function get_all_cardtype()
    {
        return $this->CardTypeModel->get_all_cardtype();
    }

    public function get_all_cost()
    {
        return $this->db->select('card_cost')
                        ->distinct()
                        ->get($this->table)->result_array();
    }

    public function get_all_power()
    {
        return $this->db->select('card_power')
                        ->distinct()
                        ->get($this->table)->result_array();
    }
}
