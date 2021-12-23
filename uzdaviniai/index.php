<?php

include 'Student.php';
include 'Grupe.php';

//$studentas1 = new Student();
//$studentas2 = new Student();
//$studentas3 = new Student();
//$studentas4 = new Student();
//$studentas5 = new Student();
//
//$asmuo = new Person();
//
//$grupe = new Grupe('KCS777V', 72);
//
//echo $grupe->gautiPavadinima();
//echo "\n";
//
//$studentai = [
//    $studentas1,
//    $studentas2,
//    $studentas3,
//    $studentas4,
//    $studentas5,
//];

$studentai[0] = new Student(30505050505);

$grupe = new Grupe ('KCS777V', 72);

$asmensKodai = [
    31212121212,
    41502020202,
    60101010101,
    50202020202,
    40303030303,
];


for ($i = 0; $i < 5; $i++) {
    $naujasStudentas = new Student($asmensKodai[$i]);
    $naujasStudentas->priskirtiGrupe($grupe);

    $studentai[] = $naujasStudentas;
}

//foreach ($studentai as $studentas) {
//    $grupesPavadinimas = $naujasStudentas->gautiGrupe()->gautiPavadinima();
//
//    echo $grupesPavadinimas . ' '
//        . $studentas->asmensKodas . "\n";
//}

foreach ($studentai as $studentas) {
    $lytis =(int)($studentas->asmensKodas / 10000000000);
    if ($lytis === 3 || $lytis === 5) {
        echo 'Studentas ' . $studentas->asmensKodas . ' yra vyras. ';
    } else {
        echo 'Studentas ' . $studentas->asmensKodas . ' yra moteris. ';
    }
}
