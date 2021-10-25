# EJERCICIOS DE BUCLE FOR Y FUNCIONES EN PHP

* * *

``` <pre><code> <?php
/*
# $counter++    es igual a     $counter=$counter+1

#BUCLE FOR (contamos de dos en dos):
for ($counter=0; $counter < 10; $counter=$counter+2)
{
        echo $counter;
}
*/

/*
#FUNCIONES:
function suma ($num1,$num2,)  
{
    return $num1 +$num2;
}
echo suma (1,2);
*/

#FUNCION QUE CONCATENE DOS CADENAS: (DOS TEXTOS QUE LOS UNES)

function concatenar ($texto1,$texto2)
{
 return $texto1 . $texto2;
}
echo concatenar ("Hola"," que tal");

?>
``` </pre></code>

``` <pre><code> <?php

#SCOPE:
$a = 3;

function foo(){
    global $a;    #usando global te dice que coja la variable de arriba, pero no lo recomienda mejor meterlo en una variable.
    $a += 2;      #$a =$a +2;
    echo "valor dentro de la funcion".$a;
}

foo();
echo "<br>";
echo "valor fuera de la funcion".$a;

?>
