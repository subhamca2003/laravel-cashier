<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                        <form action="{{ route('process-checkout') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_name" placeholder="Product Name" value="{{ $product->name }}">
                            <input type="hidden" name="amount" placeholder="Amount" value="{{ $product->price }}">
                            <input type="hidden" id="id" value="{{ $product->id }}"/>
                            <!-- Card Number -->
                            <div class="form-group">
                                <label for="cardNumber">Card Number</label>
                                <input type="text" class="form-control" id="cardNumber" maxlength="16" placeholder="Card Number"
                                    required>
                            </div>
                            <!-- Expiry and CVV -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="expiry">Expiry Date</label>
                                    <input type="text" class="form-control" id="expiry" placeholder="MM/YY" required maxlength="5">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cvv">CVV</label>
                                    <input type="text" class="form-control" id="cvv" placeholder="CVV" maxlength="4" required>
                                </div>
                            </div>
                            <!-- Name on Card -->
                            <div class="form-group">
                                <label for="cardName">Name on Card</label>
                                <input type="text" class="form-control" id="cardName" placeholder="Name on Card"
                                maxlength="50" required>
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
        </div>
    </div>
</x-app-layout>
