<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $cognoms = $_POST["cognoms"];
    $telefon = $_POST["telefon"];
    $email = $_POST["email"];
    $ordinadors = $_POST["ordinadors"];
    $connexio = $_POST["connexio"];
    $sales = $_POST["sales"];

    $destinatari = "iverdejoh2324@politecnics.barcelona";
    $asunto = "Nou missatge de formulari";
    $mail -> Host = 'live.smtp.mailtrap.io';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'api';
    $mail -> Password = 'fd31aafc2bc3448a01da61d35d4cee53';
    $mail -> SMTPSecure = 'tls';
    $mail -> Port = 587;
    $mensaje = "Nom: $nom\n";
    $mensaje .= "Cognoms: $cognoms\n";
    $mensaje .= "Telèfon: $telefon\n";
    $mensaje .= "Correu electrònic: $email\n";
    $mensaje .= "Número d'ordinadors: $ordinadors\n";
    $mensaje .= "Tipus de connexió: $connexio\n";
    $mensaje .= "Número de sales: $sales\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($destinatari, $asunto, $mensaje, $headers)) {
        echo "Missatge enviat correctament.";
    } else {
        echo "Error en l'enviament del missatge.";
    }
}
?>
