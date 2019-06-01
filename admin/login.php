<?php

include("core/controller/Database.php");


$user = $_POST['email'];
$pass = sha1(md5($_POST['password']));

$base= new Database();
$con = $base->connect();

 $sql = "select * from user where (email= \"".$user."\" or username= \"".$user."\" ) and password= \"".$pass."\" and is_active=1";

$query = $con->query($sql);
$found = false;
$userid = null;

while ($r = $query->fetch_array()) {
	$found = true;
	$userid = $r['id'];
}

if($found==true) {
	session_start();
	$_SESSION['admin_id']=$userid ;
	print "Cargando ... $user";
	print "<script>window.location='./';</script>";
}else {
	print "<script>alert('Datos de acceso no validos');</script>";	
	print "<script>window.location='index.php?view=login';</script>";

}

?>