<?php
session_start();


if(isset($_SESSION['client_id'])){
	unset($_SESSION['client_id']);
}

session_destroy();

print "<script>window.location='./';</script>";
?>