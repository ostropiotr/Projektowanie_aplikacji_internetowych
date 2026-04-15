<!DOCTYPE html>
<html>
<head>
    <title>Logowanie Admina</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-light-grey w3-display-container" style="height:100vh;">
    <div class="w3-display-middle w3-white w3-padding w3-card-4" style="width:400px;">
        <h2 class="w3-center">Panel Admina</h2>
        <form action="{{ route('login.admin.check') }}" method="POST">
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
            <button type="submit" class="w3-button w3-black w3-block">Zaloguj</button>
            <a href="{{ route('login') }}" class="w3-button w3-block w3-light-grey w3-margin-top">Powrót</a>
        </form>
    </div>
</body>
</html>