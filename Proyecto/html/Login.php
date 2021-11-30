<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Iniciar Sesión</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="../css/estilos.css">
	
</head> 

<body>
    <br>
   &nbsp;&nbsp; <a href="Pagina principal.php" class="boton-back"></a>
    <form action="conexion.php" class="formulario">
    
    <h1>Iniciar sesión</h1>
     <div class="contenedor">
     
     
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Correo Electronico" id="user" name="user">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña" id="pass" name="pass">
         
         </div>
         <a><input type="submit" value="iniciar sesión" class="button" id=btn></a>
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <a class="link" href="Registro.php">Registrate </a></p>
     </div>
    </form>
</body>
</html>