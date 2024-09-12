<?php
include 'CalculatePatas.php';

$animals = [
    'Gato' => 4,
    'Perro' => 4,
    'Pájaro' => 2,
    'oveja' => 4,
    'Herido de guerra xd' => 1,
    
];

$patas = new CalculatePatas($animals);

$patas -> sum();
echo $patas -> print();

?>