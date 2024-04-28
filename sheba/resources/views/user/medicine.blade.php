<!-- Header Start -->
<!-- Your existing header code goes here -->
<!-- Header End -->

<!-- Navbar Start -->
<!-- Your existing navbar code goes here -->
<!-- Navbar End -->

<!-- Main Content Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Medicines</p>
            <h1>Our Available Medicines</h1>
        </div>
        <div class="row g-4">
            @foreach($medicines as $medicine)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="medicine-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <!-- Replace the src attribute with the actual image URL -->
                        <img class="img-fluid" src="medicine_images/{{ $medicine->image }}" alt="{{ $medicine->name }}">
                    </div>
                    <div class="medicine-text bg-light text-center p-4">
                        <h5>{{ $medicine->name }}</h5>
                        <p class="text-primary">{{ $medicine->type }}</p>
                        <p>Price: ${{ $medicine->price }}</p>
                        <div class="text-center">
                            <!-- Add appropriate links or actions for buying the medicine -->
                            <!-- Example: Replace "#" with the actual URLs -->
                            <a class="btn btn-primary" href="{{ route('buy_medicine', ['id' => $medicine->id]) }}">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Main Content End -->

<!-- Footer Start -->
<!-- Your existing footer code goes here -->
<!-- Footer End -->
