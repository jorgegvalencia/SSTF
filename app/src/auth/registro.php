<?php
require_once __DIR__.'/utils.php';


if (isset($_POST) && count($_POST) > 0){
	$resultPersonalCheck = checkPersonalData($_POST);
	if (count($resultPersonalCheck)==0) {
		$_SESSION['personalData'] = $_POST;
		header("Location: http://localhost:8888/tracker.php/registration/step2");
		die();
	} else {
		foreach ($resultPersonalCheck as $error) {
			$smarty->assign($error,'true');
		}
		$smarty->display('registro_step1.tpl');
	}
} else {
    session_destroy();
    $smarty->display('registro_step1.tpl');
}

?>