<?php
//print_r($_POST);

// подключаем файл содержащий описание класса Calc
include_once "calculator.php";
// создаем экземпляр класса Calc, и передаем в его конструктор числа а и в полученные из HTML формы
$calc = new Calc($_POST["a"]);
// у объекта $Calc вызываем метод(функцию), название которого получаем в поле "op" HTML формы({$_POST["op"]})
// и выводим результат на экран
echo $calc->{$_POST["op"]}();
