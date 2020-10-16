<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('Archivo/subir');?>

<p>
<label>Título</label>
<input type="text" name="titulo">
</p>

<label>Archivo</label>
<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="Subir" />

</form>

</body>
</html>