<?php
class Model_usuario extends CI_Model
{
    public function consultar()
    {
        $query = $this->db->get('ejemplar', 30);
        return $query->result();
    }
    public function guardar($data)
    {
        $this->db->insert('ejemplar',$data);
    }
    
}
