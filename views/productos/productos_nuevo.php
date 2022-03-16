<!DOCTYPE html>
<html lang="es">
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
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=productos&a=guarda" autocomplete="off">
				<div class="form-group">
					<label for="categoria">Categoria</label>
					<input type="text" class="form-control" id="categoria" name="categoria"/>
				</div>
				
				<div class="form-group">
					<label for="elemento">Elemento</label>
					<input type="text" class="form-control" id="elemento" name="elemento" />
				</div>
				
				<div class="form-group">
					<label for="descripcion">Descripcion</label>
					<input type="text" class="form-control" id="descripcion" name="descripcion" />
				</div>
				
				<div class="form-group">
					<label for="peso">Peso</label>
					<input type="text" class="form-control" id="peso" name="peso" />
				</div>
				
				<div class="form-group">
					<label for="cantidad">Cantidad</label>
					<input type="text" class="form-control" id="cantidad" name="cantidad" />
				</div>
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</div>
	</body>
</html>