<table border=1>
<thead>
<tr>
<th>Título</th><th>Archivo</th>
</tr>
</tr>
</thead>
<tbody>
<?php foreach($ejemplares as $row):?>
<tr>
<td><?php echo $row->ejem_titulo  ?></td>
<td>
  <img src="<?php echo base_url('uploads/'.$row->ejem_portada);?>">  
  </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>