<?php


class Model extends CI_Model {
    
    function save($data, $table){
        return $this->db->insert($table,$data);
    }
    
    function dalete($param = array(), $table){
        return $this->default->delete($table, $param); 
    }

    function get($param = array(), $table){
       return $this->default->get_where($table, $param);
    }

    function update($param = array(), $table, $data){       
        $this->default->where($param);
        return $this->default->update($table, $data); 
    }

}
