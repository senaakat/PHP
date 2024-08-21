<?php

function yaz($sayi1, $sayi2)
{

    echo "function is started corrretly";
    echo "<br>";
    return $sayi1 + $sayi2;
}
echo yaz(5454, 4545);

$all_php_function = get_defined_functions();
echo "<pre>";
print_r($all_php_function);
echo "</pre>";
?>