<h2>Formulario</h2>
<form method="post" action="<?php echo base_url('usuarioGuardar') ?>">
    <div>
        <div >
            <div class="form-group"> 
                <label>Titulo</label>
                <div>
                    <input type="text" class="form-control" name="ejem_titulo">
                </div>
            </div>
        </div>
        <div >
            <div>
                <label>Editorial</label>
                <div>
                    <input type="text" name="ejem_editorial">
                </div>
            </div>
        </div>
        <div >
            <div>
                <label>Paginas</label>
                <div>
                    <input type="number" name="ejem_paginas">
                </div>
            </div>
        </div>
        <div >
            <div>
                <label>Isbn</label>
                <div>
                    <input type="text" name="ejem_isbn">
                </div>
            </div>
        </div>
        <div >
            <div>
                <label>Idioma</label>
                <div>
                    <input type="text" name="ejem_Idioma">
                </div>
            </div>
        </div>
        <div >
            <div>
                <label>Portada</label>
                <div>
                    <input type="text" name="ejem_portada">
                </div>
            </div>
        </div>
        <div >
            <div>
                <label>Digital</label>
                <div>
                    <input type="text" name="ejem_digital">
                </div>
            </div>
        </div>
        }<div >
            <div>
                <label>Audio</label>
                <div>
                    <input type="text" name="ejem_audio">
                </div>
            </div>
        </div>
        <div >
            <div>
                <label>Resumen</label>
                <div>
                    <input type="text" name="ejem_resumen">
                </div>
            </div>
        </div>
        <div >
            <div>
                <label>Tipo</label>
                <div>
                    <input type="text" name="ejem_tipo_id">
                </div>
            </div>
        </div>
        <div >
            <div>
                <label>Categoria</label>
                <div>
                    <input type="text" name="ejem_cate_id">
                </div>
            </div>
        </div>
        <div >
            <div>
                <label>Valoracion</label>
                <div>
                    <input type="text" name="ejem_valoriacion">
                </div>
            </div>
        </div>
        <div >
            <div>
                <label>Anio</label>
                <div>
                    <input type="number" name="ejem_anio">
                </div>
            </div>
        </div>
       
        <div >
            <input type="submit" value="Guardar" >
        </div>
    </div>
</form>