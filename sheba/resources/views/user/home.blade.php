<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <title>SHEBA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>224 KHA, PRAGATI SARANI</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Sun - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+880 1303008491</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>SHEBA</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Important</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="team.html" class="dropdown-item">Our Doctor</a>
                        <a href="appointment.html" class="dropdown-item">Appointment</a>
                        <a href="testimonial.html" class="dropdown-item">Become A Gold/VIP Member</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            @if(Route::has('login'))

            @auth
             <li class="nav-item">
                <a class="nav-link" style="background-color:greenyellow;" href="{{url('myappointment')}}">My Appointmnets</a>
                <!-- Add a button to trigger the notification -->
<button id="goldMemberButton" class="btn btn-primary">Gold Member</button>

<!-- Include a <div> to display the notification message -->
<div id="notification" class="alert alert-info" style="display: none;"></div>

<!-- JavaScript code to handle the click event and show the notification -->
<script>
    // Find the button element
    var goldMemberButton = document.getElementById("goldMemberButton");

    // Add a click event listener to the button
    goldMemberButton.addEventListener("click", function() {
        // Show the notification message
        var notification = document.getElementById("notification");
        notification.textContent = "Member request pending";
        notification.style.display = "block";

        // Hide the notification after a few seconds (e.g., 5 seconds)
        setTimeout(function() {
            notification.style.display = "none";
        }, 5000); // 5000 milliseconds = 5 seconds
    });
</script>

                <div>
                <body>
    <!-- Create a link to the PDF file -->
    <a id="downloadPdfButton" class="btn btn-primary" href="transcript.pdf" download>Download transcript</a>

    <!-- Include JavaScript to simulate click event -->
    <script>
        // Get the download link element
        var downloadLink = document.getElementById('downloadPdfButton');

        // Add a click event listener to trigger the download
        downloadLink.addEventListener('click', function(event) {
            // Prevent the default behavior of the link
            event.preventDefault();

            // Trigger a click event on the link to initiate the download
            downloadLink.click();
        });
    </script>
</body>
             </li>
            <x-app-layout>
            </x-app-layout>

            @else

            <a href="{{route('login')}}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">login<i class="fa fa-arrow-right ms-3"></i></a>
            <a href="{{route('register')}}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Registration<i class="fa fa-arrow-right ms-3"></i></a>

            @endauth

            @endif



        </div>
    </nav>
    <!-- Navbar End -->
    @if(session()->has('message'))

    <div class="alert alert-success">
        <button type="button"class="close" data-dismiss="alert">
        </button>
        {{session()->get('message')}}
    </div>
    @endif

    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">Good Health Is The Root Of All Heppiness</h1>
                <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">100</h2>
                            <p class="text-light mb-0">Expert Doctors</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">999</h2>
                            <p class="text-light mb-0">Medical Stuff</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">10000</h2>
                            <p class="text-light mb-0">Total Patients</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">30</h2>
                            <p class="text-light mb-0">Total Free Cabins</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Cardiology</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Neurology</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/carousel-3.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Pulmonary</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="img/about-1.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="img/about-2.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p>
                    <h1 class="mb-4">Why You Should Trust Us? Get Know About Us!</h1>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Quality health care</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Only Qualified Doctors</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Medical Research Professionals</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    @include('user.service')
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <p class="d-inline-block border rounded-pill text-light py-1 px-4">Features</p>
                        <h1 class="text-white mb-4">Why Choose Us</h1>
                        <p class="text-white mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-user-md text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Experience</p>
                                        <h5 class="text-white mb-0">Doctors</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-check text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Quality</p>
                                        <h5 class="text-white mb-0">Services</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-comment-medical text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Positive</p>
                                        <h5 class="text-white mb-0">Consultation</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-headphones text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">24 Hours</p>
                                        <h5 class="text-white mb-0">Contact Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/feature.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->




    <!-- Team Start -->
    @include('user.doctor')
    <!-- Team End -->

    <!-- Appointment Start -->
    @include('user.appointment')
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Medicine Store</p>
                <h1>We are here for you</h1>
            </div>
            <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
        <i class="fa fa-tag text-primary"></i>
    </div>
    <div class="ms-4">
        <p class="mb-2">Enter Promo Code</p>

            
            <div class="mb-3">
                <label for="promoCodeName" class="form-label">Promo Code</label>
                <input type="text" class="form-control" id="promoCodeName" name="promo_code" placeholder="Enter your promo code">
            </div>
            <div class="mb-3">
                <label for="promoCodeDiscount" class="form-label">Discount Percentage</label>
                <input type="number" class="form-control" id="promoCodeDiscount" name="discount_percentage" placeholder="Enter discount percentage">
            </div>
            <div class="mb-3">
                <label for="promoCodeValidity" class="form-label">Validity Date</label>
                <input type="date" class="form-control" id="promoCodeValidity" name="validity_date" placeholder="Enter validity date">
            </div>
            <button type="submit" class="btn btn-primary">Apply Promo Code</button>
        </form>
    </div>
