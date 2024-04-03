<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/style.css">
	<title>Catalogos de Productos</title>
</head>
<body class="body">
	
<h1 class="title">Productos</h1>
<div class="container">
	<?php  
	include("conexion.php");
	$query = "SELECT * FROM productosmostrar";
	$resultado = $conexion->query($query);
	while ($row = $resultado->fetch_assoc()) {
		?>
		<div class="card">
			<img src="data:Image/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>">
			<h4><?php echo $row ['Nombre'];?></h4>
			<p><?php echo $row ['Descripcion']; ?></p>
			<p><?php echo $row ['Precio']; ?></p>
			<a href="#">comprar</a>
		</div>

	<?php	
	}
	?>
</div>
</body>
</html>

