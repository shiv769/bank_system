<?php
class Adminpages_model extends CI_Model{
	
	function __construct(){
		parent::__construct(); 
	}
	
 public function all_card_details($table){
      $allData = $this->db->get_where($table)->result_array();
      return $allData;
 }

 public function card_social_details($table,$where){
      $Data = $this->db->get_where($table,$where)->row_array();
      return $Data;
 }










}