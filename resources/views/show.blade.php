@extends('layouts/base')

@section('body')


    <h1>Plat {{ $plat->title }}</h1>

    <div>Contenu : </div>
    <p>{{ $plat->content }}</p>
@endsection
