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
            <p class="d-inline-block border rounded-pill py-1 px-4">Doctors</p>
            <h1>Our Experience Doctors</h1>
        </div>
        <div class="row g-4">
            @foreach($doctor as $doctors)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <!-- Replace the src attribute with the actual image URL -->
                        <img class="img-fluid" src="doctorimage/{{$doctors->image}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>{{ $doctors->name }}</h5>
                        <p class="text-primary">{{ $doctors->speciality }}</p>
                        <div class="team-social text-center">
                            <!-- Add appropriate links or actions for the doctor -->
                            <!-- Example: Replace "#" with the actual URLs -->
                            <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
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
