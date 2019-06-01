<?php

if(isset($_POST["accept"])){
$c= ClientData::getByEmail($_POST["email"]);
if($c==null){
$client =  new ClientData();
$client->email = $_POST["email"];
$client->password = sha1(md5($_POST['password']));

$client->add();

Core::redir("index.php?view=clientaccess");
}else{
Core::alert("Ya existe un usuario registrado con esta direccion email.");
Core::redir("./?view=register");

}
}
?>