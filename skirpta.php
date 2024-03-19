<?php
session_start();
// Provjera je li forma poslana
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // Provjera je li korisnik unio ime
     if (!empty($_POST['name']) && !empty($_POST['meal'])) {
        // Dohvati podatke iz forme
        $name = $_POST['name'];
        $meal = $_POST['meal'];

        // Dodavanje podataka u JSON datoteku
         dodajPodatke($name, $meal);

         // Postavljanje kolačića za omiljeno jelo
         setcookie('meal', $meal, time() + (86400 * 30), "/");

         // Inkrementiranje broja posjeta

        if (isset ($_SESSION['visits'])) {
            $_SESSION ['visits']++;
        } else {
            $_SESSION ['visits'] = 1;
        }

        // Preusmjeravanje korisnika natrag na početnu stranicu
        header ("Location: form.php");
        exit();
     }
}

// Funkcija za dodavanje podataka u JSON datoteku
function dodajPodatke ($name, $meal) {
    // Dohvati postojeće podatke iz datoteke ako potsoje

    

    // Dodaj novi zapis u niz podataka
    $data [] = ['name' => $name, 'meal' => $meal];
    // Spremi podatke u JSON formatu u datoteku

    file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));
}