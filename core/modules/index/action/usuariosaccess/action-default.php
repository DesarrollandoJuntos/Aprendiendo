<?php

$users = UsuariosData::getByEmail($_POST["correo"]);
$found = false;


foreach ($users as $user) {
	if(crypt($_POST["password"],$user->password )==$user->password){
		$_SESSION["client_id"]=$user->id;
		$found=true;
	}
}

if($found){
	Core::redir("index.php?view=usuarios");
}else{
	Core::redir("index.php?view=usuariosaccess");
}

?>

