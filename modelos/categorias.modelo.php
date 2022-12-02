<?php 

require_once "conexion.php";

class ModeloCategorias{

	static public function mdlMostrarCategorias(){

		$stmt = Conexion::conectar()-> prepare("SELECT id,categoria,ruta,fecha,estado,'X' as acciones FROM categorias");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt = null;
	}

	static public function mdlRegistrarCategorias($categoria, $ruta, $estado, $fecha){

		$stmt = Conexion::conectar()->prepare("INSERT INTO categorias(categoria,ruta,estado,fecha) VALUES (:categoria,:ruta,:estado,:fecha)");

		$stmt -> bindParam(":categoria", $categoria, PDO::PARAM_STR);
		$stmt -> bindParam(":ruta", $ruta, PDO::PARAM_STR);
		$stmt -> bindParam(":estado", $estado, PDO::PARAM_STR);
		$stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);

		if($stmt -> execute()){
            return "La categoría se registró correctamente";
        }else{
            return "Error, no se pudo registrar la categoría";
        }        

        $stmt = null;

	}

	static public function mdlEliminarCategoria($id){

		$stmt = Conexion::conectar()->prepare("DELETE FROM categorias WHERE id = :id");

		$stmt -> bindParam(":id", $id, PDO::PARAM_INT);

		if($stmt -> execute()){
            return "La categoría se eliminó correctamente";
        }else{
            return "Error, no se pudo eliminar la categoría";
        }        

        $stmt = null;

	}

	static public function mdlActualizarCategoria($id,$categoria, $ruta, $estado, $fecha){

		$stmt = Conexion::conectar()->prepare("UPDATE categorias
											   SET categoria = :categoria,
											   	   ruta = :ruta,
												   estado = :estado,
												   fecha = :fecha
											   WHERE id = :id");

		$stmt -> bindParam(":id", $id, PDO::PARAM_INT);
		$stmt -> bindParam(":categoria", $categoria, PDO::PARAM_STR);
		$stmt -> bindParam(":ruta", $ruta, PDO::PARAM_STR);
		$stmt -> bindParam(":estado", $estado, PDO::PARAM_STR);
		$stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);

		if($stmt -> execute()){
            return "La categoría se actualizó correctamente";
        }else{
            return "Error, no se pudo actualizar la categoría";
        }        

        $stmt = null;
	}
	

}