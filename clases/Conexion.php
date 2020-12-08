<?php
include('DatosConexion.php');
	class conectar{
		private $servidor="localhost";
		private $usuario="postgres";
		private $password="i637 jack";
		private $bd="Inventario";

		public function conexion(){
			$conexion_pdo = new PDO("pgsql:host=".SERVER.";port=5432;dbname=".DBNAME, USER, PASSWORD);
			return $conexion_pdo;
		}
	}

	//$obj = new conectar();
	//if($obj->conexion()){
	//	echo "conectado";
	//}

?>