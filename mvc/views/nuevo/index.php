<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php require 'views/header.php' ?>
	<div id="main" class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<h2>Crear nuevo usuario</h2>
					<p><?php echo $this->mensaje; ?></p>
					<form action="<?php echo constant('URL'); ?>nuevo/registrarUser" method="POST">	
					  <div class="form-group">
					    <label for="name">Nombre</label>
					    <input type="text" class="form-control" id="name" name="name" required>
					  </div>
					  <div class="form-group">
					    <label for="last_name">Apellido</label>
					    <input type="text" class="form-control" id="last_name" name="last_name" required>
					  </div>
					  <div class="form-group">
					    <label for="user">Usuario</label>
					    <input type="text" class="form-control" id="user" name="user" required>
					  </div>
					  <button type="submit" class="btn btn-primary">Guardar</button>
					</form>

				</div>
			</div>
		</div>
	</div>

	<?php require 'views/footer.php' ?>
</body>
</html>