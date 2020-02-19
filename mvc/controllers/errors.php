<?php 
	/**
	 * 
	 */
	class Errors extends Controller{
		
		function __construct(){			
			//manda a llamar al construc de la clase que esta heredando
			parent::__construct();
			//sirve para pasar variables
			$this->view->mensaje = "Página no encontrada";
			//llama a la function con el valor de la vista
			$this->view->render('errors/index');
		}
	}
?>