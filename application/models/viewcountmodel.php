<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ViewcountModel extends CI_Model {

    private $table = 'view_count';

    function __construct()
    {
        parent::__construct();
    }

    public function view_count_check($ip_address)
    {
        $current_time =  date('Y-m-d H:i:s', strtotime('now'));
        $past_time =  date('Y-m-d H:i:s', strtotime('-24 Hours'));

        $results = $this->db->where('view_count_created >=', $past_time)
                            ->where('view_count_created <', $current_time)
                            ->where('view_count_ip_address', $ip_address)
                            ->get($this->table);

        if ($results->num_rows > 0)
            return false;

        return true;
    }

    public function add_views($ip_address)
    {
        $data = array(
            'view_count_ip_address' => $ip_address,
        );

        $this->db->insert($this->table, $data);
    }

    public function get_views()
    {
        return $this->db->count_all($this->table);
    }
}
