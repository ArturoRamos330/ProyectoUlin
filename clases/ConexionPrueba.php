<?php

	class conectar{
		private $servidor="localhost";
		private $usuario="postgres";
		private $password="i637 jack";
		private $bd="Inventario";

		public function conexion(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);
			return $conexion;
		}
	}

	$obj = new conectar();
	var_dump($obj->conexion());

?>