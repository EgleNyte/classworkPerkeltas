<?php

const KM2MYLES = 0.621371;

function km2myles(int|float $ka): float {
    return $ka * KM2MYLES;
}

function myles2km(int|float $ka): float {
    return $ka / KM2MYLES;
}


const KG2SVARAI = 2.20462;

function kg2svarai(int|float $ka1): float {
    return $ka1 * KG2SVARAI;
}

function svarai2kg(int|float $ka1): float {
    return $ka1 / KG2SVARAI;
}

const FCELC = 1.8;

function f2celcijus(int|float $ka2): float {
    return $ka2 / FCELC;
}

function celcijus2f(int|float $ka2): float {
    return $ka2 * FCELC;
}