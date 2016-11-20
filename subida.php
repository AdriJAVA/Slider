<?php

function subirImagen(){
	
	$correcto = false;
	
	if(isset($_POST["subir"])){
	$ruta = "imagenes/" . basename($_FILES['fileSubir']['name']);
	
	$tipoImagen = pathinfo($ruta,PATHINFO_EXTENSION);

		$comprobar = getimagesize($_FILES['fileSubir']['tmp_name']);
		
		if($comprobar !== false){
			if($tipoImagen != "jpg" && $tipoImagen != "png" && $tipoImagen != "jpeg") {
						echo "<p>Solo se adminten imagenes con extensión jpg o png</p>";
					}else{
						$correcto = true;
					}
			
		}else{
			echo "No es una imagen";
		}
	
	if($correcto){
		if(move_uploaded_file($_FILES["fileSubir"]["tmp_name"], $ruta)){
			echo "<p>Imagen subida correctamente</p>";
		}else{
			echo "<p>La imagen no se ha podido subir</p>";
		}	
	}
}
}



function ponerImagen(){
	
	$imagenes = glob("imagenes/*.{jpg,png}", GLOB_BRACE);
	
	if(isset($_POST["indice"])){
		
		$indice = $_POST["indice"];
		
		if($indice >= count($imagenes)){
			$indice = 0;
		} if($indice < 0){
			$indice = count($imagenes)-1;
			}

			if(isset($_POST["derecha"])){
				echo '<img src="' . $imagenes[$indice]  . '" width="100%" height="100%"/>';
				return $indice = $indice + 1;
			}
			
			if(isset($_POST["izquierda"])){				
				echo '<img src="' . $imagenes[$indice]  . '" width="100%" height="100%"/>';
				echo $indice;
				return $indice = $indice - 1;
			}
	}
	
	echo '<img src="' . $imagenes[0]  . '" width="100%" height="100%"/>';
	
	return 1;
	
}



?>