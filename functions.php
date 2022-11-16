<?php 
    function brojacZnakova($word)
    {
        $word = strtolower($word);   // prebacuje string u mala slova      
        $word = str_split($word);   // podijeli string na char u array

        // inicijaliziraj varijable brojača
        $suglasnik = 0;
        $samoglasnik = 0;

        foreach($word as $character)
        {
            switch($character)
            {
                case "a":
                case "e":
                case "i":
                case "o":
                case "u":
                    $samoglasnik++; // uvećaj brojač samoglasnika
                    break;
                default:
                    $suglasnik++;   // uvećaj brojač suglasnika
                    break;
            }
        }
        return array($samoglasnik, $suglasnik);
    }












?>