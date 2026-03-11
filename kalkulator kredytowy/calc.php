<?php
$kwota = $_POST['kwota'] ?? null;
$procent = $_POST['procent'] ?? null;
$lata = $_POST['lata'] ?? null;
$wynik = null;
$errors = [];

if (isset($_POST['kwota'])) {
    if ($kwota === "" || $procent === "" || $lata === "") {
        $errors[] = "Wszystkie pola muszą być wypełnione";
    } 
    elseif ($kwota <= 0 || $procent <= 0 || $lata <= 0) {
        $errors[] = "Podane dane muszą być większe od 0";
    }
	elseif (empty($errors)) {
		$k1 = (($procent * $lata)/100)*$kwota;
		$k2 = $kwota + $k1;
		$wynik = $k2/($lata * 12);
	}
}
include 'calc_view.php';
?>

