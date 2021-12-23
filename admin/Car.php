<?php

//papildyti dureliu kiekiu

class Car {
    public string $spalva;
    public string $greitis;
    public string $dureles;

    public function vaziuoti(): void
    {
        echo "Automobilis vaziuoja " .$this->greitis." greiciu. ";
    }
    public function kiekDureliu(): void
    {
        echo "Taip pat, automobilyje yra " .$this->dureles." dureles.";
    }
    public function gautiSpalva(): string
    {
        return $this->spalva;
    }
}

