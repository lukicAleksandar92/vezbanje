<a href="/dodaj-ocenu">Dodaj ocenu</a>

<div>
@foreach ($ocene as $ucenikovaOcena)
    Predmet: {{ $ucenikovaOcena->predmet }}<br>
    Profesor: {{ $ucenikovaOcena->profesor }}<br>
    Ocena: {{ $ucenikovaOcena->ocena }}<br>
    <hr>
@endforeach
</div>
