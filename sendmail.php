<?php

$mail = 'contacto@candybrain.com.mx';
$name = $_POST['name'];
$user_mail = $_POST['email'];
$msg = $_POST['msg'];
$headers = 'From:'.$user_mail  . "\r\n" .
    'Reply-To: '.$user_mail . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
if(mail($mail, 'WebContactForm', $msg, $headers)){
    echo 'Gracias, nos pondremos en contacto lo más pronto posible.';
}
else {
    echo 'Something goes wrong, message wasn\'t send!';
}

?>