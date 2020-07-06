<?php
   $array = [

    'keyStr1' => 'lado',
    0 => 'ledo',

    'keyStr2' => 'lido',
    1 => 'lodo',
    2 => 'ludo'

];

$countries = [
    'Venezuela' => ['Caracas', 'Portuguesa', 'Guanare'],
    'Trinidad y Tobago' => ['Puerto España', 'Diego Martin', 'Chaguanas'],
    'Colombia' => ['Bogotá','Medellín','Cali'],
    'Cuba' => ['Habana','Santiago de Cuba','Santa Clara'],
    'Argentina' => ['Buenos Aires','Santa Fe','La Plata']
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01</title>
</head>
<body>


<br>
<?php 
echo $array['keyStr1'] . ', ' . $array[0] . ', ' . $array['keyStr2'] . ', ' . $array[1] . ', ' . $array[2] . ',';

?>
<br>
<?php 
echo $array[2] . ', ' . $array[1] . ', ' . $array['keyStr2'] . ', ' . $array[0] . ', ' . $array['keyStr2'] . ',';

?>
<br>
<?php
foreach ($countries as $country => $cities) {
    echo'<b>'.$country.'</b>:<br>';
    echo'<ul>';
        foreach ($cities as $city){
            print'<li>'.$city.'</li>';
        }
    echo'</ul>';
}
?>


    
</body>
</html>