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
       
        <h1>Contact Us</h1>

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




    <!-- Contact Us section start -->

    <div class="" id="Contact-Us">
        <div class="contact-container d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row">
                   
                    <div class="col-md-6 contact-col">
                        <div class="message-box text-white">
                            <h1>Send a Message</h1>
                            <form action="" >
                                <input type="text" placeholder="Name" class="p-1 p-md-3 mb-2 ">
                                <input type="text" placeholder="Subject" class="p-1 p-md-3 mb-2 ">
                                <input type="email" placeholder="Email" class="p-1 p-md-3 mb-2">
                                <textarea placeholder="Comment"></textarea>
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                    
                    <div class="col-md-6 contact-col text-center mt-3 mt-md-0">
                        


                        <div class="w-100 align-items-center">

                            <div class="row">
                                <div class="col-6 col-md-12">
                                    <div class="contact-system d-flex align-items-center justify-content-center rounded mb-3">
                                        <a href="skype:live: .cid.effdca131a6e97cb?chat" class="w-100">
                                            <i class="fab fa-skype"></i>
                                            <h4>Skype</h4>
                                            <p>live: .cid.effdca131a6e97cb</p> 
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-12">
                                    <div class="contact-system d-flex align-items-center justify-content-center rounded mb-3">
                                        <a href="tel:04 2849180" class="w-100">
                                            <i class="fas fa-phone-square-alt"></i>
                                            <h4>Call us</h4>
                                            <p>+8801706068123</p> 
                                        </a>
                                    </div>
                                </div>


                            </div>
                            

                            <div class="contact-system d-flex align-items-center justify-content-center rounded">
                               
                                <a href="mailto:arabicmohammad21@gmail.com" class="w-100">
                                    <i class="fas fa-envelope-open-text"></i>
                                    <h4>Email us</h4>
                                    <p>arabicmohammad21@gmail.com</p> 
                                </a>
                            </div>

                        </div>
            


                     

                    </div>
                </div>
            </div>
           
        </div>
    </div>

    <!-- Contact Us section end -->







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


    <script src="assets/js/animated-text.js"></script>



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