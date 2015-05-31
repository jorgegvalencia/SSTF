<?php
//print_r($_SESSION['PHPSESSID']);
if (isset($_SESSION['PHPSESSID']) && isset($_SESSION['USER_ID'])){
	$smarty->assign('username',$_SESSION['USER_NAME']);
	$smarty->assign('userid',$_SESSION['USER_ID']);
	$smarty->display('home.tpl');
} else{
	header("Location: http://localhost:8888/tracker.php/login");
	die();
}

?>