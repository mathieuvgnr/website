<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'mathieuvagnerre24@gmail.com';
$subject = 'Nouveau message de votre portfolio';
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "Le message a été envoyé avec succès.";
} else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
}
?>
