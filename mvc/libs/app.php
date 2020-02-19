<?php  
	require_once 'controllers/errors.php';
	/**
	 * 
	 */
	class App{		
		//obtiene los datos de la url
		function __construct(){			
			$url = isset($_GET['url']) ? $_GET['url']: null;
			$url = rtrim($url, '/');
			$url = explode('/', $url);			

			/*
			los datos obtenidos en la url se separan por controlladores y metodos
			$url[0] corresponde al controllador
			$url[1] corresponde al metodo
			ejemplo: Main/Crear/  
			'Main' es el controller y 'Crear' es el metodo

			 */

			//cuando se igresa sin definir controlador
			if (empty($url[0])) {
				$archivoController = 'controllers/main.php';
				require_once $archivoController;
				$controller = new Main();
				$controller->loadModel('main');
				$controller->render();
				return false;
			} 
				
			//inicializar controlador
			$archivoController = 'controllers/'.$url[0].'.php';

			//si hay metodo que se requiere cargar
			if (file_exists($archivoController)) {
				//llama al controlador 
				require_once $archivoController;

				//inicializar el controlador
				$controller = new $url[0];					
				$controller->loadModel($url[0]);

				//# de elementos del arreglo
				$nparam = sizeof($url);

				if ($nparam > 1) {
					if ($nparam > 2) {
						$param = [];
						for ($i=2; $i < $nparam ; $i++) { 
							array_push($param, $url[$i]);
						}

						$controller->{$url['1']}($param);
					}else{
						$controller->{$url['1']}();
					} 						
				} else{
					$controller->render();
				}
									
			}else{
				
				$controller = new Errors();
			}						

		}
	}

?>