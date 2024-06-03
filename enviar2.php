<?
$maivic = $_POST['maivic']; //

$asunto = $_POST['asunto']; //

$from = $_POST['nomfal']; //

$mai = $_POST['maifal']; //

$msg = $_POST['falsmsg']; //

echo "Enviado a: ";
echo "$maivic";


//para el envio en formato HTML

$headers = "MIME-Version: 1.0\r\n";

$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

$headers .= "From: $from <$mai>";

mail($maivic, $asunto, $msg, $headers);

echo "<br><h1><center>Creado por >>Mr T.<< <h1>";

echo "<script>alert('Envio correcto!!!.');</script>";


?>

