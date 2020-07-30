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
 
    function updateData($ejem_id) {
        $data = array (
            'ejem_id'=>$ejem_id,
            'ejem_titulo'=>$ejem_titulo,
            'ejem_editorial'=>$ejem_editorial,
            'ejem_paginas'=>$ejem_paginas,
            'ejem_isbn'=>$ejem_isbn,
            'ejem_idioma'=>$ejem_idioma,
            'ejem_portada'=>$ejem_portada,
            'ejem_digital'=>$ejem_digital,
            'ejem_audio'=>$ejem_audio,
            'ejem_resumen'=>$ejem_resumen,
            'ejem_tipo_id'=>$ejem_tipo_id,
            'ejem_cate_id'=>$ejem_cate_id,
            'ejem_valoracion'=>$ejem_valoracion,
            'ejem_anio'=>$ejem_anio,
            'ejem_nprestamos'=>$ejem_nprestamos
        );
        $this->db->where('ejem_id', $ejem_id);
        $this->db->update('ejemplar', $data);
    }
    public function eliminar($ejem_id){
        $this->db->where('ejem_id', $ejem_id);
        $this->db->delete('ejemplar');
     }
}
