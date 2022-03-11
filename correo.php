<?php 
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "libs/PHPMailer-master/src/Exception.php";
    require "libs/PHPMailer-master/src/PHPMailer.php";
    require "libs/PHPMailer-master/src/SMTP.php";




    if ($asunto == "Otro") {
        $asunto = $_POST["otroAsunto"];
    }

    $mensajeDos = $nombre . "<br>" . $telefono . "<br>" . $email . "<br>" . $mensaje;
    $mail = new PHPMailer(true);      

    try {
        $mail->SMTPDebug = 2;                              
        $mail->isSMTP();                               
        $mail->Host = "smtp.gmail.com"; 
        $mail->SMTPAuth = true;                            
        $mail->Username = "aljorc16@gmail.com";              
        $mail->Password = "xioplvjfizlynouy";                  
        $mail->SMTPSecure = "tls";                        
        $mail->Port = 587;                                  
    
        $mail->setFrom("aljorc16@gmail.com", "Automotriz IBM");
        $mail->addAddress("marcoezv88@gmail.com", "Cotizacion IBM");     
        $mail->addAddress("aljorc16@gmail.com", "Cotizacion IBM");  
    
        $mail->isHTML(true);                
        $mail->Subject = $asunto;
        $mail->Body = $mensajeDos;
    
        $mail->send();

        echo'<script type="text/javascript">
        window.location.href="contacto.php";
    alert("Correo enviado correctamente");
    
    </script>';
        
    } catch (Exception $e) {
        echo'<script type="text/javascript">
    window.location.href="contacto.php";
    alert("Error al enviar el correo");
    </script>';
    }
?>