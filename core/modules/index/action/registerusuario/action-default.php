<?php

if(isset($_POST["accept"])){
$c= UsuariosData::getByEmail($_POST["correo"]);
if($c==null){
$client =  new UsuariosData();
$client->nombre = $_POST["nombre"];
$client->apellido = $_POST["apellido"];
$client->correo = $_POST["correo"];
$client->direccion = $_POST["direccion"];
$client->password = crypt($_POST["password"]);
$client->celular = $_POST["celular"];
$client->add();


Core::redir("index.php?view=usuarioaccess");
}else{
Core::alert("Ya existe un usuario registrado con esta direccion email.");
Core::redir("./?view=registerusuario");

}
}
?>