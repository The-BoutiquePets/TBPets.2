<?php
	
	class ProductosController {

		public function __construct(){
			require_once "models/ProductosModel.php";
		}
		
		public function index(){
			
			require_once "models/ProductosModel.php";
			$productos = new Productos_model();
			$data["titulo"] = "Productos";
			$data["productos"] = $productos->get_productos();
			
			require_once "views/productos/productos.php";	

		}

		
		public function nuevo(){
			
			$data["titulo"] = "Productos";
			require_once "views/productos/productos_nuevo.php";
		}
		
		public function guarda(){
			
			$categoria = $_POST['categoria'];
			$elemento = $_POST['elemento'];
			$descripcion = $_POST['descripcion'];
			$peso = $_POST['peso'];
			$cantidad = $_POST['cantidad'];
			
			$productos = new Productos_model();
			$productos->insertar($categoria, $elemento, $descripcion, $peso, $cantidad);
			$data["titulo"] = "Productos";
			$this->index();
		}
		

		public function modificar($id){
			
			$productos = new Productos_model();
			
			$data["id"] = $id;
			$data["productos"] = $productos->get_producto($id);
			$data["titulo"] = "Productos";
			require_once "views/productos/productos_modifica.php";
		}
		
		public function actualizar(){ 

			$id = $_POST['id'];
			$categoria = $_POST['categoria'];
			$elemento = $_POST['elemento'];
			$descripcion = $_POST['descripcion'];
			$peso = $_POST['peso'];
			$cantidad = $_POST['cantidad'];

			$productos = new Productos_model();
			$productos->modificar($id, $categoria, $elemento, $descripcion, $peso, $cantidad);
			$data["titulo"] = "Productos";
			$this->index();
		}
		
		public function eliminar($id){
			
			$productos = new Productos_model();
			$productos->eliminar($id);
			$data["titulo"] = "Productos";
			$this->index();
		}	
	}
?>