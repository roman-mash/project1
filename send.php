<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['phone'];

//$mail->SMTPDebug = 3;      

$mail->isSMTP();                                      
$mail->Host = 'smtp.yandex.ru';  																						
$mail->SMTPAuth = true;                               
$mail->Username = 'rmyu9765gh@yandex.ru'; 
$mail->Password = 'a1b2c3h5'; 
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465; 

$mail->setFrom('rmyu9765gh@yandex.ru', 'Администратор сайта'); 
$mail->addAddress('roman-mashin@yandex.ru');     
$mail->isHTML(true); 


$mail->Subject = 'Сообщение с сайта';
$mail->Body    = "
<h2>Новое письмо</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br>";
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thankyou.html');
}
?>