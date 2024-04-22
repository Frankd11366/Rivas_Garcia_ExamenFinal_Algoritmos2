<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background-image: url(/images/serpents.png);
        background-size: 1400px;
    }

    #principal {
        background-color: rgba(170, 249, 51, 0.388);
    }

    h1 {
        color: white;
    }
</style>

<body>
    <div id="principal" class=" m-5 row p-1">
        <div class="col-3"></div>
        <div class="col-6">
            <h1>BIENVENIDO AL JUEGO DE SERPIENTES Y ESCALERAS PORFAVOR INGRESEN LOS DATOS DE LOS 3 JUGADORES</h1>
            <form method="post" action="/serpientes.php">
                <label for="nombre1">Ingrese el nombre del Primer Jugador</label><br>
                <input type="text" id="nombre1" name="nombre1" min="1" required><br><br>
                <label for="nombre2">Ingrese el Nombre del Segundo Jugador</label><br>
                <input type="text" id="nombre2" name="nombre2" min="1" required><br><br>
                <label for="nombre3">Ingrese el Nombre del Tercer Jugador</label><br>
                <input type="text" id="nombre3" name="nombre3" min="1" required><br><br>
                <input type="submit" value="Enviar Nombres">
            </form>
        </div>
        <div class="col-3 text-center"></div>
    </div>

</body>

</html>