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
					<h2>Edición del usuario <?php echo $this->user->name ?></h2>
					<p><?php echo $this->mensaje; ?></p>
					<form action="<?php echo constant('URL'); ?>consulta/actualizarUser" method="POST">	
					  <div class="form-group">
					    <label for="name">Nombre</label>
					    <input type="text" class="form-control" id="name" name="name" value="<?php echo $this->user->name ?>" required>
					  </div>
					  <div class="form-group">
					    <label for="last_name">Apellidos</label>
					    <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $this->user->last_name ?>" required>
					  </div>
					  <div class="form-group">
					    <label for="user">Usuario</label>
					    <input type="text" class="form-control" id="user" name="user" value="<?php echo $this->user->user ?>" required>
					  </div>
					  <div class="form-group" hidden>
					    <label for="id_user">id usuario</label>
					    <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $this->user->id_user ?>" required>
					  </div>
					  <button type="submit" class="btn btn-primary">Actualizar</button>
					</form>

				</div>
			</div>
		</div>
	</div>

	<?php require 'views/footer.php' ?>
</body>
</html>