<?php  
	/**
	 * 
	 */
	class NuevoModel extends Model{
		
		public function __construct(){
			parent::__construct();
		}

		public function insert($datos){
			try {				
				$query = $this->db->connect()->prepare('INSERT INTO users (last_name,name,user) VALUES(:last_name, :name, :user)');
				$query->execute(['last_name' => $datos['last_name'], 'name' => $datos['name'], 'user' => $datos['user']]);
				return true;
			} catch (PDOException $e) {
				echo $e->getMessage();
				return false;
			}			
		}		
	}
?>