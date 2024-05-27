@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>Home page</h1>
    <ul>
        @foreach ($trains as $train)
            <li>{{ $train->azienda }}</li>
            <li>{{ $train->stazione_di_partenza }}</li>
            <li>{{ $train->stazione_di_arrivo }}</li>
            <li>{{ $train->ora_di_partenza }}</li>
            <li>{{ $train->ora_di_arrivo }}</li>
        @endforeach
    </ul>
</main>

@endsection
