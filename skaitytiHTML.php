<?php

$htmlPusl = '
<html>
<head>
<title>Mano puslapis</title>
</head>
<body>
<h1>Labas pasauli!</h1>
</body>
</html>';

// cia skaitysim failo turini ir ji spausdinsim

$manoFailas = fopen('duomenys.html', 'x+');

$manoFailas = fopen('duomenys.html', 'x+');
fwrite($manoFailas, $htmlPusl);