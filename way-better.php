<?php
//TODO: check variables for clean name
//TODO: use camelCase for variables
//TODO: rewrite function names camelCase;
<?php

// fw = for who
function orderPizza($pizzaType, $forWho)
{
$type = $pizzaType;
echo 'Creating new order... <br>';
$toPrint = 'A ';
 $toPrint .= $pizzaType;
$price = calc_cts($type);

    $address = 'unknown';
    if($forWho == 'koen')
    {
        $address = 'a yacht in Antwerp';
    } elseif ($forWho == 'manuele')
    {
        $address = 'somewhere in Belgium';
    } elseif ($forWho == 'students') {
        $address = 'BeCode office';
    }

    $toPrint .=   ' pizza should be sent to ' . $forWho . ". <br>The address: {$address}.";
        echo $toPrint; echo '<br>';
        echo'The bill is €'.$price.'.<br>';
        echo "Order finished.<br><br>";
    }

    function total_price($price) {
            return $price;
    }

        function test($p_type) {
            echo "Test: type is {$p_type}. <br>";
        }

function calc_cts($p_type)
{
    $cost = 'unknown';

    if ($p_type == 'marguerita') {
        $cost = 5;
    }
    else
        {
        if ($p_type == 'golden')
        {
            $cost = 100;
        }

            if ($p_type == 'calzone')
            {
                $cost = 10;
            }

        if ($p_type == 'hawaii') {
            throw new Exception('Computer says no');
        }
    }

    return $cost;
}

function orderPizzaForAll()
{
    $test= 0;
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

function makeAllHappy($do_it) {
if ($do_it) {
        orderPizzaForAll();
    } else {
        // Should not do anything when false
    }
}

makeAllHappy(true);