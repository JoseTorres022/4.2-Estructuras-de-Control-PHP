<?php
//Creamos las variables que vienen desde el POST
$enteroA = $_POST['enteroA'];
$enteroB = $_POST['enteroB'];

//Creamos la función para calcular el MCD
function MCD($enteroA, $enteroB)
{
    try {
        $resultado = 0;
        while ($enteroB !== 0) {
            $resultado = $enteroB;
            $enteroB = $enteroA % $enteroB;
            $enteroA = $resultado;
        }
        return $resultado;
    } catch (Exception $e) {
        echo 'Uppss, hay un error:', $e->getMessage(), "\n";
    }
}
//Mandamos a llamar a a función 'MCD'
$verResultado = MCD($enteroA, $enteroB);
echo "</br> &nbsp; Maximo Comun Divisor";
echo "</br> &nbsp; Datos recibidos correctamente";
echo "</br> &nbsp; Entero A: " . $enteroA;
echo "</br> &nbsp; Entero B: " . $enteroB;
echo "</br> &nbsp; El MCD de " . $enteroA . " y " . $enteroB . " es: " . $verResultado;

//creamos un Ancla (Anchor <a>) para redigigirnos a la pagina principal
echo "</br>";
echo '</br><a href="index.html">Regresar a la pagina principal</a>';
