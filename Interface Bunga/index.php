<?php

include_once "Sakura.php";
include_once "Mawar.php";

$bunga1 = new Sakura();
$bunga1->namaBunga();
echo "<br>";
$bunga1->warnaBunga();
echo "<br>";
$bunga1->tempatAsal();
echo "<br><br>";

$bunga2 = new Mawar();
$bunga2->namaBunga();
echo "<br>";
$bunga2->warnaBunga();
echo "<br>";
$bunga2->tempatAsal();