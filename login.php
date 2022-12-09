<?php
    $conexion = new mysqli("localhost","root","", "agnes");

    $email = $_POST['email'];
    $hash = $_POST['hash'];    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.php</title>
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
                echo "Hubo un problema. Intente más tarde.";
            } else {
                $res = $conexion -> query("SELECT * FROM usuario WHERE email='$email' AND HASH='$hash' LIMIT 1");
                if(!$res){
                    echo "Hubo un problema. Intente más tarde. 1";
                }
                if($email = mysqli_fetch_assoc($res)){
                    header("Location: ./blog/blog.html");
                } else {
                    echo "Usuario o contraseña invalidos.\nIntente nuevamente.";
                }

            }
        ?>
        </h1>
    </main>
</body>

</html>