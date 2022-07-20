<?php
	class Productos {
		private $db;

		public function __construct($base) {
			$this->db = $base;
		}

		public function insertProducto($nombre, $descripcion, $precio) {
			$respuesta = $this->db->enviarQuery("INSERT INTO productos VALUES (DEFAULT, '$nombre', '$descripcion', $precio) ");

				if(!$respuesta) {
					echo $this->db->error;
					return false;
				} else {
					return $respuesta;
				}
		}

		public function getProductos() {
			$respuesta = $this->db->enviarQuery("SELECT * FROM productos");

			if(!$respuesta) {
				echo $this->db->error;
				return false;
			} else {
				return $respuesta;
			}
		} 

		public function getProducto($id) {
			$respuesta = $this->db->enviarQuery("SELECT * FROM productos WHERE codigo=$id");

			if(!$respuesta) {
				echo $this->db->error;
				return false;
			} else {
				return $respuesta;
			}
		} 

		public function	actualizarProducto($id, $nombre, $descripcion, $precio) {
			$respuesta = $this->db->enviarQuery("UPDATE productos SET producto='$nombre', descripcion='$descripcion', precio=$precio WHERE codigo=$id");

			if(!$respuesta) {
				echo $this->db->error;
				return false;
			} else {
				return $respuesta;
			}
		}

		public function borrarProducto($id) {
			$respuesta = $this->db->enviarQuery("DELETE FROM productos WHERE codigo=$id");

			if(!$respuesta) {
				echo $this->db->error;
				return false;
			} else {
				return $respuesta;
			}
		}
	}
?>