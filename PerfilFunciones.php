/
<!--Esta es la pagina a la que redirige una vez iniciada la sesion
debemos de poner la funcion session_start para seguir trabajando con con
las variables de sesion -->
<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>PERFIL</h1>
    <!--Como ya se creo la variable de sesion usuario desde la clase Funciones.php
aqui solo accedemos al valor que tenga guardado -->
    <h3>Hola <?php echo $_SESSION['usuario']?></h3>
    <a href="#">Cerrar sesión.</a>
</body>

</html>