@extends('layouts.app')

@section('title', 'Product detail')

@section('content')
    <main>

        <section class="container">
            <h1>Pasta</h1>
            <div class="row row-gap-3">

                <div class="col-12">
                    <div class="card">
                        <img src="{{ $product['src'] }}" alt="{{ $product['titolo'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['titolo'] }}</h5>
                            <p class="card-text"> {{ $product['descrizione'] }}</p>
                            <p class="card-text">Cottura: {{ $product['cottura'] }}</p>
                            <p class="card-text">Peso: {{ $product['descrizione'] }}</p>
                            <p class="card-text">Tipo: {{ $product['tipo'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
