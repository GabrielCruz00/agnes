<?php
    $conexion = new mysqli("localhost","root","", "agnes");

    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $pws = $_POST['contrasena'];
    $hash = $_POST['hash'];    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accion.php</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="/assets/password.png" type="image/x-icon">
    <style>
        body {
            color: #ffffff;
            font-size: 30px;
            font-family: 'Courier New', Courier, monospace;
            font-weight: bolder;
            padding: 25px;
        }
    </style>
</head>

<body>
    <main class="form-signin w-100 m-auto">
    <a href="./main.html"><img class="mb-4" src="./assets/password.png" alt="" width="120" height="120"></a>
        <h1 class="h3 mb-3 fw-normal" style="color: #ffff !important;">
        <?php
            if(!$conexion) {
                echo "Conexion fallidad";
            } else {
                $res = $conexion -> query("INSERT INTO usuario VALUES ('$name', '$email', '$hash')"); 
                
                if (!$res) {
                    echo "Ha ocurrido un error. Intente más tarde.";
                } else {
                    
                    echo "Los datos han sido guardados. ¡Gracias!";
                }
            }
        ?>
        </h1>
    </main>
</body>

</html>