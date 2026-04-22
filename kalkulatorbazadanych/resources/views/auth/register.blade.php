@extends('layouts.main')
@section('content')
<div class="w3-display-middle w3-white w3-padding w3-card-4" style="width:400px;">
    <h2>Rejestracja Gościa</h2>
	@if ($errors->any())
		<div class="w3-panel w3-red w3-display-container w3-card-4">
			<span onclick="this.parentElement.style.display='none'"
			class="w3-button w3-display-topright">&times;</span>
			<p><strong>Błąd!</strong></p>
			<ul class="w3-ul">
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <input class="w3-input w3-border w3-margin-top" type="text" name="login" placeholder="Login" required>
        <input class="w3-input w3-border w3-margin-top" type="password" name="password" placeholder="Hasło" required>
        <input class="w3-input w3-border w3-margin-top" type="password" name="password_confirmation" placeholder="Powtórz hasło" required>
        <button type="submit" class="w3-button w3-blue w3-block w3-margin-top">Zarejestruj się</button>
        <a href="{{ route('login') }}" class="w3-button w3-light-grey w3-block w3-margin-top">Powrót</a>
    </form>
</div>
@endsection