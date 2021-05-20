<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infotec/artefactos</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet"> load all styles -->
    
    <!-- style -->
    <link rel="stylesheet" href="css/main.css">
    
    <!-- SCROLL REVEAL -->
    <script  src="https://unpkg.com/scrollreveal"> </script>
    <script src="js/main.js"></script>

    <!-- libreria para slaider -->
    <link href="css/jquery.bxslider.css" type="text/css" rel="stylesheet"/>
    <!-- <script src="js/jquery-3.5.1.min.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
     <!-- end libreria para slaider -->
    <script>
        $(document).ready(function() {
            $('.bxslider').bxSlider({
                mode:'fade',
                auto:'true',
                pause: 4000
                //controls:false
            });
        });
    </script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand px-1" id="logo-menu" href="#">INFOTEC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="telecomunicaciones.php">Telecomunicacione</a></li>
                    <li class="nav-item"><a class="nav-link" href="ing_software.php">Ing software</a></li>
                    <li class="nav-item"><a class="nav-link" href="redes.php">Redes</a></li>
                    <li class="nav-item"><a class="nav-link" href="electronica.php">Electronica</a></li>
                    <li class="nav-item active"><a class="nav-link" href="artefactos.php">Artefactos</a></li>
                </ul>
            </div>
        </div>
    </nav> <!--Nabegacion-->
    <br><br><br>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Infotec</li>
        <li class="breadcrumb-item active">artefactos</li>
    </ol>


    <section class="articulos" style="width:95%; margin: auto">

        <div class="row">

            <div class="col">
                <img src="img/smartphone.svg" alt="" width="70%">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</p>
            </div>

            <div class="col">
                <img src="img/smartphone.svg" alt="" width="70%">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</p>
            </div>

            <div class="col">
                <img src="img/smartphone.svg" alt="" width="70%">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</p>
            </div>

            <div class="col">
                <img src="img/smartphone.svg" alt="" width="70%">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</p>
            </div>


        </div>


        <div class="row" >

            <div class="col">
                <img src="img/smartphone.svg" alt="" width="70%">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</p>
            </div>

            <div class="col">
                <img src="img/smartphone.svg" alt="" width="70%">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</p>
            </div>

            <div class="col">
                <img src="img/smartphone.svg" alt="" width="70%">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</p>
            </div>

            <div class="col">
                <img src="img/smartphone.svg" alt="" width="70%">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</p>
            </div>

        </div>

    </section>

    <br><br><br><br><br><br>

    
    <!-- Footer -->
    <footer class="bg-primary text-center text-white mt-2 py-2">
        <!-- Grid container -->
        <div class="container p-3">
           
            <!-- Grid row -->
            <div class="row justify-content-around">
               
                <form action="" class="bg-primary my-auto col-md-7">
                    <!--Grid row-->
                    <div class="row align-items-center">
                        <!--Grid column-->
                        <div class="col-md-3 ">
                            <p class="pt-2"> <strong>Subcribete</strong></p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <!-- Email input -->
                            <input type="email" id="form5Example2" class="form-control" placeholder="email" />
                        </div> <br> <br>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-3">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-outline-light">Subscribe</button>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
          

                <!-- Section: Social media -->
                <section class="mb-4 clas-md-5 my-auto">
                    <!-- Facebook --><!-- btn-floating -->
                    <a class="btn btn-outline-light m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
                    <!-- Twitter -->
                    <a class="btn btn-outline-light m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>
                    <!-- Google -->
                    <a class="btn btn-outline-light m-1" href="#!" role="button"><i class="fab fa-google"></i></a>
                    <!-- Instagram -->
                    <a class="btn btn-outline-light m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                    <!-- Linkedin -->
                    <a class="btn btn-outline-light m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                    <!-- Github -->
                    <a class="btn btn-outline-light m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- endGrid row -->

            <br><br>
            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                    repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                    eum harum corrupti dicta, aliquam sequi voluptate quas.
                </p>
            </section>
            <!-- Section: Text -->

            
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Copyright:<a class="text-white" href="#">infotec</a>
            </div>
            <!-- Copyright -->
        </div>
        
    </footer>
    <!-- ENDFOOTER -->

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>