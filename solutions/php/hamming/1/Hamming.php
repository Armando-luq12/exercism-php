<?php
declare(strict_types=1);

function distance(string $strandA, string $strandB): int
{
    if (strlen($strandA) !== strlen($strandB)) {
        throw new \InvalidArgumentException("strands must be of equal length");
    }

    $count = 0;
    $a = strlen($strandA);

    for ($i = 0; $i < $a; $i++) {
        if ($strandA[$i] !== $strandB[$i]) {
            $count++;
        }
    }

    return $count;
}
