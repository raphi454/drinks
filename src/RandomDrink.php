<?php

namespace Raphi454\Drinks;

class RandomDrink
{
private array $drink = ['Wasser', 'Saft', 'Milch'];

public function getDrink(): string{
    return $this->drink[array_rand($this->drink)];
}
}