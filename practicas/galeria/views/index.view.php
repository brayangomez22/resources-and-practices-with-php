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
			<h1 class="titulo">Mi Increíble Galería en PHP y MySQL</h1>
		</div>
	</header>

	<div class="fotos">
		<div class="contenedor">
			<?php foreach($fotos as $foto): ?>
			<div class="thumb">
				<a href="foto.php?id=<?php echo $foto['id']; ?>">
					<img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
				</a>
			</div>
			<?php endforeach; ?>

				<div class="paginacion">
					<!-- Si el usuario esta en la pagina principal entonces no mostramos el enlace a una pagina anterior -->
						<?php if ($pagina_actual != 1): ?>
							<a href="index.php?p=<?php echo $pagina_actual -1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
						<?php endif ?>

					<!-- Si el usuario esta en la pagina principal entonces no mostramos el enlace a una pagina siguiente -->
						<?php if ($total_paginas != $pagina_actual): ?>
							<a href="index.php?p=<?php echo $pagina_actual +1; ?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
						<?php endif ?>
				</div>
		</div>
	</div>

	<footer>
		<p class="copyright">Galeria creada por Brayan Gomez Manco - Don Brayan</p>
	</footer>
</body>
</html>