<?php
require_once dirname(__FILE__).'/../config.php';
$kwota = $_POST['kwota'] ?? null;
$procent = $_POST['procent'] ?? null;
$lata = $_POST['lata'] ?? null;
$wynik = null;
$errors = [];

if (isset($_POST['kwota'])) {
    if ($kwota == "") {
        $errors['kwota'] = "Proszę podać kwotę kredytu.";
    } elseif (!is_numeric($kwota)) {
        $errors['kwota'] = "Wartość musi być liczbą";
    } elseif ($kwota <= 0) {
        $errors['kwota'] = "Kwota musi być większa od zera.";
    }

    if ($lata == "") {
        $errors['lata'] = "Proszę podać liczbę lat.";
    } elseif (!is_numeric($lata)) {
        $errors['lata'] = "Lata muszą być liczbą całkowitą.";
    } elseif ($lata <= 0) {
        $errors['lata'] = "Okres musi wynosić przynajmniej 1 rok.";
    }

    if ($procent == "") {
        $errors['procent'] = "Proszę podać oprocentowanie.";
    } elseif (!is_numeric($procent)) {
        $errors['procent'] = "Oprocentowanie musi być liczbą.";
    } elseif ($procent < 0) {
        $errors['procent'] = "Oprocentowanie nie może być ujemne.";
    }
	elseif (empty($errors)) {
		$k1 = (($procent * $lata)/100)*$kwota;
		$k2 = $kwota + $k1;
		$wynik = $k2/($lata * 12);
	}
}
include 'calc_view.php';
?>

