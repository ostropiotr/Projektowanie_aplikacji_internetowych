<!DOCTYPE html>
<html>
<head>
    <title>Logowanie - Kalkulator</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-light-grey w3-display-container" style="height:100vh;">

    <div class="w3-display-middle w3-white w3-padding w3-card-4" style="width:400px;">
        <h2 class="w3-center">Zaloguj się</h2>
        
        @if(session('success'))
            <div class="w3-panel w3-green w3-padding">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('login.check') }}" method="POST">
            @csrf
            <p>
                <label>Login</label>
                <input class="w3-input w3-border" type="text" name="login" required>
            </p>
            <p>
                <label>Hasło</label>
                <input class="w3-input w3-border" type="password" name="password" required>
            </p>

            @if($errors->has('login_error'))
                <p class="w3-text-red w3-small">{{ $errors->first('login_error') }}</p>
            @endif

            <button type="submit" class="w3-button w3-black w3-block w3-margin-top">Zaloguj</button>
        </form>

        <hr>
        <div class="w3-center">
            <p>Nie masz konta?</p>
            <a href="{{ route('register') }}" class="w3-button w3-blue-grey w3-small">Zarejestruj się jako Gość</a>
        </div>
    </div>

</body>
</html>