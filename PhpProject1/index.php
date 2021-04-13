<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $teststringLazizbekAmrillaev = "Text na test";
$testarrayLazizbekAmrillaev = array("Tohle", "je","testovací", "text");
$teststring3LazizbekAmrillaev = "Text na test";
$teststring4LazizbekAmrillaev = "Text na test.Pisu tohle protoze,nevim co mam dalsiho napsat.";
$teststring5LazizbekAmrillaev = "text s VELKÝM TEXTEM";

echo (addslashes ("Sport 'Basket' bude ohraničenná lomítkama"));
echo "<br>";

echo chr(12);
echo "<br>";

print_r (explode(" " , $teststringLazizbekAmrillaev));
echo "<br>";

echo implode(" ", $testarrayLazizbekAmrillaev);
echo "<br>";

echo join(" ", $testarrayLazizbekAmrillaev);
echo "<br>";

echo md5($teststring3LazizbekAmrillaev);
echo "<br>";

echo hash("sha256", $teststring3LazizbekAmrillaev);
echo "<br>";

echo ord("t");
echo "<br>";

echo strchr($teststringLazizbekAmrillaev, $teststring3LazizbekAmrillaev);
echo "<br>";

echo strlen($teststring3LazizbekAmrillaev);
echo "<br>";

echo strpos($teststringLazizbekAmrillaev, $teststring3LazizbekAmrillaev);
echo "<br>";

echo strrchr($teststringLazizbekAmrillaev, $teststring3LazizbekAmrillaev);
echo "<br>";

echo strrev($teststringLazizbekAmrillaev);
echo "<br>";

echo strstr($teststringLazizbekAmrillaev, $teststring3LazizbekAmrillaev);
echo "<br>";

echo strtolower($teststring4LazizbekAmrillaev);
echo "<br>";

echo strtoupper($teststring4LazizbekAmrillaev);
echo "<br>";

echo substr_replace($teststringLazizbekAmrillaev, $teststring3LazizbekAmrillaev, 1);
echo "<br>";

echo substr($teststringLazizbekAmrillaev, 5);
echo "<br>";

echo ucfirst($teststring5LazizbekAmrillaev);
echo "<br";

echo ucwords($teststring5LazizbekAmrillaev);
echo "<br>";
        ?>
    </body>
</html>
