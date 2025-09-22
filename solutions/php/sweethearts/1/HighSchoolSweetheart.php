<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $trimmedname = trim($name);
        return $trimmedname[0];
    }

    public function initial(string $name): string
    {
        $letter = $this->firstLetter($name);
        return strtoupper($letter) . '.';
    }

    public function initials(string $name): string
    {
        $letras = explode(' ', trim($name));
        if (count($letras) < 2) { 
            throw new \BadFunctionCallException("El nombre debe tener al menos nombre y apellido.");
        }
        return $this->initial($letras[0]) . ' ' . $this->initial($letras[1]);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $initials_a = $this->initials($sweetheart_a);
        $initials_b = $this->initials($sweetheart_b);
        $love_line = "**     $initials_a  +  $initials_b     **";

        return <<<HEART
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
$love_line
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
HEART;
    }
}

// Pruebas
$sweetheart = new HighSchoolSweetheart();

echo $sweetheart->firstLetter("jannet") . "<br>";
echo $sweetheart->initial("jannet") . "<br>";
echo $sweetheart->initials("Jane Doe") . "<br><br>";

// Mostrar corazón con saltos de línea visibles en HTML
echo nl2br($sweetheart->pair("Blake Miller", "Riley Lewis"));

