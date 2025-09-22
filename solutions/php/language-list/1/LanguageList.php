<?php

function language_list(...$idiomas)
{
    return $idiomas;
}

function add_to_language_list($lista, $nuevo_idioma)
{
     $lista[] = $nuevo_idioma;
     return $lista;
     
}

function prune_language_list( $quitar_idioma){
    array_shift($quitar_idioma);
    return $quitar_idioma;
    
}

function current_language($lista_seis)
{
    ;
    return $lista_seis[0];
}

function language_list_length($lista)
{
    
    return count($lista);

}
print_r(language_list());
echo "<br>";
$lista_uno = language_list("Clojure", "PHP");
print_r($lista_uno);
echo "<br>";
$lista_dos = language_list("PHP", "Haskell", "Java", "C++", "Rust");
print_r($lista_dos);

echo "<br>";
$lista_tres = add_to_language_list($lista_dos, "clojure");
print_r($lista_tres);

$lista_cuatro = language_list("PHP");
$lista_cinco = prune_language_list($lista_cuatro);
echo "<br>";
print_r($lista_cinco);
echo "<br>";

$lista_seis = language_list("PHP", "Prolog");
$lista_siete = current_language($lista_seis);
print_r($lista_siete);
echo "<br>";

$lista_ocho = language_list("PHP", "Prolog", "Wren");
echo "cantidad de idiomas : " . language_list_length($lista_ocho);