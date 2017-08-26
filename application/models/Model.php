<?php


class Model extends CI_Model {
    
    function save($data, $table){
        return $this->db->insert($table,$data);
    }
    
    function dalete($param = array(), $table){
        return $this->db->delete($table, $param); 
    }

    function get($param = array(), $table){
       return $this->db->get_where($table, $param);
    }

    function update($param = array(), $table, $data){       
        $this->db->where($param);
        return $this->db->update($table, $data); 
    }

}
