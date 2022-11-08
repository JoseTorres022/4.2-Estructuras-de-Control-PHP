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