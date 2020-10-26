<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css\login.css">
    <link rel="stylesheet" href="librerias\BootStrap4\bootstrap.min.css">
</head>

<body>


    <div class="container">
        <h1 class="text-center">registro de usuario </h1>
        <hr>
        <div class="row">

            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="frmRegistro">


                    <label for="">Nombre personal</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                    <label for="">Fecha de nacimiento</label>
                    <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">
                    <label for="">Email o correo</label>
                    <input type="text" name="correo" id="correo" class="form-control">
                    <label for="">Nombre de usuario</label>
                    <input type="text" name="usuario" id="usuario" class="form-control">
                    <label for="">Password o contraseña</label>
                    <input type="text" name="contraseña" id="contraseña" class="form-control">

                    <br>
                    <div class="row">
                        <div class="col-sm-6 text-left"> <button class="btn btn-primary">Registrar</button></div>
                        <div class="col-sm-6 text-right"> <a href="index.php" class="btn btn-success">Login</a></button></div>
                    </div>




                </form>
            </div>
            <div class="col-sm-4"></div>


        </div>

    </div>
    <script src="librerias\sweetalert.min.js"></script>

</body>

</html>