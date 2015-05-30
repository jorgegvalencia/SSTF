<?php
//print_r($_SESSION['PHPSESSID']);
if (isset($_SESSION['PHPSESSID']) && isset($_SESSION['USER_ID'])){
	$smarty->assign('username',$_SESSION['USER_NAME']);
	$smarty->assign('userid',$_SESSION['USER_ID']);
	require_once PROJECT_DIR.'/db_connection.php';
	$result = mysqli_query($conn,"SELECT A.* FROM Usuario_has_Favorito as F, Accion as A WHERE F.`Usuario_idUsuario`='".$_SESSION['USER_ID']."' and F.`Accion_codigo`=A.`codigo` ORDER BY F.posicion ASC");
	if(!$result){
		print_r($conn->error);
        $smarty->assign('favoritesError','true');
    } else if ($result->num_rows == 0){
    	$smarty->assign('favoritesEmpty','true');
    } else {
    	$acciones = array();
    	while ($row=mysqli_fetch_assoc($result)){
    		$row = array_map("utf8_encode", $row );
    		array_push($acciones,$row);	
    	}
    	$smarty->assign('acciones',$acciones);
    }
	$smarty->display('favoritos.tpl');
    $conn->close();
} else{
	header("Location: http://localhost:8888/tracker.php/login");
	die();
}
?>