<?php

$jsonString = {'Egle': 300, 'Tomas': 400};

echo $jsonString;

$array - json_decode($jsonString, true);

$array = array_merge($array, ['Jonas'])