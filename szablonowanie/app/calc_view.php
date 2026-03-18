<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Kredytowy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,h1,h5 {font-family: "Raleway", sans-serif}
        body, html {height: 100%; margin: 0;}
        .bgimg {
            background-image: url('https://www.w3schools.com/w3images/onepage_restaurant.jpg');
            min-height: 100%;
            background-position: center;
            background-size: cover;
        }
        .res-box { background: rgba(0,0,0,0.7); padding: 20px; border-radius: 10px; border: 1px solid white; margin-top: 20px; }
    </style>
</head>
<body>

<div class="bgimg w3-display-container w3-text-white">
    <div class="w3-display-middle w3-center">
        <p>
            <button onclick="document.getElementById('id_calc').style.display='block'" class="w3-button w3-black w3-xxlarge w3-hover-white w3-card-4">
                OBLICZ RATĘ
            </button>
        </p>
        
        <h1 class="w3-jumbo w3-animate-top">KALKULATOR</h1>
        <hr class="w3-border-grey" style="margin:auto;width:40%">

        <?php if (isset($wynik)): ?>
            <div class="res-box w3-animate-zoom">
                <p class="w3-large">Twoja miesięczna rata:</p>
                <h2 class="w3-xxlarge"><?php echo number_format($wynik, 2, ',', ' '); ?> zł</h2>
            </div>
        <?php endif; ?>
    </div>
</div>

<div id="id_calc" class="w3-modal" <?php if(!empty($errors)) echo 'style="display:block"'; ?>>
    <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-black">
            <span onclick="document.getElementById('id_calc').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
            <h1>Parametry kredytu</h1>
        </div>
        <div class="w3-container w3-padding-32 w3-text-black">
            <form action="<?php echo _APP_URL; ?>/app/calc.php" method="post">
                <p>
                    <label>Kwota kredytu</label>
                    <input class="w3-input w3-border" type="text" name="kwota" value="<?php echo $kwota; ?>">
                    <?php if (isset($errors['kwota'])): ?>
                        <span class="w3-text-red w3-small"><?php echo $errors['kwota']; ?></span>
                    <?php endif; ?>
                </p>
                <p>
                    <label>Oprocentowanie (%)</label>
                    <input class="w3-input w3-border" type="text" name="procent" value="<?php echo $procent; ?>">
                    <?php if (isset($errors['procent'])): ?>
                        <span class="w3-text-red w3-small"><?php echo $errors['procent']; ?></span>
                    <?php endif; ?>
                </p>
                <p>
                    <label>Ile lat</label>
                    <input class="w3-input w3-border" type="text" name="lata" value="<?php echo $lata; ?>">
                    <?php if (isset($errors['lata'])): ?>
                        <span class="w3-text-red w3-small"><?php echo $errors['lata']; ?></span>
                    <?php endif; ?>
                </p>
                <p><button class="w3-button w3-black w3-block w3-padding-16" type="submit">OBLICZ</button></p>
            </form>
        </div>
    </div>
</div>

</body>
</html>