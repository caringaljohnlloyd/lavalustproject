<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Eduardo's Resort</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url() ?>public/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="public/plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="public/plugins/simplebar/simplebar.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>public/css/style.css" rel="stylesheet">
    <script src="<?= base_url() ?>https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .img-color a img {
            width: 60px;
            /* Adjust the width as needed */
            height: auto;
            /* Automatically adjusts the height to maintain aspect ratio */
            display: inline-block;
            /* Ensures the image is displayed as an inline block */
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Header Start -->
        <div class="img-color container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="<?= site_url('/home') ?> "
                        class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <img src="<?= base_url() ?>public/img/logo.png">
                        <h4 class="m-0 text-primary text-uppercase">Eduardo's Resort</h4>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">eduardosresortreservation@gmail.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">0921 507 4378</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
    <div class="navbar-nav mx-auto py-0"> <!-- Use mx-auto to center -->
        <a href="<?= site_url('index.php/home') ?>" class="nav-item nav-link active">Home</a>
        <a href="<?= site_url('index.php/bago') ?>" class="nav-item nav-link">About</a>
        <a href="<?= site_url('index.php/service') ?>" class="nav-item nav-link">Services</a>
        <a href="<?= site_url('index.php/contact') ?>" class="nav-item nav-link">Contact</a>
    </div>
    <button class="btn btn-primary text-dark logout-logo-btn">
        <i class="fas fa-power-off logout-icon"><a href="<?= site_url('/logout'); ?>">Logout</a></i>
    </button>
</div>

                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="<?= base_url() ?>public/img/pool4.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Your Escape to Paradise</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown"> SAVING LIVES BUILDING COMPANIONS!</h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our
                                    Rooms</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="<?= base_url() ?>public/img/eagleview.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown"> Your Ultimate Getaway</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">  Enjoy, Relax & Have Fun in the Cool & Therapeutic Waters</h1>
                                <a href="<?= site_url('/room') ?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our
                                    Rooms</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
     
                <div class="bg-white shadow" style="padding: 35px;">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Room Booking</h6>
                    <h1 class="mb-5">Book <span class="text-primary text-uppercase">Now!</span></h1>
                </div>
                <?php
            // Check for success message
            if (isset($_SESSION['success_message'])) {
                echo '<div class="alert alert-success" role="alert">' . $_SESSION['success_message'] . '</div>';
                unset($_SESSION['success_message']); // Clear the session variable
            }

            // Check for error message
            if (isset($_SESSION['error_message'])) {
                echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error_message'] . '</div>';
                unset($_SESSION['error_message']); // Clear the session variable
            }
            ?>
                    <form action="<?php echo site_url('add'); ?>" method="post">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="checkin" class="text-white">Checkin</label>
                                    <input placeholder="Checkin" type="date" name="checkin" id="checkin"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="checkout" class="text-white">Checkout</label>
                                    <input placeholder="Checkout" type="date" name="checkout" id="checkout"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="adult" class="text-white">Adult</label>
                                    <input placeholder="No. of Adult" type="number" name="adult" id="adult"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="child" class="text-white">Child</label>
                                    <input placeholder="No. of Child" type="number" name="child" id="child"
                                        class="form-control">
                                </div>

                            </div>
                            <div class="col-md-15">

                            <div class="form-group">
                    <label for="manifest" class="form-label">Your name / Your Age</label>
                    <textarea class="form-control" id="manifest" name="manifest" rows="3" placeholder="Enter Your Name / Your Age" required></textarea>
                </div>
    </div> 
                            <div class="col-md-13">
                                <input class="btn btn-primary btn-lg col-md-12" type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <!-- Booking End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                        <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">Eduardo's</span></h1>
                        <p class="mb-4">            Eduardo's Resort promotes tourism in the province, provides
            employment to local residents, helps the farmers maximize product of
            agricultural crops and supports swimmers and athletes.</p>
                        <div class="row g-3 pb-4">

                        
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
    <div class="border rounded p-1">
        <div class="border rounded text-center p-4">
            <i class="fa fa-users fa-2x text-primary mb-2"></i>
            <?php $LAVA =& lava_instance(); ?>
            <?php $LAVA->call->model('Staff_Model'); ?>
          

            <h2  class="mb-1" data-toggle="counter-up">
               
            <?php  $LAVA->Staff_Model->countFeedback(); ?>
            
            </h2>
            <p class="mb-0">Feedback</p>
        </div>
    </div>
