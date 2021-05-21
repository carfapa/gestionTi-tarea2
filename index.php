
<?php

if(isset($_POST['btn_iniciar'])){
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];


    if (!empty($email_login) && !empty($password_login)){
        echo "<script>
        alert('Te has logeado');
    </script>";
    }
}
?>



<?php
    if(isset($_POST['enviar'])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $motivo = $_POST["motivo"];
    }
    
?>

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
                pause: 3000
                //controls:false
            });
        });
    </script>

    <!-- LEAFLET Libreria para crear mapa -->
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"/>
    <style> /*Añadiendo el estilo de nuestro mapa*/
        #map{
            width: 100%;
            height: 700px;
        }
    </style>
    <!-- Fin añadiendo CSS -->


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
    <br>
    <header class="mt-5">
        <div class="container my-2">
            <div class="row">
                <div class="col-md-6 my-auto">
                    <h1 class=" display-4">Lorem, ipsum dolor.</h1>
                    <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut sunt natus officiis blanditiis dolorum! Qui voluptates quidem illo fugit deserunt vel dolore quisquam temporibus consectetur earum, molestias eum, porro doloremque ipsam soluta necessitatibus tenetur accusamus magni quos! Voluptas, quam temporibus!
                    </p>
                    <a href="#" class="btn  btn-outline-primary mt-2 header-btn">Read more</a>
                </div>

                <div class="col-md-6 none-b">
                    <ul class="bxslider">
                        <li class="slaider-item"><img src="img/rdes1.jpeg" alt="comun" width="90%"></li>
                        <li class="slaider-item">
                            <img src="img/telecom1.jpeg" alt="comun" width="90%" height="300px">
                        </li>
                        <!--<li class="slaider-item"><img src="img/desarrollador-de-software.svg" width="90%" height="300px" alt=""> </li>-->
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <section style="background: rgb(233, 236, 239);">
        <div class="container py-2 pb-4">
            <h2 class=" text-center py-2">Conocé nuestros nuevos articulos</h2>
            <div class="row">

                <div class="col">
                    <img src="img/desarrollador-de-software.svg" alt="" width="75%">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, totam. </p>
                </div>
                <div class="col">
                    <img src="img/desarrollador-de-software.svg" alt="" width="75%">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, dolorum. </p>
                </div>
                <div class="col">
                    <img src="img/desarrollador-de-software.svg" alt="" width="75%">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, minima. </p>
                </div>

            </div>
        
        </div>
    </section>

    <section>
        <div class="container py-2">
            <div class="row">
                <div class="col-md-6 my-auto">
                    <h2 class="my-3" id="title-contact">Contactanos</h2>
                   <form id="form-contact" class="card" actioon="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class=" form-control" placeholder="Nombre" name="nombre" value="<?php if(isset($nombre)) echo $nombre ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                    <input type="text" class=" form-control" placeholder="Apellido" name="apellido" value="<?php if(isset($apellido)) echo $apellido ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class=" form-control" placeholder="Email" name="correo" value="<?php if(isset($correo)) echo $correo ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class=" form-control" placeholder="motivo" name="motivo" value="<?php if(isset($motivo)) echo $motivo ?>">
                        </div>
                        <div class="form-group">
                            <textarea cols="30" rows="8" class="form-control" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-outline-primary" name="enviar">
                        </div>
                        <!-- <div class="form-group">
                           <button type="submit" class="form-control btn btn-outline-primary" name="enviar">Enviar</button>
                        </div> -->
                        <?php
                            include("validacionContactenos.php");
                        ?>
                   </form>
                </div>
                <div class="col-md-5 m-auto">
                    <img src="img/letra.svg" alt="" width="100%">
                </div>
            </div>
        </div>
    </section>


    <section id="map">
        <script type="text/javascript">
            let latitud;
            let longitud;
            navigator.geolocation.getCurrentPosition(
                function (posicion) {
                    latitud = posicion.coords.latitude;
                    longitud = posicion.coords.longitude;
                },
                function (errors) {
                    if(errors.code = 1){
                        console.log(errors.code);
                    }
                }
            );
            /*18/5.68164/-76.64711*/
            //Cargando nuestro mapa
            var mapsipe = L.map('map').
            setView([5.68164, -76.64711],
                18); //[38.6202, -0.5731] es la latitud y longitud de la zona que queremos mostrar, en nuestro caso Ibi
            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
                maxZoom: 10
            }).addTo(mapsipe);

            //MARCADOR1
            var marker = L.marker([5.68164, -76.64711]).addTo(mapsipe);
            marker.bindPopup("<b>Hola!</b><br>Esta es nuestra ubicacion.").openPopup();
        </script>
    </section>


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