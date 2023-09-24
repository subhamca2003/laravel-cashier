@extends('layouts.app')

@section('content')
<!--progress sec start-->
<div class="student-eventlist py-4 container">
    <div class="my-2">
        <h1 class="mb-4">Product Listing</h1>

    <!-- Product Cards -->
    <div class="row">
        <!-- Product Card 1 -->
        @foreach($products as $product)
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text"><strong>Price: ${{ $product->price }}</strong></p>
                    <a href="{{ route('buy.product', $product->id) }}" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        @endforeach

        <!-- Product Card 2 -->
        {{-- <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Product 2</h5>
                    <p class="card-text">Description of Product 2.</p>
                    <p class="card-text"><strong>Price: $24.99</strong></p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div> --}}

        <!-- Add more product cards as needed -->
    </div>

        <?php //dd($products) ?>
    </div>
</div>
@endsection
