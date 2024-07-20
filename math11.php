<?php
$a = 10;
$b = 5;
$sum  = $a + $b;
echo "SUMA: $a + $b = $sum\n";
$difference = $a + $b;
echo "RIZNYCA: $a - $b = $difference\n";
$product = $a * $b;
echo "PRODUCT: $a * $b = $product\n";
if ($b != 0)
{
    $quotient = $a / $b;
    echo "QUO: $a / $b = $quotient\n";
}
else
{
    echo "QUO: division by zero is not possible\n";
}
if ($b != 0)
{
    $remainder = $a % $b;
    echo "REMAINDER: $a % $b = $remainder\n";
}
else
{
    echo "REMAINDER of division: division by zero is impossible\n";
}