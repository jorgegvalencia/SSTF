<?php

class user { 

    private $personalKeysRel = array(
        'Telephone' => 'telefono',
        'Name' => 'nombre',
        'Surname' => 'apellidos',
        'Birthday' => 'fecha_nacimiento',
        'Address' => 'direccion');
    private $financialKeysRel = array(
        "Profession" => "profesion",
        "Ocuppation" => "ocupacion",
        "WorkPlace" => "lugar",
        "Position" => "cargo",
        "income" => "income_anual");
    private $userKeysRel = array(
        "Username" => "nombre_usuario",
        "Email" => "email",
        "Password" => "contrasenia");
	private $personalData;
	private $financialData;
	private $terms;
	private $db;
    private $idPersonalData = '';
    private $idFinancialData = '';

	public function __construct($db,$personalData,$financialData,$terms){
		$this->db = $db;
		$this->personalData = $personalData;
		$this->financialData = $financialData;
		$this->terms = $terms;
	}

    public static function toggleFavorite($conn,$parameters,$context)
    {
        if (!strcmp($context['action'], 'add') && isset($context['position']) && strcmp($context['position'], '')) {
            $result = mysqli_query($conn,"INSERT INTO Usuario_has_Favorito VALUES ('".$parameters['id']."','".$context['id']."', '".$context['position']."')");
        } else if (!strcmp($context['action'], 'add')) {
            $result = mysqli_query($conn,"INSERT INTO Usuario_has_Favorito SELECT '".$parameters['id']."','".$context['id']."', IFNULL(MAX(posicion)+1,0) FROM Usuario_has_Favorito where Usuario_idUsuario='".$parameters['id']."'");
        } else if (!strcmp($context['action'], 'del')){
            $result = mysqli_query($conn,"DELETE FROM Usuario_has_Favorito where Usuario_idUsuario='".$parameters['id']."' AND Accion_codigo='".$context['id']."'");
        } else {
            header($_SERVER["SERVER_PROTOCOL"]." 400 Bad Request");
            print_r("Acción no permitida");
            exit(); 
        }
        if(!$result){
            header($_SERVER["SERVER_PROTOCOL"]." 500 Internal Server Error");
            print_r($conn->error);
            exit(); 
        } else {
            header('Content-Type: application/json',true);
            echo json_encode('');
        }
    }

    public static function reorderFavorites($conn,$parameters,$context)
    {   
        if (isset($context["favorites"])) {
            mysqli_autocommit($conn, FALSE);
            foreach ($context["favorites"] as $code => $position) {
                $query = "UPDATE Usuario_has_Favorito SET `posicion`='".$position."' WHERE `Usuario_idUsuario`='".$parameters['id']."' and `Accion_codigo`='".$code."'";
                //print_r($query);
                $result = mysqli_query($conn,$query);
                if(!$result){
                    header($_SERVER["SERVER_PROTOCOL"]." 500 Internal Server Error");
                    print_r($conn->error);
                    mysqli_rollback($conn);
                    exit();
                }

            }

            if (!mysqli_commit($conn)) {
                header($_SERVER["SERVER_PROTOCOL"]." 500 Internal Server Error");
                print_r($conn->error);
                mysqli_rollback($conn);
                exit(); 
            }
            mysqli_close($conn);
            //header('Content-Type: application/json',true);
            //echo json_encode('');

        } else {
            header($_SERVER["SERVER_PROTOCOL"]." 400 Bad Request");
            print_r("Datos incorrectos");
            exit(); 
        }
    }

    private function insertPersonalData()
    {

        $queryKeys = '';
        $queryValues = '';
        foreach ($this->personalData as $key => $value) {
            if(isset($this->personalKeysRel[$key])){
                if ($queryKeys != ''){
                    $queryKeys .= ", `".$this->personalKeysRel[$key] ."`";
                    $queryValues .= ", '".$value."'";
                } else {
                    $queryKeys .= "`".$this->personalKeysRel[$key] ."`";
                    $queryValues .= "'".$value."'"; 
                }
            }
        }
        $query = "INSERT INTO Datos_Personales (".$queryKeys.") VALUES (".$queryValues.")";
        $result = mysqli_query($this->db,$query);
        if(!$result){
            print_r($this->db->error);
        } else {
            $this->idPersonalData = mysqli_insert_id($this->db);
        }
    }

    private function insertFinancialData()
    {

        $queryKeys = '';
        $queryValues = '';
        foreach ($this->financialData as $key => $value) {
            if(isset($this->financialKeysRel[$key])){
                if ($queryKeys != ''){
                    $queryKeys .= ", `".$this->financialKeysRel[$key] ."`";
                    $queryValues .= ", '".$value."'";
                } else {
                    $queryKeys .= "`".$this->financialKeysRel[$key] ."`";
                    $queryValues .= "'".$value."'"; 
                }
            }
        }
        $query = "INSERT INTO Datos_Financieros (".$queryKeys.") VALUES (".$queryValues.")";
        $result = mysqli_query($this->db,$query);
        if(!$result){
            print_r($this->db->error);
        } else {
            $this->idFinancialData = mysqli_insert_id($this->db);
        }
    }

    public function registerUser(){
        $this->insertPersonalData();
        $this->insertFinancialData();
        if ($this->idFinancialData != '' && $this->idPersonalData != ''){
            $queryKeys = "`Datos_Financieros_idDatos_Financieros`,`Datos_Personales_idDatos_Personales`";
            $queryValues = "'".$this->idFinancialData."', '".$this->idPersonalData."'";
            if (isset($this->terms['Newsletters']) && !strcmp($this->terms['Newsletters'], 'on')){
                $queryKeys .= ", `newsletter`";
                $queryValues .= ", '1'";
            }
            foreach ($this->personalData as $key => $value) {
                if(isset($this->userKeysRel[$key])){
                    if ($queryKeys != ''){
                        $queryKeys .= ", `".$this->userKeysRel[$key] ."`";
                        $queryValues .= ", '".$value."'";
                    } else {
                        $queryKeys .= "`".$this->userKeysRel[$key] ."`";
                        $queryValues .= "'".$value."'"; 
                    }
                }
            }
            $query = "INSERT INTO Usuario (".$queryKeys.") VALUES (".$queryValues.")";
            $result = mysqli_query($this->db,$query);
            if(!$result){
                return Null;
            } else {
                return mysqli_insert_id($this->db);
            }
        }
    }
}