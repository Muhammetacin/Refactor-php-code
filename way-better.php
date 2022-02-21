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
    $costPrice = 0;

    if ($pizzaType === 'marguerita') {
        $costPrice = 5;
    } else if ($pizzaType === 'golden') {
        $costPrice = 100;
    } else if ($pizzaType === 'calzone') {
        $costPrice = 10;
    } else if ($pizzaType === 'hawaii') {
        throw new Exception('There is no pizza type \'Hawaii\'.');
    }

    return $costPrice;
}

function orderPizzaForAll()
{
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

function makeEveryoneHappy($orderPizzaForClass)
{
    if ($orderPizzaForClass) {
        orderPizzaForAll();
        return true;
    }
    return false;
}

makeEveryoneHappy(true);