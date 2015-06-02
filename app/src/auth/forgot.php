<?php
// Pear Mail Library
require_once VENDOR_DIR.'/swiftmailer/autoload.php';

if (isset($_POST) && count($_POST)>0 && !isset($_SESSION['PHPSESSID']) && !isset($_SESSION['USER_ID'])){
    
    require_once PROJECT_DIR.'/db_connection.php';
    $query = "SELECT contrasenia, email FROM Usuario WHERE `Nombre_usuario`='".$_POST["user"]."' OR `email`='".$_POST["user"]."'";
    $result = mysqli_query($conn,$query);
    $conn->close();
    if(!$result || $result->num_rows == 0){
        $smarty->assign('noUserError','true');
    } else {
        while ($row=mysqli_fetch_assoc($result)){
            $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
               ->setUsername('practicasoftware2@gmail.com')
               ->setPassword('practicais2');

            $mailer = Swift_Mailer::newInstance($transport);
            $enlace = "<p>Dirijase a <a href='http://localhost:8888/tracker.php/login'>http://localhost:8888/tracker.php/login</a></p>";
            $message = Swift_Message::newInstance('Recuperación contraseña')
                ->setFrom(array('SSFTSupport@noreply.com' => 'SSFT Support'))
                ->setTo(array($row['email']))
                ->setBody("<p>Su contraseña es: ".$row['contrasenia']."</p>".$enlace, 'text/html');
            try {
                $mail = $mailer->send($message);
                $smarty->assign('mailSended',$row['email']);
            } catch (Swift_RfcComplianceException $e) {
                $smarty->assign('failEmailError','true');
            } catch (Swift_TransportException $e){
                $smarty->assign('failError','true');
            }
                    
        }
    }
    $smarty->display('forgot.tpl');

// $result = $mailer->send($message);
} else if (isset($_SESSION['PHPSESSID']) && isset($_SESSION['USER_ID'])){
    header("Location: http://localhost:8888/tracker.php");
    die();
} else{
    $smarty->display('forgot.tpl');
}


// $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
//   ->setUsername('h.ambit.h@gmail.com')
//   ->setPassword('*zxc*JKL*qwe890?');

// $mailer = Swift_Mailer::newInstance($transport);

// $message = Swift_Message::newInstance('Test')
//   ->setFrom(array('h.ambit.h@gmail.com' => 'Héctor Ambit'))
//   ->setTo(array('beitab90@gmail.com'))
//   ->setBody('Hola Cosita');


// $result = $mailer->send($message);