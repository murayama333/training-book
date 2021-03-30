<?php
$ages = [24, 21, 24, 18, 28, 32, 24, 25, 29];

$total = 0;
for ($i=0; $i < count($ages); $i++) { 
    $total += $ages[$i];
}
echo $total;