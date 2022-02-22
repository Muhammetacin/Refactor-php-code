<?php

function orderPizza($pizzaType, $client)
{
    echo '<strong>Creating new order...</strong><br><br>';

    $pizzaPrice = calculateCost($pizzaType);
    $clientAddress = 'No valid client address.';

    if ($client === 'koen') {
        $clientAddress = 'a yacht in Antwerp';
    } else if ($client === 'manuele') {
        $clientAddress = 'somewhere in Belgium';
    } else if ($client === 'students') {
        $clientAddress = 'BeCode office';
    }

    $printAddress = 'The address is: ' . $clientAddress . '.';
    $printPrice = 'The bill is €' . $pizzaPrice . '.';

    $printOrder = 'A ' . $pizzaType . ' pizza should be sent to ' . $client . '.<br>'
        . $printAddress . '<br>'
        . $printPrice . '<br>';

    echo $printOrder;
    echo '<i>Order finished.</i><br><br>';
}

function calculateCost($pizzaType)
{
    switch ($pizzaType) {
        case 'marguerita':
            return 5;
        case 'golden':
            return 100;
        case 'calzone':
            return 10;
        case 'hawaii':
            throw new Exception('Computer says no');
    }
}

function orderPizzaForAll()
{
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

orderPizzaForAll();