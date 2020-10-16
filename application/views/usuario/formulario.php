<h2 align="center" class="display-6"><P class="alert alert-secondary">Ingresar Libro</P></h2>  
<div class=container>

  <?php echo validation_errors(); ?>
  <?php
  
  echo form_open('Usuario/guardar');
  $data_n = array(
    'name'=>'ejem_titulo',
    'class'=>'form-control',
    'id'=>'titulo',
    'placeholder'=>'Ingrese el Título'
  );   
    echo form_label('Titulo:','titulo');
    echo form_input($data_n,"");

  
    $data_e = array(
      'name'=>'ejem_editorial',
      'class'=>'form-control',
      'id'=>'editorial',
      'placeholder'=>'Ingrese Editorial'
  );  
        echo form_label('Editorial:','editorial');
        echo form_input($data_e,"");  


      $data_p = array(
      'name'=>'ejem_paginas',
      'class'=>'form-control',
      'id'=>'paginas',
      'placeholder'=>'Ingrese el número de páginas'
    );  
      echo form_label('Paginas:','paginas');
      echo form_input($data_p,"");  


        $data_i = array(
        'name'=>'isbn',
        'class'=>'form-control',
        'id'=>'isbn',
        'placeholder'=>'Ingrese Isbn'
        );  
        echo form_label('Isbn:','isbn');
        echo form_input($data_i,"");  

        $data_l = array(
        'name'=>'ejem_idioma',
        'class'=>'form-control',
        'id'=>'idioma',
        'placeholder'=>'Ingrese el Idioma'
      );  
        echo form_label('Idioma:','idioma');
        echo form_input($data_l,""); 

        $data_po = array(
        'name'=>'ejem_portada',
        'class'=>'form-control',
        'id'=>'portada',
        'placeholder'=>'Ingrese la Portada'
      );  
        echo form_label('Portada:','portada');
        echo form_input($data_po,"");

        $data_d = array(
        'name'=>'ejem_digital',
        'class'=>'form-control',
        'id'=>'digital',
        'placeholder'=>'Disponible/No Disponible'
    );  
        echo form_label('Digital: ','digital');
        echo form_input($data_d,"");

        $data_b = array(
        'name'=>'ejem_audio',
        'class'=>'form-control',
        'id'=>'audio',
        'placeholder'=>'Disponible/No Disponible'
        );
        echo form_label('Audio:','audio');
        echo form_input($data_b,"");


      $data_r = array(
      'name'=>'ejem_resumen',
      'class'=>'form-control',
      'id'=>'resumen',
      'placeholder'=>'Ingrese el Resumen'
    );  
      echo form_label('Resumen:','resumen');
      echo form_input($data_r,"");  
      
      $data_t = array(
        'name'=>'ejem_tipo_idss',
        'class'=>'form-control',
        'id'=>'tipo',
        'placeholder'=>'Ingrese el Tipo'
      );  
          echo form_label('Tipo:','tipo');
          echo form_input($data_t,"");   

          
        echo form_label('Caegoria: ','categoria');  
        $js = array(
          'id' => 'cate_id',
          'class' => 'form-control'
        );
        echo form_dropdown('cate_id',$opciones,'large',$js);
        

        $data_v = array(
          'name'=>'ejem_valoracion',
          'class'=>'form-control',
          'id'=>'valoracion',
          'placeholder'=>'Ingrese la Valoración'
        );  
      echo form_label('Valoración:','valoracion');
      echo form_input($data_v,"");   

      $data_a = array(
        'name'=>'ejem_anio',
        'class'=>'form-control',
        'id'=>'año',
        'placeholder'=>'Ingrese el Año'
      );  
          echo form_label('Año :','año');
          echo form_input($data_a,"");  

      $data_pr = array(
        'name'=>'ejem_nprestamos',
        'class'=>'form-control',
        'id'=>'prestamo',
        'placeholder'=>'Ingrese numero de prestamos'
      );  
          echo form_label('Préstamo:','prestamo');
          echo form_input($data_a,"");  

          $data_g = array('class'=>'btn btn-outline-dark' );
          echo  form_submit('Guardar','Guardar',$data_g);

  echo form_close(); 

  echo form_open('Usuario/regresar');
  $data_b = array( 'class'=>'btn btn-outline-danger' );  
  echo  form_submit('Cancelar','Cancelar',$data_b);  
  echo form_close(); 

 
?>
 
</div>