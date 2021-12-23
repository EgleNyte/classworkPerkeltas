
        <?php
     //   $ceu = [
     //       "Italy" => "Rome", //$key => $value
      //      "Luxembourg" => "Luxembourg",
     //       "Belgium" => "Brussels",
     //       "Denmark" => "Copenhagen",
     //       "Finland" => "Helsinki",
    //        "France" => "Paris",
     //       "Slovakia" => "Bratislava",
     //       "Slovenia" => "Ljubljana",
    //        "Germany" => "Berlin",
     //       "Greece" => "Athens",
     //       "Ireland" => "Dublin",
    //        "Netherlands" => "Amsterdam",
      //      "Portugal" => "Lisbon",
     //       "Spain" => "Madrid",
     //       "Sweden" => "Stockholm",
    //        "United Kingdom" => "London",
     //       "Cyprus" => "Nicosia",
    //        "Lithuania" => "Vilnius",
    //        "Czech Republic" => "Prague",
    //        "Estonia" => "Tallin",
    //        "Hungary" => "Budapest",
    //        "Latvia" => "Riga",
     //       "Malta" => "Valetta",
    //        "Austria" => "Vienna",
    //        "Poland" => "Warsaw",
    //    ] ;

  //  foreach ($ceu as $key => $value) {
   //      echo $key . ' = ' . $value . '<br>';
   //  }

    //    echo '<hr>';

    //    ksort($ceu); // pagal key
    //    $ceuLength = count($ceu);
    //    for($x = 0; $x < $ceuLength; $x++) {
     //       echo $ceu[$x];
      //      echo "<br>";
     //   }

    //    echo '<hr>';

      //  echo '**********************\n';
      //  asort($ceu); // pagal reiksme
      //  for ($1 = 0, $iMax = count($ceu); $i < $iMax; $i += 2) {
      //      $key = array_keys($ceu)[$i];
       //     $value = $ceu[$key];

      //      echo $key . ' = ' . $value . '\n';
      //  }

     //   echo '*********************\n';
    //    foreach ($ceu as $valstybe => $sostine) {
       //     if (
      //          str_contains($valstybe, 'A');

       //         str_contains($sostine, 'A');
       //     ) {
       //         echo $valstybe . ' = ' . $sostine . '\n';
       //     }
       // }

//2 uzduotis

      //  $temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
      //  $average = array_sum($temperatures) / count($temperatures);
      //  echo 'Vidutine temperatura: ' . $average . '<br>';
      //  $averageSuapvalinta = ceil($average);
      //  echo 'Suapvalinta temperatura yra: ' . $averageSuapvalinta . '<hr>';


       // rsort($temperatures);
       // echo '<br>Penkios auksciausios: ';
       // spausdinitiPirmusElementus($temperatures, 5);

       // sort($temperatures);
       // echo 'Penkios zemiausios: ';
       // spausdinitPirmusElementus($temperatures, 5);

       // function spausdinitPirmusElementus(array $temperatures, $kiek): void
       // {
       //     $i = 0;
       //     foreach ($temperatures as $value) {
       //         if ($i < $kiek) {
       //             echo " ".$value;
       //         }
       //         $i++;
       //     }
       //     echo "<br>";
       // }



     //   $sliced_array = array_slice($temperatures, 0, 5);
     //  echo $sliced_array;

// 3 uzduotis

      //  $arr3 = ["abcd", "abc", "de", "hjjj", "g", "wer"];

     //   $buvusiMax = $naujasMax = -999999;
     //   $raktas = null;
//
     //   foreach ($arr3 as $key => $item) {

       //     $naujasMax = strlen($item);

       //     if ($naujasMax > $buvusiMax) {
       //         $raktas = $key;
       //         $buvusiMax = $naujasMax;
       //     }
      //  }

       // if (null !== $raktas) {
      //      echo "Rastas max elementas $arr3[$raktas] eiles nr $raktas";
      //  } else {
      //      echo "Nerasta";
      //  }



      //  $vardai = ["Jonas", "Petras", "Kazys", "Zigmas", "Ona", "Janina", "Kristina"];
      //  $pavardes = ["Joninis", "Petrinis", "Kazinis", "Zigminis", "Onienė",  "Jonė", "Kristė"];

       // $c = [1, 1, 2, 2, 1, 2, 2, 3, 1, 3, 2, 1, 1, 4, 2, 4, 1, 5, 2, 7, 1, 6, 2, 5, 1, 7, 2, 6];

      //  for ($i =0, $iMax = count($c); $i < $iMax; $i+=2) {
      //      $vardoElementoEile = $c[$i] - 1;
      //      $pavardesElementoEile = $c[$i+1] -1;
      //      echo $vardai[$vardoElementoEile] . ' ' . $pavardes[$pavardesElementoEile] . "\n";
      //      echo "<br>";
      //  }


//       include 'libs/matematika.php';
//        require 'libs/Duomenuisvedimas.php';
//        include 'libs/konvertavimai.php';
//        include 'libs/fs.php';
//
//        echo "<br>";
//        echo "100 km in myles: " . konvertuoti(100, 'mylios');
//        echo "<br>";
//        echo "62.1371 km in myles: " . konvertuoti( 62.1371, 'kilometrai');
//
//        "<br>";
//
//        echo "<br>";
//        echo "100 kg in pounds: " . konvertuoti(100, 'svarai');
//        echo "<br>";
//        echo "220.462 pounds in kg: " . konvertuoti(220.462, 'kilogramai');
//
//       "<br>";
//
//        echo "<br>";
//        echo "100 f in celcius: " . konvertuoti(100, 'celcijus');
//        echo "<br>";
//        echo "55.555555555556 celcius in f: " . konvertuoti(55.555555555556, 'farenheitai');
//
//        echo 'failo skaitymas';
//
//        $manoFailas = 'saugoti_duomenis.php';
//
//        $resursas = readFile('saugoti_duomenis.php');
//        $kiek = filesize($manoFailas);

        // kita uzduotis

//        include 'admin/Car.php';
//
//        $automobilis = new Car(); // object tipo kintamasis
//
//        //objekto neimanoma konvertuoti i string jei nera tam tikru salygu
//
//        $automobilis->spalva = 'raudona';
//        $automobilis->greitis = '150kmph';
//        $automobilis->dureles = 'penkios';
//
//      //  var_dump($automobilis);
//
//        $kokiaSpalva = $automobilis->gautiSpalva();
//        echo "Automobilio spalva yra $kokiaSpalva.";
//        echo '<br>';
//        $automobilis->vaziuoti();
//        $automobilis->kiekDureliu();

        //kita uzduotis

        require 'duomenys.php';

        var_dump(json_decode($jsonMasyvas, true));