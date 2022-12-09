<?php
    $conexion = new mysqli("localhost","root","", "agnes");

    $email = $_POST['email'];
    $asunto = $_POST['asunto'];    
    $comment = $_POST['comment'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/"/>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./assets/password.png" type="image/x-icon">
</head>
<body translate="no">
    <video autoplay playsinline muted loop>
        <source src="./assets/network.mp4" type="video/mp4">
    </video>
    <header>
        <div class="containerNav">
            <p class="logo">RodrigoBlogPost</p>
        </div>
    </header>
    <div class="box">
        <div id="overlay">
            <div class="image">
                <div class="trick">
                </div>
            </div>
            <ul class="text">
                <span class="text text-slider-items-noloop">
                    Rodrigo Alfonso Infante Morelos
                </span>
                <strong class="text-slider-noloop"></strong> 
            </ul>
            <h3 class="text1">
                <span class="text-slider-items">
                    ,Ingeniero en Computación, 
                    "El mundo es un buen lugar por el que vale la pena luchar"  -Ernest Hemingway
                </span>
                <strong class="text-slider"></strong> 
            </h3>
            <div class="socialContainer">
                <div class="row" id="socialNetworks">
                </div>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading " role="tab" id="headingOne">
                        <h4 class="panel-title ">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="" aria-controls="collapseOne" class="">
                            <div class="btn btn-danger btn-outline btn-lg ">
                                CONTACTO
                            </div>
                        </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse in" role="tabpanel" aria-labelledby="headingOne" style="height: auto;">
                        <div class="panel-body">
                            <p>Dirección: Gustavo A. Madeo. <br>
                            Email: roodrigoenderman@gmail.com <br>
                            Telefono: 55555555 <br>
                            Celular: 55555555</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading " role="tab" id="headingTwo">
                        <h4 class="panel-title ">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                            <div class="btn btn-danger btn-outline btn-lg ">
                                EDUCACIÓN
                            </div>
                        </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" style="height: auto;">
                        <div class="panel-body">
                            <p>Primaria: Perla S. Book <br>
                            Secundaria: técnica no. 30 Ing. Alejandro Guillot Schaffino <br>
                            Preparatoria: Colegio de Ciencias y Humanidades Vallejo <br>
                            Universidad: Facultad de Estudios Superiores Aragón. Ing en computación(Cursando)</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading " role="tab" id="headingThree">
                        <h4 class="panel-title ">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">
                            <div class="btn btn-danger btn-outline btn-lg ">
                                SOBRE MI
                            </div>
                        </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" style="height: auto;">
                        <div class="panel-body">
                            <p>
                                Mi nombre es Rodrigo Alfonso Infante Morelos, actualmente estoy terminando mis estudios de la carrera de ing. en computacion
                                y de manera simultanea estoy estudiando actuacion, doblaje y locucion en la escuela Aftermoon films, considero que soy 
                                una persona muy sociable y leal, se trabajar en equipo y mi comida favorita es el pozole, por ultimo, la forma en la
                                que trato de vivir es lo que alguna ves escribio Ernest Hemingway: "El mundo es un buen lugar por el que vale la pena luchar"</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <div class="btn btn-danger btn-outline btn-lg">
                                    DATOS IMPORTANTES
                                </div>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                                <p>• Dominio del idioma ingles y mi lengua materna es el español <br>
                                    • Manejo 3 lenguajes de programación los cuales son C++, python y Java. <br>
                                    • Mis hobbys son los videojuegos, dibujar y Comer.</p> 
                        </div>
                    </div>
                </div>
            </div>    
            <div class="form-group panel-group">
                <h3 class="txt">Contactame:</h3>
                <form role="form" action="./comment.php" method="post">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="email@dominio.com" name="email" required>
                        <label for="asunto">Asunto</label><br>
                        <input type="text" class="form-control" name="asunto" id="asunto" placeholder="" required> <br>
                        <label for="comment">Comentario</label><br>
                        <textarea class="form-control" rows="3" name="comment" id="comment" required></textarea><br>
                    <button type="submit" class="btn btn-success btn-danger">Enviar</button>
                </form>
                <?php
                     if(!$conexion) {
                        echo "Conexion fallidad";
                    } else {
                        $res = $conexion -> query("INSERT INTO comentarios VALUES ('$email', '$asunto', '$comment')"); 
                        
                        if (!$res) {
                            echo "Ha ocurrido un error. Intente más tarde.";
                        } else {
                            
                            echo "Su comentario ha sido enviado. Gracias!";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <footer id="footer" class="py-5 footer-color">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">
                    <svg
                    version="1.1"
                    id="up_arrow_svg"
                    width="30"
                    height="30"
                    fill="#FFF"
                    stroke="#FFF"
                    x="0px"
                    y="0px"
                    viewBox="0 0 300.003 300.003">
                    <g>
                        <g>
                        <path
                            d="M150,0C67.159,0,0.001,67.159,0.001,150c0,82.838,67.157,150.003,149.997,150.003S300.002,232.838,300.002,150
                            C300.002,67.159,232.842,0,150,0z M217.685,189.794c-5.47,5.467-14.338,5.47-19.81,0l-48.26-48.27l-48.522,48.516
                            c-5.467,5.467-14.338,5.47-19.81,0c-2.731-2.739-4.098-6.321-4.098-9.905s1.367-7.166,4.103-9.897l56.292-56.297
                            c0.539-0.838,1.157-1.637,1.888-2.368c2.796-2.796,6.476-4.142,10.146-4.077c3.662-0.062,7.348,1.281,10.141,4.08
                            c0.734,0.729,1.349,1.528,1.886,2.365l56.043,56.043C223.152,175.454,223.156,184.322,217.685,189.794z"
                        />
                        </g>
                    </g>
                    </svg>
                </a>
            </p>
            <div class="row">
                <p class="text-lg-center text-color-white mb-3">
                    <span>Página realizada por Rodrigo Infante </span>
                    <span>
                        <svg
                        width="20"
                        height="20"
                        class="svg-inline--fa fa-copyright"
                        aria-hidden="true"
                        focusable="false"
                        data-prefix="far"
                        data-icon="copyright"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                        data-fa-i2svg="">
                            <path fill="currentColor" d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM255.1 176C255.1 176 255.1 176 255.1 176c21.06 0 40.92 8.312 55.83 23.38c9.375 9.344 24.53 9.5 33.97 .1562c9.406-9.344 9.469-24.53 .1562-33.97c-24-24.22-55.95-37.56-89.95-37.56c0 0 .0313 0 0 0c-33.97 0-65.95 13.34-89.95 37.56c-49.44 49.88-49.44 131 0 180.9c24 24.22 55.98 37.56 89.95 37.56c.0313 0 0 0 0 0c34 0 65.95-13.34 89.95-37.56c9.312-9.438 9.25-24.62-.1562-33.97c-9.438-9.312-24.59-9.219-33.97 .1562c-14.91 15.06-34.77 23.38-55.83 23.38c0 0 .0313 0 0 0c-21.09 0-40.95-8.312-55.89-23.38c-30.94-31.22-30.94-82.03 0-113.3C214.2 184.3 234 176 255.1 176z"></path>
                        </svg>
                    </span>
                    <span id="yearIdentifier"></span>
                </p>
            </div>
            <div class="row">
                <p class="text-lg-center fw-lighter text-color-grey mb-3" style="color: #031017">
                    Desarrollada con Bootstrap, HTML5, CSS y JavaScript.
                </p>
            </div>
        </div>
    </footer>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./script.js"></script>
</body>
</html>