<?php

if(isset($_POST["accept"])){
$c= ClientData::getByEmail($_POST["email1"]);
if($c==null){
$client =  new ClientData();
$client->email1 = $_POST["email1"];
$client->password = sha1(md5($_POST['password']));

$client->add1();

Core::redir("index.php?view=clientaccess");
}else{
Core::alert("Ya existe un usuario registrado con esta direccion email.");
Core::redir("./?view=register");

}
}
?>