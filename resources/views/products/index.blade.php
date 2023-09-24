@extends('layouts.app')

@section('content')
<!--progress sec start-->
<div class="student-eventlist py-4 container">
    <div class="my-2">
        <h1 class="mb-4">Product Listing</h1>

    <!-- Product Cards -->
    <div class="row">
        <!-- Product Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">Description of Product 1.</p>
                    <p class="card-text"><strong>Price: $19.99</strong></p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Product 2</h5>
                    <p class="card-text">Description of Product 2.</p>
                    <p class="card-text"><strong>Price: $24.99</strong></p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Add more product cards as needed -->
    </div>

        <?php //dd($products) ?>
    </div>
</div>
@endsection
