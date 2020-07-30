<?php
class Model_login extends CI_Model
{
    public function consultar()
    {
        $query = $this->db->get('usuario', 30);
        return $query->result();
    }
    public function guardar($data)
    {
        $this->db->insert('usuario',$data);
    }
   
}