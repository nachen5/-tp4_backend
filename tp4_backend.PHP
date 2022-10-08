<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Ejercicio 1</h1>
    <h2>Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro</h2>
    <?php
    
    $numeros=["2","4","6","8","10","12","14","16","18","20"];
    print "<pre>\n";
    print_r($numeros);
    print"</pre>\n";
    ?>

<h1>Ejercicio 2</h1>
    <h2>Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r </h2>
    <?php
    $valores=["Pedro","Ana","34","1"];
    print "<pre>\n";
    print_r($valores);
    print"</pre>\n";
    ?>
    

    <h1>Ejercicio 3</h1>
    <h2>Crear un array asociativo e introducir los siguientes valores. </h2> <br>
       <p> Nombre: Pedro <br>
        Apellido: Torres <br>
        Dirección: Av.Mayor 3703 <br>
        Teléfono: 1122334455 </p>
        <?php
        $datos=[
         'nombre'=>"Pedro",
         'apellido'=>"Torres",
         'direccion'=>"Av.Mayor3703",
         'telefono'=>"1122334455",

        ];
        
        ?>

<h1>Ejercicio 4</h1>
    <h2>Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array. </h2>

<?php
$ciudades=["Madrid","Barcelona","Londres","New York","Los Angeles","Chicago"];
print "La ciudad con el índice 0 tiene el nombre $ciudades[0]";
print "<br>";
print "La ciudad con el índice 1 tiene el nombre $ciudades[1]";
print "<br>";
print "La ciudad con el índice 2 tiene el nombre $ciudades[2]";
print "<br>";
print "La ciudad con el índice 3 tiene el nombre $ciudades[3]";
print "<br>";
print "La ciudad con el índice 4 tiene el nombre $ciudades[4]";
print "<br>";
print "La ciudad con el índice 5 tiene el nombre $ciudades[5]";
print "<br>";
?>

<h1>Ejercicio 5</h1>
    <h2>Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.</h2>

<?php

$ciudades=[
'MD'=>"Madrid",
'BCL'=>"Barcelona",
'LD'=>"Londres",
'NY'=>"New York",
'LA'=>"Los Angeles",
'CCG'=>"Chicago",
];
print "El índice de $ciudades[MD] es MD";
print "<br>";
print "El índice de $ciudades[BCL] es BCL";
print "<br>";
print "El índice de $ciudades[LD] es LD";
print "<br>";
print "El índice de $ciudades[NY] es NY";
print "<br>";
print "El índice de $ciudades[LA] es LA";
print "<br>";
print "El índice de $ciudades[CCG] es CCG";
print "<br>";
?>
  </body>
</html>