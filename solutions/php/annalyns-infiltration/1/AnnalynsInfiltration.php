<?php

class AnnalynsInfiltration
{
    // 1. Ataque rápido posible si el caballero está dormido
    public function canFastAttack(bool $is_knight_awake): bool
    {
        return !$is_knight_awake;
    }

    // 2. Espiar es posible si al menos uno de los tres personajes está despierto
    public function canSpy(bool $is_knight_awake, bool $is_archer_awake, bool $is_prisoner_awake): bool
    {
        return $is_knight_awake || $is_archer_awake || $is_prisoner_awake;
    }

    // 3. Señal al prisionero solo si arquero está dormido y el prisionero está despierto
    public function canSignal(bool $is_archer_awake, bool $is_prisoner_awake): bool
    {
        return !$is_archer_awake && $is_prisoner_awake;
    }


    public function canLiberate(bool $is_knight_awake, bool $is_archer_awake, bool $is_prisoner_awake, bool $is_dog_present): bool
    {
        if ($is_dog_present) {
            return !$is_archer_awake;
        }

        return !$is_knight_awake && !$is_archer_awake && $is_prisoner_awake;
    }
}