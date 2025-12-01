# Drinks

Die Klasse `RandomDrink` verfügt über eine Methode names `GetDrink`, welche ein zufälliges Getränk zurückliefert.

# Verwendung
```php
<?php
//composer hinzufügen
require 'vendor/autoload.php'

// Objekt erstellen
$drinkMachine = new \Raphi454\Drinks\RandomDrink();

//Aufruf der Methode
$drink = $drinkMachine->getDrink();

echo '<p>Sie trinken: ' . $drink . '</php>';
```