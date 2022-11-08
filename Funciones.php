<?php
//Creamos las variables que vienes desde el POST
$enteroA=$_POST['enteroA'];
$enteroB=$_POST['enteroB'];

//Creamos la función para calcular el MCD
function MCD($enteroA,$enteroB,$operacion){
    $resultado=0;
    if($operacion=="mcd"){
        while($enteroB!==0){
            $resultado=$enteroB;
            $enteroB=$enteroA % $enteroB;
            $enteroA=$resultado;
        }
        // return $resultado;
    }
    return $resultado;

}
//Mandamos a llamar a a función 'MCD'
$verResultado=MCD($enteroA,$enteroB,"mcd");
echo $verResultado."<br>";



// function imprimirParametro($parametro)
// {
    
//     return $parametro;
// }

// echo imprimirParametro("Hola, soy un parametro");

// function analizarCadenas($enteroA, $penteroB){
//     //Revisando si existe un arroba
//    $varUno = true;
//    $varDos = true;
//     if(!strpos($email, "@")){
//         echo "<br>No se ha encontrado un arroba";
//         $varUno = false;
//     }
//     //Revisando longitud de la contrasena
//     if (strlen($password) <6){
//         echo "<br>La constrasena tiene muy pocos caracteres";
//         $varDos = false;
//     }  
    //si esta bien, entonces aqui hacemos la consulta a la base de datos para traer la informacion
    //del registro y obtener los datos que queremos mostrar (el nombre de usuario)
    //la variable de sesion se crea y debe tomar el valor de lo obtenido de la bd
    //En este caso, estamos dandole el valor directo.
    // if($varUno || $varDos){
    //     echo "<br>Datos obtenidos con éxito...";
    //     session_start();
    //     $_SESSION["usuario"] = "Tania Ruiz";
    //     header('Refresh:5; PerfilFunciones.php');
    // }  
    
// }
// if(isset($_POST['email']) && isset($_POST['password'])){
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     analizarCadenas($email, $password);
// }
?>