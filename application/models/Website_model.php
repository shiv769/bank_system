<?php
class Website_model extends CI_Model{
	
	function __construct(){
		parent::__construct(); 
		//$this->db->db_debug = false;
	}
	
	public function gettables(){
		$query=$this->db->query("Show Tables");
		$tables=[];
		if($query->num_rows()>0){
			$tables=$query->result_array();
		}
		return $tables;
	}
	
	public function getcolumns($table){
		$query=$this->db->query("Show Columns from $table");
		$columns=[];
		if($query->num_rows()>0){
			$columns=$query->result_array();
		}
		return $columns;
	}
	
	public function getdata($table){
		$query=$this->db->get($table);
		$data=[];
		if($query->num_rows()>0){
			$data=$query->result_array();
		}
		return $data;
	}
	
	public function updatedata($table,$data,$where){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
   

    public function saveNew_data($table,$data){
     $result = $this->db->insert($table, $data);
      $last_id = $this->db->insert_id();

    if($result){
    return $last_id;
     }else{
       return false;
     }
   }
 
   public function get_where_alldata($table,$where){
      $alldata = $this->db->get_where($table,$where)->result_array();
       if($alldata){
          return $alldata;
        }else{
          return false;
        }
    }

 
   public function get_where_data($table,$where){
     $data = $this->db->get_where($table,$where)->row_array();
       if($data){
          return $data;
        }else{
          return false;
        }


   }

  
    public function removethisdata($table,$where){
         $this->db->where($where);
         $result = $this->db->delete($table);
         if($result){
        	return true;
          }else{
        	return false;
         }
   
    }
 



  	public function Update_Data($table,$data,$where=array()){
		$query=$this->db->update($table,$data,$where);
		if($query){
			$return['status']=true;
			$return['msg']="Recoard Update Successfully !!";
		}else{
			$return['status']=false;
			$error=$this->db->error();
			$return['msg']="code : ".$error['code']."\n Message : ".$error['message'];
		}
		return $return;   
    }
  
 






}