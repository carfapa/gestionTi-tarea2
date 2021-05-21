<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infotec</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet"> load all styles -->

    <!-- style -->
    <link rel="stylesheet" href="css/main.css">

    <!-- SCROLL REVEAL -->
    <script  src="https://unpkg.com/scrollreveal"> </script>
    <script src="js/main.js"></script>


    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">


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
                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="telecomunicaciones.php">Telecomunicacione</a></li>
                <li class="nav-item"><a class="nav-link" href="ing_software.php">Ing software</a></li>
                <li class="nav-item"><a class="nav-link" href="redes.php">Redes</a></li>
                <li class="nav-item"><a class="nav-link" href="electronica.php">Electronica</a></li>
                <li class="nav-item"><a class="nav-link" href="artefactos.php">Artefactos</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php" style="border: 1px solid blue; border-radius: 5px">Login</a></li>
            </ul>
        </div>
    </div>
</nav> <!--Nabegacion-->
<br><br><br>


<main>
    <h3>Iniciar sesión</h3>
    <form action="index.php" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" require class="form-control" placeholder="correo@gmail.com">
        </div>
        <div class="form-group" >
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" require class="form-control">
        </div>

        <div class="form-group" >
            <input type="submit" name="btn_iniciar" value="Iniciar sesion" class="btn btn-primary">
        </div>
        
    </form>
    

    
</main>

<script src="js/formulario.js"></script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>



<!-- Footer -->
<footer class="bg-primary text-center text-white mt-2 py-2">
    <!-- Grid container -->
    <div class="container p-3">
        <!-- Grid row -->
        <div class="row justify-content-around">

            <form action="validacionSupcricion.php" class="bg-primary my-auto col-md-7">
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
                        <input type="email" id="email" class="form-control" placeholder="email" required/>
                    </div> <br> <br>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-3">
                        <!-- Submit button -->
                        <input type="submit" name="btn_subcribir" class="btn btn-outline-light" value="Subscribe">
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
                <a class="btn btn-outline-light m-1" href="https://github.com/carfapa/gestionTi-tarea2" target="_blank" role="button"><i class="fab fa-github"></i></a>
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