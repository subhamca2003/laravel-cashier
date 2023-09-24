@extends('layouts.app')

@section('content')
    <!--progress sec start-->
    <div class="student-eventlist py-4 container">
        <div class="my-2">
            <h1 class="mb-4">Product Details</h1>

            <div class="row">
                <!-- Product Image -->
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/400x300" alt="Product Image" class="img-fluid">
                </div>
                <!-- Product Details -->
                <div class="col-md-6">
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>
                    <h3>Price: ${{ $product->price }}</h3>
                    <!-- Credit Card Form -->
                    <div class="mt-4">
                        <h4>Enter Your Payment Information</h4>
                        <form>
                            <input type="hidden" id="id" value="{{ $product->id }}"/>
                            <!-- Card Number -->
                            <div class="form-group">
                                <label for="cardNumber">Card Number</label>
                                <input type="text" class="form-control" id="cardNumber" placeholder="Card Number"
                                    required>
                            </div>
                            <!-- Expiry and CVV -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="expiry">Expiry Date</label>
                                    <input type="text" class="form-control" id="expiry" placeholder="MM/YY" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cvv">CVV</label>
                                    <input type="text" class="form-control" id="cvv" placeholder="CVV" required>
                                </div>
                            </div>
                            <!-- Name on Card -->
                            <div class="form-group">
                                <label for="cardName">Name on Card</label>
                                <input type="text" class="form-control" id="cardName" placeholder="Name on Card"
                                    required>
                            </div>
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Charge Now</button>
                        </form>
                    </div>
                </div>
            </div>

            <?php //dd($products)
            ?>
        </div>
    </div>
@endsection
