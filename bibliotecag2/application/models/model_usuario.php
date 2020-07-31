<?php
class Model_usuario extends CI_Model
{ public function __construct() {
    $this->load->database();
}
    public function consultar()
    {
        $query = $this->db->get('ejemplar', 30);
        return $query->result();
    }
    public function guardar($data)
    {
        $this->db->insert('ejemplar',$data);
    }

    public function eliminar($ejem_id){
        $this->db->where('ejem_id', $ejem_id);
        $this->db->delete('ejemplar');
     }
     public function update($ejem_id) 
     {
         
         $this->db->where('ejem_id',$ejem_id);
         $this->db->update('ejemplar',$data);
          
     }
     public function ver()
     {
         $query = $this->db->get('categoria', 30);
         return $query->result();
     }
     public function guardar_cate($data)
     {
         $this->db->insert('categoria',$data);
     }
 
     public function eliminar_cate($cate_id){
         $this->db->where('cate_id', $cate_id);
         $this->db->delete('categoria');
      }
      public function update_cate($cate_id) 
      {
        $data=array(
            'cate_nombre' => $this->input->post('cate_nombre')  
        );
          
          $this->db->where('cate_id',$cate_id);
         return $this->db->update('categoria',$data);
           
      }
      
     
     
}