</div>

            <h1>Medicine Corner</h1>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/napa.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Capsule</p>
                        
                        <h5 class="mb-1">Napa</h5>
                        <span class="fst-italic">100</span>
                        <p><button type="submit" class="btn btn-primary">Buy</button></p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/exime.jpeg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Capsule</p>
                        
                        <h5 class="mb-1">Exime</h5>
                        <span class="fst-italic">50</span>
                        <p><button type="submit" class="btn btn-primary">Buy</button></p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p> </p>
                        <p> </p>
                        <h5 class="mb-1"> </h5>
                        <span class="fst-italic"> </span>
                        <p><button type="submit" class="btn btn-primary"></button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Contact Support</p>
            <h1>We are here for you</h1>
        </div>
        <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
            <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                <i class="fa fa-phone-alt text-primary"></i>
            </div>
            <div class="ms-4">
                <p class="mb-2">Call Us Now</p>
                <h5 class="mb-0">+012 345 6789</h5>
            </div>
        </div>
        <div class="bg-light rounded d-flex align-items-center p-5">
            <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                <i class="fa fa-envelope-open text-primary"></i>
            </div>
            <div class="ms-4">
                <p class="mb-2">Mail Us Now</p>
                <h5 class="mb-0">info@example.com</h5>
            </div>
        </div>
        
        <!-- VIP Member Request Section -->
        <h2 class="mt-5 mb-4 text-center">VIP Member Request</h2>
        <form action="/vip-request" method="POST" class="row g-3">
            <div class="col-md-6">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName" name="name" required>
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" required>
            </div>
            <div class="col-md-6">
                <label for="inputPhone" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="inputPhone" name="phone" required>
            </div>
            <div class="col-md-6">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="address" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Request VIP Membership</button>
            </div>
        </form>
        
    </div>
    </div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>224 KHA, PRAGATI SARANI, BRAC UNIVERSITY</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+880 1303008491</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>shebaxyz@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Services</h5>
                    <a class="btn btn-link" href="">Cardiology</a>
                    <a class="btn btn-link" href="">Pulmonary</a>
                    <a class="btn btn-link" href="">Neurology</a>
                    <a class="btn btn-link" href="">Orthopedics</a>
                    <a class="btn btn-link" href="">Laboratory</a>
                    <button class="btn btn-primary" id="notificationBtn">Click to ON Notifications</button>
                    <button class="btn btn-primary" id="notificatioffBtn">Click to OFF Notifications</button>
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
        // Get the button element
                        var notificationBtn = document.getElementById('notificationBtn');
                        var notificatioffBtn = document.getElementById('notificatioffBtn');
        
        // Add click event listener to the button
                        notificationBtn.addEventListener('click', function() {
            // Show the pop-up message
                            alert("You will get further notifications");
                        });

                        notificatioffBtn.addEventListener('click', function() {
            // Show the pop-up message
                            alert("You will not get further notifications");
                        });
                    });
                </script>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="public/html/emergency">EMERGENCY ?</a>
                    <a class="btn btn-link" href="">Contact Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">SHEBA</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>