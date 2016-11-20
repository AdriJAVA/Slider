<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="stylesheet.css"/>
</head>
<body>

  
  
	<div id="slider">
		<?php include "subida.php";
			$indice = 0;
			$indice = ponerImagen();
		?>
	</div>
	
	
	
	<form action="" method="post"  enctype="multipart/form-data">
		<input type="file" name="fileSubir"/>
		<input type="submit" id="izq" name="izquierda" value="&lt;"/>
		<input type="submit" id="der" name="derecha" value=">"/>
		<input type="submit" name="subir" value="Subir"/>
		<input type="hidden" name="indice" value= <?php echo $indice; ?> />
		
	</form>

		<?php 
			subirImagen();
		?>
</body>
</html>