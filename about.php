<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Chivo&family=Henny+Penny&family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">
    
    <!-- Icon link -->
    <script src="https://kit.fontawesome.com/7ae177276b.js" crossorigin="anonymous"></script>
    <!-- Navbar css link -->
    <link rel="stylesheet" href="assets/css/navbar.css">
    <!-- Main css link -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- About css link -->
    <link rel="stylesheet" href="assets/css/about.css">

    <!-- Slider link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- Hero Animated Text Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Lottie animation link -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    
    <style>
        #navbar {
            transition: 0.4s;
        };
    </style>

    <title>Quran Teaching</title>
  </head>
  <body>
    
    <a href="https://api.whatsapp.com/send?phone=01843676171" class="whatsapp" title="Contact with Whatsapp">
        <i class="fab fa-whatsapp"></i>
    </a>



    <!-- Header section start -->
    <?php require 'components/header.php' ?>
    <!-- Header section end -->



    <!-- Hero section start -->
    <div class="hero-container d-flex align-items-center justify-content-center">
       
        <h1>About Us</h1>

        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide "><img src="assets/images/hero-background.jpg" alt="slider-img" srcset=""></div>
            </div>
        </div>

    </div>
    <!-- Hero section end -->








    <!-- About section start -->
    <div class="about-us-section padding">

    
        <div class="container about-us-container " id="About-Us">
            
            <div class="row">
                <div class="col-md-6">
                    <h1>Quran learning institute</h1>
                    <p>The establishment of Dutco dates back to 1947, when the business of Dubai Transport Company began.</p>
                    <p class="mb-3">Located in United Arab Emirates, Euro Gulf Fit Out offers a comprehensive fit-out service for clients across the UAE. We are able to take on board your commercial fit-out or refurbishment requirements, taking your proposed. Located in United Arab Emirates, Euro Gulf Fit Out offers a comprehensive fit-out service for clients across the UAE. We are able to take on board your commercial fit-out or refurbishment requirements, taking your proposed.</p>
                    <p class="mb-5">Located in United Arab Emirates, Euro Gulf Fit Out offers a comprehensive fit-out service for clients across the UAE. We are able to take on board your commercial fit-out or refurbishment requirements, taking your proposed. Located in United Arab Emirates, Euro Gulf Fit Out offers a comprehensive fit-out service for clients across the UAE. We are able to take on board your commercial fit-out or refurbishment requirements, taking your proposed.</p>

                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center">

                    <div class="about-us-img-container w-100">
                        
                        <div class="row">
                            <div class="col-sm-6 d-flex align-items-center justify-content-center justify-content-md-end">
                                <img src="assets/images/course-4.jpg" alt="" style="height: 100%;">
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center justify-content-center">
                                        <img src="assets/images/course-2.jpg" alt="">
                                    </div>
                                    <div class="col-12 d-flex align-items-center justify-content-center mt-2 mt-xl-4">
                                        <img src="assets/images/course-3.jpg" alt="">
                                    </div>
                                </div>
                                
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row pt-3 pb-3 pt-md-5 pb-md-5">
            <div class="col-xl-4">
                <h1>Our Vision</h1>
                <p>What we seek to achieve in the future the</p>
            </div>
            <div class="col-xl-8">
                <p>Located in United Arab Emirates, Euro Gulf Fit Out offers a comprehensive fit-out service for clients across the UAE. We are able to take on board your commercial fit-out or refurbishment requirements, taking your proposed. Located in United Arab Emirates, Euro Gulf Fit Out</p>
            </div>
        </div>
        <div class="row pt-3 pb-3 pt-md-5 pb-md-5">
            <div class="col-xl-4">
                <h1>Our Mission</h1>
                <p>What we seek to achieve in the future the</p>
            </div>
            <div class="col-xl-8">
                <p>Located in United Arab Emirates, Euro Gulf Fit Out offers a comprehensive fit-out service for clients across the UAE. We are able to take on board your commercial fit-out or refurbishment requirements, taking your proposed. Located in United Arab Emirates, Euro Gulf Fit Out</p>
            </div>
        </div>
    </div>

    <!-- Youtube video -->
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/NrsCej6SVxM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </div>
        </div>
    </div>
    <!-- About s section end -->










    <!-- Footer section start -->
    <?php require 'components/footer.php'?>
    <!-- Footer section end -->








    <script>


        // Onscroll navbar effect js
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 420 || document.documentElement.scrollTop > 420) {
                document.getElementById("navbar").style.backgroundColor = "#00000075";
            } else {
                document.getElementById("navbar").style.backgroundColor = "#55555500";
            }
        }
    </script>













    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>