```php
<?php
class    CalculatePatas {
private $sum;
private $animals;
public function    __construct($animals = [])
{
$this->animals = $animals;
$this->sum = 0;
}
public function    sum()
{
$this->sum = array_sum($this->animals);
}
public function    print()
{
return "Calculo ejecutado \n\n Los animales suman {$this->sum} patas."; }
}
?>
```
¿Cuántas cosas crees que hace esta clase?
 - devuelve la suma de patas de animales de un array 
 - devuelve una funcion que imprime los resultados de la funcion suma
  
¿Cómo cambiamos la calculadora para que además de dar como salida el total de patas, también tenga la posibilidad de dar el total de patas en formato json?