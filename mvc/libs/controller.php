<?php  
	/**
	 * 
	 */
	class Controller{
		
		function __construct(){
			//echo "<p>controlados base</p>";
			//crea una nueva vista
			$this->view = new View();
		}

		function loadModel($model){
			$url = 'models/'.$model.'model.php';

			if (file_exists($url)) {
				require_once $url;

				$modelName = $model.'Model';

				$this->model = new $modelName();
			} else {
				
			}
			
		}
	}
?>