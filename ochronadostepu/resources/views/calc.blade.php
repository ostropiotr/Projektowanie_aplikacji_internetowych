@extends('layouts.main')

@section('title', 'Kalkulator Kredytowy')

@section('content')
<div class="w3-display-topright w3-padding w3-text-white w3-container" style="z-index:10; margin-top:10px; margin-right:10px;">
    <span class="w3-hide-small">Użytkownik:</span> 
    <b>{{ session('user') }}</b> 
    <span class="w3-tag w3-round w3-small @if(session('role')=='admin') w3-red @else w3-blue @endif">
        {{ session('role') }}
    </span>
    <a href="{{ route('logout') }}" class="w3-button w3-black w3-tiny w3-round w3-border w3-border-white w3-margin-left">Wyloguj</a>
</div>
<div class="bgimg w3-display-container w3-text-white">
    <div class="w3-display-middle w3-center">
        <p>
            <button onclick="document.getElementById('id_calc').style.display='block'" class="w3-button w3-black w3-xxlarge w3-hover-white w3-card-4">
                OBLICZ RATĘ
            </button>
        </p>
        
        <h1 class="w3-jumbo w3-animate-top">KALKULATOR</h1>
        <hr class="w3-border-grey" style="margin:auto;width:40%">

        @if(session('wynik'))
			<div class="res-box w3-animate-zoom">
				<p class="w3-large">Twoja miesięczna rata:</p>
				<h2 class="w3-xxlarge">{{ number_format(session('wynik'), 2, ',', ' ') }} zł</h2>
			</div>
		@endif
    </div>
</div>

<div id="id_calc" class="w3-modal" @if($errors->any()) style="display:block" @endif>
    <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-black">
            <span onclick="document.getElementById('id_calc').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
            <h1>Parametry kredytu</h1>
        </div>
        <div class="w3-container w3-padding-32 w3-text-black">
            <form action="{{ route('calc.calculate') }}" method="post">
                @csrf <p>
                    <label>Kwota kredytu</label>
                    <input class="w3-input w3-border" type="text" name="kwota" value="{{ old('kwota', $kwota) }}">
                    @error('kwota') <span class="w3-text-red w3-small">{{ $message }}</span> @enderror
                </p>
                <p>
                    <label>Oprocentowanie (%)</label>
                    <input class="w3-input w3-border" type="text" name="procent" value="{{ old('procent', $procent) }}">
                    @error('procent') <span class="w3-text-red w3-small">{{ $message }}</span> @enderror
                </p>
                <p>
                    <label>Ile lat</label>
                    <input class="w3-input w3-border" type="text" name="lata" value="{{ old('lata', $lata) }}">
                    @error('lata') <span class="w3-text-red w3-small">{{ $message }}</span> @enderror
                </p>
                <p><button class="w3-button w3-black w3-block w3-padding-16" type="submit">OBLICZ</button></p>
            </form>
        </div>
    </div>
</div>
@endsection