<?php
class Model_usuario extends CI_Model
{
    
    public function guardar($data)
    {
        $this->db->insert('ejemplar',$data);
    }
    
}
?>