<?php
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=productos&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />
				
				<div class="form-group">
					<label for="categoria">Categoria</label>
					<input type="text" class="form-control" id="categoria" name="categoria" value="<?php echo $data["productos"]["categoria"]?>" />
				</div>
				
				<div class="form-group">
					<label for="elemento">Elemento</label>
					<input type="text" class="form-control" id="elemento" name="elemento" value="<?php echo $data["productos"]["elemento"]?>" />
				</div>
				
				<div class="form-group">
					<label for="descripcion">Descripcion</label>
					<input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $data["productos"]["descripcion"]?>" />
				</div>
				
				<div class="form-group">
					<label for="peso">Peso</label>
					<input type="text" class="form-control" id="peso" name="peso" value="<?php echo $data["productos"]["peso"]?>" />
				</div>
				
				<div class="form-group">
					<label for="cantidad">Cantidad</label>
					<input type="text" class="form-control" id="cantidad" name="cantidad" value="<?php echo $data["productos"]["cantidad"]?>" />
				</div>

				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</body>
	</html>	