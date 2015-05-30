<?php

class share { 
    
    public static function getShare($conn,$params,$context) {
        global $_SESSION;
        $query = "SELECT * FROM Accion WHERE `codigo`='".$params['code']."'";
        $result = mysqli_query($conn,$query);
        if(!$result){
            header($_SERVER["SERVER_PROTOCOL"]." 500 Internal Server Error");
            print_r($conn->error);
            exit(); 
        } else if ($result->num_rows == 0){
            print_r(json_encode(array()));
        } else {
            $row=mysqli_fetch_assoc($result);
            $row = array_map("utf8_encode", $row );
            $result = mysqli_query($conn,"SELECT * FROM Usuario_has_Favorito  WHERE `Usuario_idUsuario`='".$_SESSION['USER_ID']."' and `Accion_codigo`='".$row['codigo']."'");
            if(!$result){
                header($_SERVER["SERVER_PROTOCOL"]." 500 Internal Server Error");
                print_r($conn->error);
                exit(); 
            } else if ($result->num_rows == 0){
                $row['fav'] = 0;
            } else {
                $row['fav'] = 1;
            }
            header('Content-Type: application/json',true);
            echo json_encode($row);
        }
    }
}