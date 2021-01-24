<?php
$n = 10;
for ($i = 1; $i <= $n; $i++) { //цикл с параметром for
    echo $i;
    echo "<br\n>";
}
?>
<?php
echo "<br>\n"; //цикл с предусловием
$n = 10;
$i = 1;
while ($i <= $n) {
    echo $i;
    echo "<br>\n";
    $i = $i + 1;
}
?>
<?php
echo "<br>\n"; //цикл с постусловием
$n = 10;
$i = 1;
do {
    echo $i;
    echo "<br>\n";
    $i = $i + 1;
} while ($i <= $n);
