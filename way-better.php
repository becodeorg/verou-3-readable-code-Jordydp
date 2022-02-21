<?php
//TODO: check variables for clean name
//TODO: use camelCase for variables
//TODO: rewrite function names camelCase;
//TODO: comment un necessary code 



function orderPizza($pizzaType, $forWho)
{
    echo 'Creating new order... <br>';
    $toPrint .= 'A ' . $pizzaType;
    $price = calc_cts($pizzaType);

    if($forWho == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($forWho == 'manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($forWho == 'students') {
        $address = 'BeCode office';
    }

    $toPrint .=   ' pizza should be sent to ' . $forWho . ". <br>The address: {$address}.";
        echo $toPrint; echo '<br>';
        echo'The bill is €'.$price.'.<br>';
        echo "Order finished.<br><br>";
}

function calc_cts($pizzaType)
{
    if ($pizzaType == 'marguerita') {
        $cost = 5;
    }
    elseif ($pizzaType == 'golden') {
        $cost = 100;
    } elseif ($pizzaType == 'calzone') {
        $cost = 10;
    } elseif ($pizzaType == 'hawaii') {
        throw new Exception('Computer says no');
    }
    return $cost;
}

function orderPizzaForAll()
{
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

orderPizzaForAll();