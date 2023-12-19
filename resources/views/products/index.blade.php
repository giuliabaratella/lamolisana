@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <main>

        <section class="container">
            <h1>Products</h1>
            <div class="row row-gap-3">
                @foreach ($products as $key => $product)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="{{ $product['src'] }}" alt="{{ $product['titolo'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product['titolo'] }}</h5>
                                <p class="card-text"> {!! substr($product['descrizione'], 0, 100) . '...' !!}</p>
                                <a href="{{ route('products.show', $key) }}" class="btn btn-primary">Vedi dettagli</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

@endsection
