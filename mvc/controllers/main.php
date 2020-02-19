<?php 
	/**
	 * 
	 */
	class Main extends Controller{
		
		function __construct(){
			//manda a llamar al construc de la clase que esta heredando
			parent::__construct();			
		}		

		function render(){
			$this->view->render('main/index');
		}		
	}
?>