<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>	
</head>
<body>
	<?php require 'views/header.php' ?>
	<div id="main" class="py-5">
		<div class="container">			
			<table id="example" class="table table-striped table-bordered" style="width:100%">
		        <thead>
		            <tr>
		                <th>#</th>
		                <th>Nombre</th>
		                <th>Apellido</th>
		                <th>Usuario</th>
		                <th>Acciones</th>                
		            </tr>
		        </thead>
		        <tbody>
		        	<?php  
		        		include_once 'models/user.php';
		        		$i=0;
		        		foreach ($this->users as $row) {
		        			$user = new User();
		        			$user = $row;
		        			$i++;
		        		
		        	?>          
		        	<tr>
						<td><?php echo $i; ?></td>
		                <td><?php echo $user->name; ?></td>
		                <td><?php echo $user->last_name; ?></td>
		                <td><?php echo $user->user; ?></td>
		                <td>
		                	<a class="btn btn-warning" href="<?php echo constant('URL'). 'consulta/verUser/'. $user->id_user; ?>">Editar</a>
		                	<a class="btn btn-danger"  href="<?php echo constant('URL'). 'consulta/eliminarUser/'. $user->id_user; ?>">Eliminar</a>                	
		                </td>
		                
		            </tr>
		        	<?php } ?>
		            
		        </tbody>
		        
		    </table><!--end table-->


			
		</div>
	</div>

	<?php require 'views/footer.php' ?>
</body>
</html>