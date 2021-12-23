<?php

// Cia rasysim failo kurimo koda

//require 'libs/skaitytiHTML.php';

$spausdinti = fopen('duomenys.html', 'r');
$kiek = filesize('duomenys.html');

$text = fread($spausdinti, $kiek);
$textRodyti = preg_replace("/pasauli/", ", Egle", $text);

echo $textRodyti;

//echo fread($spausdinti, $kiek);

fclose($spausdinti);