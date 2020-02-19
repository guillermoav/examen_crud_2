<?php  
	/**
	 * 
	 */
	class Consulta extends Controller{
		
		function __construct(){
			parent::__construct();

			$this->view->users = [];
		}

		function render(){
			$users = $this->model->get();
			$this->view->users = $users;

			$this->view->render('consulta/index');

		}

		function verUser($param = null){
			//var_dump($param);
			$id_user = $param[0];
			$user = $this->model->getById($id_user);

			$this->view->user = $user;
			$this->view->mensaje = "";
			$this->view->render('consulta/detalle');
		}

		function actualizarUser(){
			$last_name = $_POST['last_name'];
			$name = $_POST['name'];
			$user = $_POST['user'];
			$id_user = $_POST['id_user'];

			if ($this->model->update(['last_name' => $last_name, 'name' => $name, 'user' => $user, 'id_user' => $id_user])) {
				$mensaje ="Usuario Actualizado";

				$newUser = new User();
				$newUser->last_name = $last_name;
				$newUser->name = $name;
				$newUser->user = $user;
				$newUser->id_user = $id_user;

				$this->view->user = $newUser;
				$this->view->mensaje = "Usuario actualizado correctamente";

			}else{
				$this->view->mensaje = "Error al actualizar";
			}

			$this->view->render('consulta/detalle');

		}

		function eliminarUser($param = null){
			$id_user = $param[0];

			if ($this->model->delete($id_user)) {
				
				$this->view->mensaje = "Usuario eliminado correctamente";

			}else{
				$this->view->mensaje = "Error al eliminar";
			}

			$this->render();

		}
	}
?>