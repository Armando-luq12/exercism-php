<?php

class PizzaPi
{
    public function calculateDoughRequirement(int $pizzas, int $persons_per_pizza)
    {
return $pizzas * (200 + ($persons_per_pizza * 20));
    }

    public function calculateSauceRequirement()
    {
        
        $porcion = 125;
        $pizzas = 8;
        $latas = 250;
        
        $cantidad = $porcion * $pizzas;
        $total = $cantidad / $latas;

        return $total;

      
    }

    public function calculateCheeseCubeCoverage()
    {
        $chese_dimension = 25;
        $pi = pi();
        $diameter = 30;
        $thickness = 0.5;
        $chese_volumen = pow($chese_dimension, 3);

        $chese_total = $pi * $diameter * $thickness;
        $queso = $chese_volumen / $chese_total;

        $total = floor($queso);

        return $total;
        
    }

    public function calculateLeftOverSlices($friends, $pizzas)
    {
        $porciones = 8;

        $p2 = $porciones * $friends;
        $total = $p2 % $pizzas;

        return $total;

        $p4 = $porciones * $friends;
        $resultado = $p4 % $pizzas;

        return $resultado;


    }
}
$pizza_pi = new PizzaPi;


echo "<br>";
echo $pizza_pi->calculateSauceRequirement();
echo "<br>";
echo $pizza_pi->calculateCheeseCubeCoverage();
echo "<br>";
echo $pizza_pi->calculateLeftOverSlices(3, 4);
echo "<br>";
echo $pizza_pi->calculateLeftOverSlices(4, 3);
