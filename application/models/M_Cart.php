<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Cart extends CI_Model {

    function getWeightId($where, $table){
        return $this->db->get_where($table, $where)->result_array();
    } 
}

/* End of file M_Cart.php */
