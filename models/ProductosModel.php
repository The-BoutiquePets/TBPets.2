<?php

  class Productos_model {


     private $db;
     private $productos;
     
     public function __construct () {
        $this->db = Conectar::conexion();
        $this->productos = array();
     }

     public function get_productos () {

        $sql = "SELECT * FROM productos";
        $resultado = $this->db->query($sql);
		while($row = $resultado->fetch_assoc())
        {
            $this->productos [] = $row;
        }
         return $this->productos;
     }

		
		public function insertar($categoria, $elemento, $descripcion, $peso, $cantidad){
			
			$resultado = $this->db->query("INSERT INTO productos (categoria, elemento, descripcion, peso, cantidad) VALUES ('$categoria', '$elemento', '$descripcion', '$peso', '$cantidad')");
			
		}
		
		public function modificar($id, $categoria, $elemento, $descripcion, $peso, $cantidad){
			
			$resultado = $this->db->query("UPDATE productos SET categoria='$categoria, elemento='$elemento', descripcion='$descripcion', peso='$peso', cantidad='$cantidad' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM productos WHERE id = '$id'");
			
		}
		
		public function get_producto ($id){

			$sql = "SELECT * FROM productos WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>