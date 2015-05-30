<?php
require_once __DIR__.'/utils.php';
//print_r($_SESSION['PHPSESSID']);
if (isset($_POST) && count($_POST)>0){
	$resultCheckLogin = checkLogin($_POST);
	if (count($resultCheckLogin)>0){
		require_once PROJECT_DIR.'/db_connection.php';
		 $query = "SELECT idUsuario, contrasenia FROM Usuario WHERE `nombre_usuario`='".$_POST['user']."'";
            $result = mysqli_query($conn,$query);
            $conn->close();
            if(!$result || $result->num_rows == 0){
                $smarty->assign('noUserError','true');
            } else {
            	while ($row=mysqli_fetch_assoc($result)){
            		if (!strcmp($_POST['pass'], $row['contrasenia'])){
            			$_SESSION['PHPSESSID'] = $_COOKIE['PHPSESSID'];
            			$_SESSION['USER_ID'] = $row['idUsuario'];
            			$_SESSION['USER_NAME'] = $_POST['user'];
            			header("Location: http://localhost:8888/tracker.php");
						die();
            		} else {
            			$smarty->assign('failPassError','true');
            		}
            	}
            }
			$smarty->display('login.tpl');

	} else {
		foreach ($resultCheckLogin as $error) {
			$smarty->assign($error,'true');
		}
		$smarty->display('login.tpl');
	}

} else if (!isset($_SESSION['PHPSESSID']) && !isset($_SESSION['USER_ID'])){
	$smarty->display('login.tpl');
} else{
	header("Location: http://localhost:8888/tracker.php");
	die();
}

?>