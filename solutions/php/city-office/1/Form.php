<?php
class Form 
{
    public function blanks (int $length): string{
        if ($length < 0){
            throw new \InvalidArgumentException ("La longitud debe ser >=0 ");
        }
        return str_repeat (' ', $length);
    }

    public function letters (string $word): array
    {
    return str_split($word);
    }
public function checkLength (string $word, int $max_length): bool
    {
        return strlent($word) <= $max_length;
    }
    public function formatAddress (Address $address): string
        {
            return "{$address->street}, {$address->postal_code}, {$address->city}";
        }
}
$form = new Form();
echo $form->formatAddress($add);
