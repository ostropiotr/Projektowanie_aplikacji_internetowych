<!DOCTYPE html>
<html>
<head>
    <title>Logowanie</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-light-grey w3-display-container" style="height:100vh;">
    <div class="w3-display-middle w3-white w3-padding w3-card-4 w3-center" style="width:400px;">
        <h2>Kalkulator Kredytowy</h2>
        <p>Wybierz sposób dostępu:</p>
        <hr>
        <a href="{{ route('login.admin') }}" class="w3-button w3-black w3-block w3-margin-bottom">Zaloguj jako Admin</a>
        <a href="{{ route('login.guest') }}" class="w3-button w3-blue w3-block w3-margin-bottom">Wejdź jako Gość (limit kwoty 10k)</a>
        
        @if(session('error'))
            <p class="w3-text-red">{{ session('error') }}</p>
        @endif
    </div>
</body>
</html>