<?php
//$link = 'mysql:host=localhost;dbname=PROYECTO';
//$usuario = 'root';
//$pass = 'password';

//try{
    //$pdo = new PDO($link,$usuario,$pass);
    //echo 'Conectado <br>';
//}catch(PDOException $e){
    //print "Error!!: " . $e->getMessage() . "<br/>";
    //die();
//}

$username = $_POST['user'];
$password = $_POST['pass'];

//prevent mysql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//conexion al servidor y seleccion de bd
mysql_connect("localhost", "root", "password");
mysql_select_db("PROYECTO");

//Query a la base de datos
$result = mysql_query("select* from USUARIO where usuario ='$username' and contraseña = '$password'")
		or die("Fallo la consulta en la base de datos".mysql_error());
$row = mysql_fetch_array($result);
if ($row['usuario'] == $username && $row['contraseña'] == $password){
	echo"Logeado correctamente Bienvenido!! ".$row['usuario'];
} else {
	echo "Fallo el acceso";
}
?>

