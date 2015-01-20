<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CardTypeModel extends CI_Model {

    private $table = 'cardtype';
    private $table_cardtype_i18n = 'cardtype_i18n';
    private $table_card_cardtype = 'card_cardtype';

    function __construct()
    {
        parent::__construct();
    }

    public function get_all_cardtype()
    {
        return $this->db->select('cardtype_id, cardtype_name')->join($this->table_cardtype_i18n, 'cardtype_id = cardtype_i18n_cardtype_id')->get($this->table)->result_array();
    }

    public function join()
    {
        $this->db->select('GROUP_CONCAT(cardtype_name SEPARATOR "/") as cardtype', false)
                 ->join($this->table_card_cardtype, 'card_id = card_cardtpye_card_id and cardtype_id = card_cardtpye_cardtype_id')
                 ->join($this->table_cardtype_i18n, 'cardtype_id = cardtype_i18n_cardtype_id')
                 ->from('cardtype');

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