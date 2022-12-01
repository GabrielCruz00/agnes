<?php
    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $pws = $_POST['contrasena'];
    $hash = $_POST['hash'];

    $_SESSION['nombre'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $pws;
    $_SESSION['hash'] = $hash;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="shortcut icon" href="/assets/password.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
    <body class="text-center">
        <main class="form-signin w-100 m-auto">
            <form name="formulario" action="./accion.php" method="post" >
            <a href="./index.html"><img class="mb-4" src="./assets/password.png" alt="" width="120" height="120"></a>
                <h1 class="h3 mb-3 fw-normal" style="color: #ffff !important;">¿Los datos son correctos?</h1>
                <div class="form-floating">
                    <input type="text" class="form-control" id="nombre" value="<?php echo $_SESSION['nombre']; ?>" placeholder="Nombre" name="nombre" required>
                    <label for="nombre">Nombre</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" value="<?php echo $_SESSION['email']; ?>" placeholder="email@dominio.com" name="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="contrasena" name="contrasena" value="<?php echo $_SESSION['password']; ?>" placeholder="Contraseña" required>
                    <label for="contrasena">Contraseña</label>
                </div>
                <input type="hidden" id="hash" value="<?php echo $_SESSION['hash']; ?>" name="hash">
                <button class="w-100 btn btn-lg btn-primary" type="submit" id="btn">Looks Good!</button>
                <p class="mt-5 mb-3 text-muted" style="color: #ffff !important;">©Made with bootstrap 5.2, HTML5, CSS, JS & PHP, by Rodrigo Infante(2022).</p>
            </form>
        </main>
    
    </body>
</html>