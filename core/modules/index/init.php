<?php




if(!isset($_GET["action"])){
//	Bootload::load("default");
	Module::loadLayout();
}else{
///	echo "d:";
	// $params = $_REQUEST;
	Action::load($_GET["action"],new Request());
}

?>