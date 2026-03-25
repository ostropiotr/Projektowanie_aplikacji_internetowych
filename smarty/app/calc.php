<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

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
    
    if (empty($errors)) {
        $k1 = (($procent * $lata)/100)*$kwota;
        $k2 = $kwota + $k1;
        $wynik = $k2/($lata * 12);
    }
}

$smarty = new Smarty();
$smarty->setTemplateDir([
    'app' => _ROOT_PATH . '/app/',
    'common' => _ROOT_PATH . '/templates/'
]);

$smarty->setCompileDir(_ROOT_PATH . '/templates_c/');

$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);

$smarty->assign('kwota', $kwota);
$smarty->assign('procent', $procent);
$smarty->assign('lata', $lata);
$smarty->assign('wynik', $wynik);
$smarty->assign('errors', $errors);

$smarty->display(_ROOT_PATH.'/app/calc.html');