<?php
require_once __DIR__.'/utils.php';
if (isset($_POST) && count($_POST) > 0){
	$resultFinancialCheck = checkFinancialData($_POST);
	if (count($resultFinancialCheck)==0) {
		$_SESSION['financialData'] = $_POST;
		header("Location: http://localhost:8888/tracker.php/registration/step3");
		die();
	} else {
		foreach ($resultFinancialCheck as $error) {
			$smarty->assign($error,'true');
		}
		$smarty->display('registro_step2.tpl');
	}
} else {
	if (isset($_SESSION['personalData'])){
    	$smarty->display('registro_step2.tpl');
	} else {
		header("Location: http://localhost:8888/tracker.php/registration/step1");
		die();
	}
}

?>