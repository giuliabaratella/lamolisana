@extends('layouts.app')

@section('title', 'Recipes')

@section('content')
    <main>

        <section class="container">
            <h1>Recipes</h1>
            <div class="row">
                @foreach ($recipes as $product)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product['title'] }}</h5>
                                <p class="card-text"> {!! substr($product['instructions'], 0, 100) . '...' !!}</p>
                                <a href="#" class="btn btn-primary">Vedi dettagli</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

@endsection
