<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="?" method="post">
    <input type="text" name="pol">
    <input type="submit" value="ok">
</form>
</body>
</html>
<?php

include "../vendor/autoload.php";

use Classes\Palindrom;


if (isset($_POST['pol'])  != "") {
    $palindrom = new Palindrom();
    echo $palindrom->setStr($_POST['pol'])->checkPolindrom();

}
?>
