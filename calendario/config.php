<?php
// $usuario  = "root";
// $password = "4703";
// $servidor = "192.168.1.44";
// $basededatos = "crm";
// se cambi la dbcalendario por un crm
// $con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
// $db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");
?>

<?php
$usuario  = "root";
$password = "";
$servidor = "192.168.1.31";
$basededatos = "crm";

// Establecer la conexión con la base de datos
$con = mysqli_connect($servidor, $usuario, $password, $basededatos);

// Verificar si la conexión fue exitosa
if (!$con) {
    echo "Error en la conexión: ". mysqli_connect_error();
} else {
    echo "Felicitaciones, la conexión fue exitosa!";
}

// Cerrar la conexión cuando ya no se necesite
mysqli_close($con);
?>
