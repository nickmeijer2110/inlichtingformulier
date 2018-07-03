<?php

$a[] = "Amsterdam";
$a[] = "Amsterdam-Sloterdijk";
$a[] = "Rotterdam";
$a[] = "Zaandam";
$a[] = "Den Haag";
$a[] = "Utrecht";
$a[] = "Eindhoven";
$a[] = "Tilburg";
$a[] = "Groningen";
$a[] = "Breda";
$a[] = "Nijmegen";
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
                $hint = '<a onclick="javascript:suggestie(this.text);" href="#" id="'. $name .'" class="suggestie">'. $name . '</a>';
            } else {
                $hint .= ', <a onclick="javascript:suggestie(this.text);" href="#" id="'. $name .'" class="suggestie">'. $name .'</a>';
            }
        }
    }
}
echo $hint === "" ? "Geen suggestie!" : $hint;

?>
