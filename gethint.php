<?php

$a[] = "Amsterdam";
$a[] = "Rotterdam";
$a[] = "Zaandam";
$a[] = "Den Haag";
$a[] = "Utrecht";
$a[] = "Eindhoven";
$a[] = "Tilburg";
$a[] = "Groningen";
$a[] = "Almere";
$a[] = "Breda";
$a[] = "Nijmegen";
$a[] = "Apeldoorn";
$a[] = "Haarlem";
$a[] = "Amersfoort";
$a[] = "Enschede";
$a[] = "Den Bosch";
$a[] = "Haarlemmermeer";
$a[] = "Haarlem";
$a[] = "Zwolle";
$a[] = "Zoetermeer";
$a[] = "Leiden";
$a[] = "Schagen";
$a[] = "Heerhugowaard";
$a[] = "Anna Pauwlona";
$a[] = "Den Helder";
$a[] = "Castricum";
$a[] = "Alkmaar";

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}
echo $hint === "" ? "Geen suggestie!" : $hint;
?>
