<?php
include_once('controle/auto_load.class.php');
new auto_load();

$login = new login();
$login->iniciarSessao();
$sistema = NULL;

if(isset($_POST['sistema'])){
	$sistema = $_POST['sistema'];
	//$sistema = "/portal/";
}else{
	//echo json_encode(FALSE);
	//eturn FALSE;
}
//echo $sistema;

if($login->logoutSistema($sistema)){

	echo json_encode(TRUE);
	return TRUE;

}else{

	echo json_encode(FALSE);
	return FALSE;

}


?>