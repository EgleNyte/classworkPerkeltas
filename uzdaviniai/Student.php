<?php

include 'Person.php';

//class Student extends Person
//{
//    private string $grupesID;
//
//    public function gautiGrupesNr()
//    {
//        return $this->grupesID;
//    }
//}

class Student extends Person
{
    private Grupe $grupe;

    public function gautiGrupe(): Grupe
    {
        return $this->grupe;
    }
    public function priskirtiGrupe(Grupe $grupe): void
    {
        $this->grupe = $grupe;
    }
}
