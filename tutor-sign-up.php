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
    <link rel="stylesheet" href="assets/css/tutor-sign-up.css">

    <!-- Slider link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- Hero Animated Text Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Lottie animation link -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!-- Scroll animation link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 
    <style>
        #navbar {
            transition: 0.4s;
            background-color: #00000075;
        };
    </style>

    <title>Quran Learning</title>
  </head>
  <body class="">
    
    <a href="https://api.whatsapp.com/send?phone=+8801706068123" class="whatsapp" title="Contact with Whatsapp">
        <i class="fab fa-whatsapp"></i>
    </a>




    <!-- Header section start -->
    <?php require 'components/header.php' ?>
    <!-- Header section end -->



    <!-- Tutor sign up start -->

    <div class="tutor-sign-up d-flex align-content-center justify-content-center">
        <div class="container d-flex align-content-center justify-content-center" style="z-index: 2;">
            <div class="row d-flex align-content-center justify-content-center">
                <div class="col-12" data-aos="zoom-in" data-aos-duration="1000">
                    <form >
                        <h3 class="text-black">Sign up as a Tutor</h3>
                        <div class="form-group">
                        <label for="Full Name" class="">Full Name</label>
                        <input type="text" class="form-control" id="Full Name" aria-describedby="" placeholder="Full name">
                        </div>
                        <div class="form-group">
                            <label for="E-mail" class="">E-mail</label>
                            <input type="email" class="form-control" id="E-mail" aria-describedby="" placeholder="@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="password" class="">Password</label>
                            <input type="password" class="form-control" id="password" aria-describedby="" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="Confirm-Password" class="">Confirm Password</label>
                            <input type="password" class="form-control" id="Confirm-Password" aria-describedby="" placeholder="Confirm Password">
                        </div>
                        
                    
                        <a href="tutor-create-profile.php" type="submit" class="btn btn-primary w-100 mt-3 p-2 p-md-3">Submit</a>
                    </form>
                </div>
            </div>
        </div>


    </div>

    <!-- Tutor sign up end -->







    <!-- Footer section start -->
    <?php require 'components/footer.php'?>
    <!-- Footer section end -->







    <!-- Scroll animation link -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
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
