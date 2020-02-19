<?php

include_once 'models/user.php';
	/**
	 * 
	 */
	class ConsultaModel extends Model{
		
		public function __construct(){
			parent::__construct();
		}

		//obtiene a todos los usuarios
		public function get(){
			$items = [];

			try {
				$query = $this->db->connect()->query('SELECT * FROM users');

				while ($row = $query->fetch()) {
					$item = new User();
					$item->last_name = $row['last_name'];
					$item->id_user = $row['id_user'];
					$item->name = $row['name'];
					$item->user = $row['user'];

					array_push($items, $item);

				}

				return $items;
			} catch (PDOException $e) {
				
			}
		}	

		//obtiene los datos del usuario
		public function getById($id){
			$item = new User();

			$query = $this->db->connect()->prepare('SELECT * FROM users WHERE id_user = :id_user');

			try {								
				$query->execute(['id_user' => $id]);

				while ($row = $query->fetch()) {
					$item->last_name = $row['last_name'];
					$item->name = $row['name'];
					$item->user = $row['user'];
					$item->id_user = $row['id_user'];
				}
				return $item;
			} catch (PDOException $e) {				
				return null;
			}	

		}

		//actualiza la información de un usuario
		public function update($item){
			$query = $this->db->connect()->prepare('UPDATE users SET last_name = :last_name, name = :name, user = :user WHERE id_user = :id_user ');
			try {
				$query->execute([
					'last_name' => $item['last_name'], 
					'name' => $item['name'], 
					'user' => $item['user'],
					'id_user' => $item['id_user']
				]);

				return true;
			} catch (PDOException $e) {
				return false;
			}
		}

		//borra a un usuario
		public function delete($id){
			$query = $this->db->connect()->prepare("DELETE FROM users WHERE id_user = :id_user ");
			try {
				$query->execute([
					
					'id_user' => $id,
				]);

				return true;
			} catch (PDOException $e) {
				return false;
			}

		}
	}
?>