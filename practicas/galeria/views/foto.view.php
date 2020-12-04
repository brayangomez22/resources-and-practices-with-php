<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<title>Mi Increíble Galería en PHP</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">Foto: 

				<?php if(!empty($foto['titulo'])){
						echo $foto['titulo']; 
					} else { echo $foto['imagen']; } 
				?>
					
			</h1>
		</div>
	</header>

	<div class="contenedor">
		<div class="foto">
			<img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
			<p class="texto"><?php echo $foto['texto']; ?></p>
			<a class="regresar" href="index.php"><i class="fa fa-long-arrow-left"></i>Regresar</a>
		</div>
	</div>

	<footer>
		<p class="copyright">Galeria creada por Brayan Gomez Manco - Don Brayan</p>
	</footer>
</body>
</html>