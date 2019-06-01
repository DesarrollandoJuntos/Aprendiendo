<?php

class UsuariosData {

	public static $tablename = "usuarios";

	public function add(){
		$sql = "insert into ".self::$tablename." (nombre,apellido,celular,direccion,correo,password,created_at) ";
		$sql .= "value (
		\"$this->nombre\",
		\"$this->apellido\",
		\"$this->celular\",
		\"$this->direccion\",
		\"$this->correo\",
		\"$this->password\",
		$this->created_at)";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}


	public function update(){
		$sql = "update ".self::$tablename." set nombre=\"$this->nombre\",apellido=\"$this->apellido\",direccion=\"$this->direccion\",celular=\"$this->celular\",correo=\"$this->correo\" where id=$this->id";
		Executor::doit($sql);
	}

	public function update_passwd(){
		$sql = "update ".self::$tablename." set password=\"$this->password\" where id=$this->id";
		Executor::doit($sql);
	}

	public function getFullname(){ return $this->nombre." ".$this->apellido; }

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new ClientData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->nombre = $r['nombre'];
			$data->apellido = $r['apellido'];
			$data->correo = $r['correo'];
			$data->direccion = $r['direccion'];
			$data->celular = $r['celular'];
			$data->password = $r['password'];
			$data->created_at = $r['created_at'];
			$found = $data;
			break;
		}
		return $found;
	}

	public static function getByEmail($mail){
		$sql = "select * from ".self::$tablename." where correo=\"$correo\"";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new UsuariosData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->apellido = $r['apellido'];
			$array[$cnt]->correo = $r['correo'];
			$array[$cnt]->password = $r['password'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename."";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new UsuariosData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->apelllido = $r['apelllido'];
			$array[$cnt]->direccion = $r['direccion'];
			$array[$cnt]->celular = $r['celular'];
			$array[$cnt]->correo = $r['correo'];
			$array[$cnt]->password = $r['password'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombre like '%$q%'";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new UsuariosData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->correo = $r['correo'];
			$array[$cnt]->password = $r['password'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}


}

?>