</div>

                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
    <div class="border rounded p-1">
        <div class="border rounded text-center p-4">
            <i class="fa fa-users fa-2x text-primary mb-2"></i>
            <?php $LAVA =& lava_instance(); ?>
            <?php $LAVA->call->model('Staff_Model'); ?>
          

            <h2  class="mb-1" data-toggle="counter-up">
               
            <?php  $LAVA->Staff_Model->countStaff(); ?>
            
            </h2>
            <p class="mb-0">Staff</p>
        </div>
    </div>
</div>

                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <?php $LAVA =& lava_instance(); ?>
            <?php $LAVA->call->model('Staff_Model'); ?>
            
                                        <h2 class="mb-1" data-toggle="counter-up"> <?php  $LAVA->Staff_Model->countUser(); ?></h2>
                                        <p class="mb-0">User</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s"
                                    src="<?= base_url() ?>public/img/band.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s"
                                    src="<?= base_url() ?>public/img/pool2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s"
                                    src="<?= base_url() ?>public/img/pool3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s"
                                    src="<?= base_url() ?>public/img/pool4.jpg">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- About End -->


        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">FEEDBACKS</h6>
            <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Feedbacks</span></h1>
        </div>
        <div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s"
            style="margin-bottom: 90px;">
            <div class="container">
                <div class="owl-carousel testimonial-carousel py-5">
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <form action="<?php echo site_url('feedback'); ?>" method="post">
                            <textarea name="feedback" class="form-control mb-3"
                                placeholder="Enter your feedback here..." required></textarea>
                            <button type="submit" class="btn btn-primary">Submit Feedback</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    <!-- Testimonial Start -->
    <div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" style="margin-bottom: 90px;">
    <div class="container">
        <div id="testimonial-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php if ($data && is_array($data)) : ?>
                    <?php $first = true; ?>
                    <?php foreach ($data as $datas) : ?>
                        <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                            <div class="testimonial-item position-relative bg-white rounded overflow-hidden p-4">
                                <p class="mb-3"><?= $datas['username']; ?></p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded me-3" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;">
                                    <div>
                                        <h6 class="fw-bold mb-1"><?= $datas['feedback']; ?></h6>
                                    </div>
                                </div>
                                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                            </div>
                        </div>
                        <?php $first = false; ?>
                    <?php endforeach; ?>
                <?php else : ?>
                    <!-- Handle the case when $data is null or not an array -->
                    <p class="text-white">No feedback available</p>
                <?php endif; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>


<!-- Testimonial End -->

       






       
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.html">
                                <h1 class="text-white text-uppercase mb-3">Eduardo's</h1>
                            </a>
                         All Right Reserved. Designed By Eduardo's
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> Nautical Highway Bayanan II, Calapan City, Oriental Mindoro, Philippines</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0921 507 4378</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>
eduardosresortreservation@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                                <a class="btn btn-link" href="">About Us</a>
                                <a class="btn btn-link" href="">Contact Us</a>
                                <a class="btn btn-link" href="">Privacy Policy</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                                <a class="btn btn-link" href="">Food & Restaurant</a>
                                <a class="btn btn-link" href="">Spa & Fitness</a>
                                <a class="btn btn-link" href="">Sports & Gaming</a>
                                <a class="btn btn-link" href="">Event & Party</a>
                                <a class="btn btn-link" href="">GYM & Yoga</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
 
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


         <!-- Back to Top -->
         <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->

    <script src="<?= base_url() ?>public/lib/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>public/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>public/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>public/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url() ?>public/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>public/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= base_url() ?>public/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= base_url() ?>public/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url() ?>public/js/main.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

            navLinks.forEach(link => {
                link.addEventListener('click', function (event) {
                    navLinks.forEach(item => item.classList.remove('active'));
                    link.classList.add('active');
                });
            });
        });
    </script>

</body>

</html>