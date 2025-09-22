<?php

class Lasagna
{
    // 1. Tiempo de cocción esperado
    public function expectedCookTime()
    {
        return 40;
    }

    // 2. Tiempo restante de horno
    public function remainingCookTime($actualMinutes)
    {
        return $this->expectedCookTime() - $actualMinutes;
    }

    // 3. Tiempo de preparación
    public function totalPreparationTime($layers)
    {
        return $layers * 2;
    }

    // 4. Tiempo total transcurrido
    public function totalElapsedTime($layers, $minutesInOven)
    {
        return $this->totalPreparationTime($layers) + $minutesInOven;
    }

    // 5. Alarma
    public function alarm()
    {
        return "Ding!";
    }
}