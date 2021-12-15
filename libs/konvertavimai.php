<?php

include 'libs/konvert.php';

function konvertuoti(int|float $ka, string $kaip): float {

    switch ($kaip) {
        case 'mylios':
            $ats = km2myles($ka);
        case 'svarai':
            $ats = kg2svarai($ka);
        case 'celcijus':
            $ats = f2celcijus($ka);
            break;
        case 'kilometrai';
            $ats = myles2km($ka);
        case 'kilogramai';
            $ats = svarai2kg($ka);
        case 'farenheitai';
            $ats = celcijus2f($ka);
            break;
        default;
            throw new Exception('Nesuprantamas formatas');

    }
    return $ats;
}

/*function konvertuoti1(int|float $ka1, string $kaip1): float {

    switch ($kaip1) {
        case 'svarai':
            $ats1 = kg2svarai($ka1);
            break;
        case 'kilogramai';
            $ats1 = svarai2kg($ka1);
            break;
        default;
            throw new Exception('Nesuprantamas formatas');

    }
    return $ats1;
}

function konvertuoti2(int|float $ka2, string $kaip2): float {

    switch ($kaip2) {
        case 'celcijus':
            $ats2 = f2celcijus($ka2);
            break;
        case 'farenheitai';
            $ats2 = celcijus2f($ka2);
            break;
        default;
            throw new Exception('Nesuprantamas formatas');

    }
    return $ats2;*/
}