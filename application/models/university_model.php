<?php
class University_Model extends CI_Model
{
    function __construct() 
    {
        parent::__construct();
    }
    
    function getAllUniversity()
    {
        return $this->db->get('university')->result_array();
    }
}