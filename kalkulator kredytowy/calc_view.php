<head>
    <h1>Kalkulator Kredytowy</h1>
</head>
<body>
    <form action="calc.php" method="post">
        <label>Kwota kredytu:</label>
        <input type="text" name="kwota" value="<?php echo $kwota;?>">
		<br><br>
        <label>Ile lat:</label>
        <input type="text" name="lata" value="<?php echo $lata;?>">
		<br><br>
        <label>Oprocentowanie:</label>
        <input type="text" name="procent" value="<?php echo $procent;?>">
		<br><br>
        <input type="submit" value="Oblicz ratę na miesiąc">
    </form>
	
	<?php if (!empty($errors)):?>
        <ul>
            <?php foreach($errors as $error) echo "<li>$error</li>";?>
        </ul>
    <?php endif;?>

    <?php if ($wynik != null):?>
        <div>
            Rata na miesiąc: <?php echo round($wynik, 2);?>
        </div>
    <?php endif;?>

</body>

