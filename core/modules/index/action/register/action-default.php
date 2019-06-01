<?php

if(isset($_POST["accept"])){
$c= ClientData::getByEmail($_POST["email"]);
if($c==null){
$client =  new ClientData();
$client->name = $_POST["name"];
$client->lastname = $_POST["lastname"];
$client->email = $_POST["email"];
$client->address = $_POST["address"];
$client->password = crypt($_POST["password"]);
$client->phone = $_POST["phone"];
$client->add();

Core::redir("index.php?view=clientaccess");
}else{
Core::alert("Ya existe un usuario registrado con esta direccion email.");
Core::redir("./?view=register");

}
}
?>