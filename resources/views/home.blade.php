@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>Home page</h1>
    <ul>
        @foreach ($trains as $train)
            <li>{{ $train->azienda }}</li>
            <li>Stzione di partenza:{{ $train->stazione_di_partenza }}</li>
            <li>Stazione di arrivo:{{ $train->stazione_di_arrivo }}</li>
            <li>Partenza alle:{{ $train->ora_di_partenza }}</li>
            <li>Ora di aarrivo:{{ $train->ora_di_arrivo }}</li>
        @endforeach
    </ul>
</main>

@endsection
