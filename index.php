<?php
include 'CalculatePatas.php';
include 'SalidaJson.php';

$animals = [
    'Gato' => 4,
    'Perro' => 4,
    'Pato' => 2,
    'Oveja' => 4,
    'Herido de guerra xd' => 1,
];

$patas = new CalculatePatas($animals);
$patas->sum();

echo $patas->print();
echo '<br>';
echo SalidaJson::generarJson($animals); 

?>
