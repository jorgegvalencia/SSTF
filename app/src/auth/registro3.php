<?php
require_once __DIR__.'/utils.php';

if (isset($_POST) && count($_POST) > 0){
	$resultTermsCheck = checkTerms($_POST);
	if (count($resultTermsCheck)==0) {
		$_SESSION['PHPSESSID'] = $_COOKIE['PHPSESSID'];
		$_SESSION['termsData'] = $_POST;

		require_once PROJECT_DIR.'/db_connection.php';
		require_once CLASSES_DIR.'/User.class.php';
		$user = new User($conn, $_SESSION['personalData'], $_SESSION['financialData'], $_SESSION['termsData']);
		$resultRegisterUser = $user->registerUser();
		if ($resultRegisterUser == Null){
			$smarty->assign("registrationError",true);
			$smarty->display('registro_step3.tpl');
			$conn->close();
		} else {
			$_SESSION['USER_ID'] = $resultRegisterUser;
			$_SESSION['USER_NAME'] = $_SESSION['personalData']['Username'];
			$conn->close();
			header("Location: http://localhost:8888/tracker.php");
			die();
		}
	} else {
		foreach ($resultTermsCheck as $error) {
			$smarty->assign($error,'true');
		}
		$smarty->display('registro_step3.tpl');
	}
} else {
	if (!isset($_SESSION['personalData'])){
    	header("Location: http://localhost:8888/tracker.php/registrarion/step1");
		die();
	} else if (!isset($_SESSION['financialData'])){
		header("Location: http://localhost:8888/tracker.php/registrarion/step2");
		die();
	} else {
    	$smarty->display('registro_step3.tpl');
	}
}
?>