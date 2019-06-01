
<?php

if(!isset($_SESSION["client_id"])) {
$user = $_POST['email'];
$pass = sha1(md5($_POST['password']));

$base = new Database();
$con = $base->connect();
 $sql = "select * from client where (email= \"".$user."\") and password= \"".$pass."\" and is_active=1";
//print $sql;
$query = $con->query($sql);
$found = false;
$userid = null;
while($r = $query->fetch_array()){
	$found = true ;
	$userid = $r['id'];
}

if($found==true) {
//	session_start();
//	print $userid;
	$_SESSION['client_id']=$userid ;
//	setcookie('userid',$userid);
//	print $_SESSION['userid'];
	print "Cargando ... $user";
	Core::redir("index.php?view=clientaccess");
}else {
	Core::redir("index.php?view=clientaccess");
}

}else{
	Core::redir("index.php?view=clientaccess");
	
}
?>
