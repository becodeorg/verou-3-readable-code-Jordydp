<?php

function orderPizza($pizzaType, $forWho)
{
    $toPrint .= 'A ' . $pizzaType;
    $price = getPrice($pizzaType);
    $address = getAddress($forWho);

    echo 'Creating new order... <br> pizza should be sent to ' . $forWho . '. <br>The address: '. $address
    . '.' . '<br>' . 'The bill is €' . $price . '.<br>' . 'Order finished.<br><br>';
}

function getAddress($forWho) 
{
    if($forWho == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($forWho == 'manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($forWho == 'students') {
        $address = 'BeCode office';
    }
    return $address;
}

function getPrice($pizzaType)
{
    if ($pizzaType == 'marguerita') {
        $cost = 5;
    } elseif ($pizzaType == 'golden') {
        $cost = 100;
    } elseif ($pizzaType == 'calzone') {
        $cost = 10;
    } elseif ($pizzaType == 'hawaii') {
        throw new Exception('Computer says no');
    }
    return $cost;
}

orderPizza('calzone', 'koen');
orderPizza('marguerita', 'manuele');
orderPizza('golden', 'students');
