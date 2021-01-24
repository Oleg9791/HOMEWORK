<?php
$fib = $_POST["num"];

echo ($a = 0) . "<br>" . ($b = 1) . "<br>";
for ($i = 0; $i < $fib; $i++) {
    $c = $a + $b;
    echo $c . "<br>";
    $a = $b;
    $b = $c;
}
echo "<br\n>";


echo ($a = 0) . "<br>" . ($b = 1) . "<br>";
$i = 0;
while ($i < $fib) {
    $c = $a + $b;
    echo $c . "<br>";
    $a = $b;
    $b = $c;
    $i++;
}
echo "<br\n>";
echo ($a = 0) . "<br>" . ($b = 1) . "<br>";
$i = 0;

do {
    $c = $a + $b;
    echo $c . "<br>";
    $a = $b;
    $b = $c;
    $i++;
} while ($i < $fib);
