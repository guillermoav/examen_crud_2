<?php  
	/**
	 * 
	 */
	class Nuevo extends Controller{
		
		function __construct(){
			parent::__construct();
			$this->view->mensaje = "";
		}

		function render(){
			$this->view->render('nuevo/index');
		}

		function registrarUser(){			
			$last_name = $_POST['last_name'];
			$name = $_POST['name'];
			$user = $_POST['user'];

			$mensaje = "";
						
			if ($this->model->insert(['last_name' => $last_name, 'name' => $name, 'user' => $user])) {
				$mensaje ="Usuario creado";
			}else{
				$mensaje ="Error al registrar";
			}

			$this->view->mensaje=$mensaje;
			$this->render();
			

		}
		
	}
?>