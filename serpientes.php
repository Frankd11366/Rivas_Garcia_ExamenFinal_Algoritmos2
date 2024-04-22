<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serpientes y Escaleras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background-image: url(/images/fondo.png);
        background-size: 1300px;
    }

    #principal {
        background-color: rgba(255, 204, 0, 0.589);
    }
</style>

<body>
    <!----------------------------CONDICIONES JUGADOR 1------------------------------->
    <?php
    $jugador1casillaAcumulado = 0;
    $dado1 = 0;
    $filaActual1 = 0;
    if (isset($_POST['valor1'])) {
        $dado1 = $vrandom1 = rand(1, 12);
        $valorantiguo1 = $_POST['valor1'];
        $jugador1casillaAcumulado = $valorantiguo1 + $dado1;

        switch ($jugador1casillaAcumulado) {
            case '12':
                $jugador1casillaAcumulado = 52;
                $mensaje1 = "¡ENHORABUENA! EL JUGADOR 1 CAYÓ EN LA CASILLA 12 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 52";
                $alerta1 = 1;
                break;
            case '17':
                $jugador1casillaAcumulado = 61;
                $mensaje1 = "¡ENHORABUENA! EL JUGADOR 1 CAYÓ EN LA CASILLA 17 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 61";
                $alerta1 = 1;
                break;
            case '46':
                $jugador1casillaAcumulado = 93;
                $mensaje1 = "¡ENHORABUENA! EL JUGADOR 1 CAYÓ EN LA CASILLA 46 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 93";
                $alerta1 = 1;
                break;
            case '82':
                $jugador1casillaAcumulado = 99;
                $mensaje1 = "¡ENHORABUENA! EL JUGADOR 1 CAYÓ EN LA CASILLA 82 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 99";
                $alerta1 = 1;
                break;
            case '31':
                $jugador1casillaAcumulado = 25;
                $mensaje1 = " ¡QUE MALA SUERTE! EL JUGADOR 1 CAYÓ EN LA CASILLA 31 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 25";
                $alerta1 = 1;
                break;
            case '75':
                $jugador1casillaAcumulado = 1;
                $mensaje1 = "¡QUE MALA SUERTE! EL JUGADOR 1 CAYÓ EN LA CASILLA 75 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 1";
                $alerta1 = 1;
                break;
            case '90':
                $jugador1casillaAcumulado = 11;
                $mensaje1 = "¡QUE MALA SUERTE! EL JUGADOR 1 CAYÓ EN LA CASILLA 90 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 11";
                $alerta1 = 1;
                break;
            case '97':
                $jugador1casillaAcumulado = 33;
                $mensaje1 = "¡QUE MALA SUERTE! EL JUGADOR 1 CAYÓ EN LA CASILLA 97 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 33";
                $alerta1 = 1;
                break;


            default:
                if ($dado1 > 1) {
                    $mensaje1 = "USTED AVANZO $dado1 CASILLAS";
                } else {
                    $mensaje1 = "USTED AVANZO $dado1 CASILLAS";
                }
                $alerta1 = 1;
                break;
        }
    }

    ?>


    <!----------------------------CONDICIONES JUGADOR 2------------------------------->
    <?php
    $jugador2casillaAcumulado = 0;
    $dado2 = 0;
    $filaActual2 = 0;
    if (isset($_POST['valor2'])) {
        $dado2 = $vrandom2 = rand(1, 12);
        $valorantiguo2 = $_POST['valor2'];
        $jugador2casillaAcumulado = $valorantiguo2 + $dado2;

        switch ($jugador2casillaAcumulado) {
            case '12':
                $jugador2casillaAcumulado = 52;
                $mensaje2 = "¡ENHORABUENA! EL JUGADOR 2 CAYÓ EN LA CASILLA 12 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 52";
                $alerta2 = 1;
                break;
            case '17':
                $jugador2casillaAcumulado = 61;
                $mensaje2 = "¡ENHORABUENA! EL JUGADOR 2 CAYÓ EN LA CASILLA 17 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 61";
                $alerta2 = 1;
                break;
            case '46':
                $jugador2casillaAcumulado = 93;
                $mensaje2 = "¡ENHORABUENA! EL JUGADOR 2 CAYÓ EN LA CASILLA 46 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 93";
                $alerta2 = 1;
                break;
            case '82':
                $jugador2casillaAcumulado = 99;
                $mensaje2 = "¡ENHORABUENA! EL JUGADOR 2 CAYÓ EN LA CASILLA 82 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 99";
                $alerta2 = 1;
                break;
            case '31':
                $jugador2casillaAcumulado = 25;
                $mensaje2 = " ¡QUE MALA SUERTE! EL JUGADOR 2 CAYÓ EN LA CASILLA 31 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 25";
                $alerta2 = 1;
                break;
            case '75':
                $jugador2casillaAcumulado = 1;
                $mensaje2 = "¡QUE MALA SUERTE! EL JUGADOR 2 CAYÓ EN LA CASILLA 75 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 1";
                $alerta2 = 1;
                break;
            case '90':
                $jugador2casillaAcumulado = 11;
                $mensaje2 = "¡QUE MALA SUERTE! EL JUGADOR 2 CAYÓ EN LA CASILLA 90 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 11";
                $alerta2 = 1;
                break;
            case '97':
                $jugador2casillaAcumulado = 33;
                $mensaje2 = "¡QUE MALA SUERTE! EL JUGADOR 2 CAYÓ EN LA CASILLA 97 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 33";
                $alerta2 = 1;
                break;


            default:
                if ($dado2 > 1) {
                    $mensaje2 = "USTED AVANZO $dado2 CASILLAS";
                } else {
                    $mensaje2 = "USTED AVANZO $dado2 CASILLAS";
                }
                $alerta2 = 1;
                break;
        }
    }

    ?>

    <!----------------------------CONDICIONES JUGADOR 3------------------------------->
    <?php
    $jugador3casillaAcumulado = 0;
    $dado3 = 0;
    $filaActual3 = 0;
    if (isset($_POST['valor3'])) {
        $dado3 = $vrandom3 = rand(1, 12);
        $valorantiguo3 = $_POST['valor3'];
        $jugador3casillaAcumulado = $valorantiguo3 + $dado3;

        switch ($jugador3casillaAcumulado) {
            case '12':
                $jugador3casillaAcumulado = 52;
                $mensaje3 = "¡ENHORABUENA! EL JUGADOR 2 CAYÓ EN LA CASILLA 12 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 52";
                $alerta3 = 1;
                break;
            case '17':
                $jugador3casillaAcumulado = 61;
                $mensaje3 = "¡ENHORABUENA! EL JUGADOR 2 CAYÓ EN LA CASILLA 17 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 61";
                $alerta3 = 1;
                break;
            case '46':
                $jugador3casillaAcumulado = 93;
                $mensaje3 = "¡ENHORABUENA! EL JUGADOR 2 CAYÓ EN LA CASILLA 46 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 93";
                $alerta3 = 1;
                break;
            case '82':
                $jugador3casillaAcumulado = 99;
                $mensaje3 = "¡ENHORABUENA! EL JUGADOR 2 CAYÓ EN LA CASILLA 82 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 99";
                $alerta3 = 1;
                break;
            case '31':
                $jugador3casillaAcumulado = 25;
                $mensaje3 = " ¡QUE MALA SUERTE! EL JUGADOR 2 CAYÓ EN LA CASILLA 31 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 25";
                $alerta3 = 1;
                break;
            case '75':
                $jugador3casillaAcumulado = 1;
                $mensaje3 = "¡QUE MALA SUERTE! EL JUGADOR 2 CAYÓ EN LA CASILLA 75 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 1";
                $alerta3 = 1;
                break;
            case '90':
                $jugador3casillaAcumulado = 11;
                $mensaje3 = "¡QUE MALA SUERTE! EL JUGADOR 2 CAYÓ EN LA CASILLA 90 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 11";
                $alerta3 = 1;
                break;
            case '97':
                $jugador3casillaAcumulado = 33;
                $mensaje3 = "¡QUE MALA SUERTE! EL JUGADOR 2 CAYÓ EN LA CASILLA 97 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 33";
                $alerta3 = 1;
                break;


            default:
                if ($dado3 > 1) {
                    $mensaje3 = "USTED AVANZO $dado3 CASILLAS";
                } else {
                    $mensaje3 = "USTED AVANZO $dado3 CASILLAS";
                }
                $alerta3 = 1;
                break;
        }
    }

    ?>

    <!------------- AQUI EMPIEZAN LOS CONTROLES DEL JUEGO  ----------------->

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jugador1 = $_POST["nombre1"];
        $jugador2 = $_POST["nombre2"];
        $jugador3 = $_POST["nombre3"];
    }
    ?>
    <!----------------------------JUGADOR 1------------------------------->

    <div id="principal" class="row p-1">
        <h1>JUEGO DE SERPIENTES Y ESCALERAS</h1>
        <div class="col-4">
            <?php echo "<h3> $jugador1"; ?> <img src="/images/poker1.png" alt="" style="width:60px;"></h3>
            <form action="/serpientes.php" method="post">
                <div class="row">
                    <div class="col-1g-4">
                        <label class="form-label" for="valor1">ACUMULADO</label><input class="form-control" type="text" id="valor1" name="valor1" min="1" max="100" value="<?= $jugador1casillaAcumulado ?>" required>
                    </div>
                    <div class="col-1g-4">
                        <label class="form-label" for="dado1">DADO</label><input class="form-control" type="text" id="dado1" name="dado1" min="1" max="6" value="<?= $dado1 ?>" required>
                    </div>
                    <div class="col-1g-4">
                        <input type="hidden" id="nombre1" name="nombre1" min="1">
                    </div>
                    <div class="col-1g-4">
                        <input type="hidden" id="nombre2" name="nombre2" min="1">
                    </div>
                    <div class="col-1g-4">
                        <input type="hidden" id="nombre3" name="nombre3" min="1">
                    </div>

                    <div class="col-1g-4">
                        <input type="submit" id="enviar1" name="enviar1" class="btn btn-success" value="TIRAR">
                    </div>
                </div>
                <div class="row mt-3"></div>
            </form>
            <div>
                <?php
                if ($dado1 > 0) {

                ?>
                    <div style="border:solid"><br>
                        <?php
                        if ($jugador1casillaAcumulado < 100) {
                        ?>
                            <h3>TIRO</h3>
                            <h4><?= $dado1 ?></h4>

                            <h4><?= $mensaje1 ?></h4>
                    </div>
                <?php } else {
                ?>
                    <h1>FELICIDADES GANASTE</h1>
            <?php
                        }
                    } ?>
            </div>
        </div>

        <!----------------------------JUGADOR 2------------------------------->

        <div class="col-4">
            <?php echo "<h3> $jugador2"; ?> <img src="/images/poker2.png" alt="" style="width:60px;"></h3>
            <form action="/serpientes.php" method="post">
                <div class="row">
                    <div class="col-1g-4">
                        <label class="form-label" for="valor2">ACUMULADO</label><input class="form-control" type="text" id="valor2" name="valor2" min="1" max="100" value="<?= $jugador2casillaAcumulado ?>" required>
                    </div>
                    <div class="col-1g-4">
                        <label class="form-label" for="dado2">DADO</label><input class="form-control" type="text" id="dado2" name="dado2" min="1" max="6" value="<?= $dado2 ?>" required>
                    </div>
                    <div class="col-1g-4">
                        <input type="hidden" id="nombre1" name="nombre1" min="1">
                    </div>
                    <div class="col-1g-4">
                        <input type="hidden" id="nombre2" name="nombre2" min="1">
                    </div>
                    <div class="col-1g-4">
                        <input type="hidden" id="nombre3" name="nombre3" min="1">
                    </div>
                    <div class="col-1g-4">
                        <input type="submit" id="enviar2" name="enviar2" class="btn btn-success" value="TIRAR">
                    </div>
                </div>
            </form>
            <div>
                <?php
                if ($dado2 > 0) {

                ?>
                    <div style="border:solid"><br>
                        <?php
                        if ($jugador2casillaAcumulado < 100) {
                        ?>
                            <h3>TIRO</h3>
                            <h4><?= $dado2 ?></h4>

                            <h4><?= $mensaje2 ?></h4>
                    </div>
                <?php } else {
                ?>
                    <h1>FELICIDADES GANASTE</h1>
            <?php
                        }
                    } ?>
            </div>
        </div>

        <!----------------------------JUGADOR 3------------------------------->

        <div class="col-4">
            <?php echo "<h3> $jugador3"; ?> <img src="/images/poker3.png" alt="" style="width:60px;"></h3>
            <form action="/serpientes.php" method="post">
                <div class="row">
                    <div class="col-1g-4">
                        <label class="form-label" for="valor3">ACUMULADO</label><input class="form-control" type="text" id="valor3" name="valor3" min="1" max="100" value="<?= $jugador3casillaAcumulado ?>" required>
                    </div>
                    <div class="col-1g-4">
                        <label class="form-label" for="dado3">DADO</label><input class="form-control" type="text" id="dado3" name="dado3" min="1" max="6" value="<?= $dado3 ?>" required>
                    </div>
                    <div class="col-1g-4">
                        <input type="hidden" id="nombre1" name="nombre1" min="1">
                    </div>
                    <div class="col-1g-4">
                        <input type="hidden" id="nombre2" name="nombre2" min="1">
                    </div>
                    <div class="col-1g-4">
                        <input type="hidden" id="nombre3" name="nombre3" min="1">
                    </div>
                    <div class="col-1g-4">
                        <input type="submit" id="enviar3" name="enviar3" class="btn btn-success" value="TIRAR">
                    </div>
                </div>
            </form>
            <div>
                <?php
                if ($dado3 > 0) {

                ?>
                    <div style="border:solid"><br>
                        <?php
                        if ($jugador3casillaAcumulado < 100) {
                        ?>
                            <h3>TIRO</h3>
                            <h4><?= $dado3 ?></h4>

                            <h4><?= $mensaje3 ?></h4>
                    </div>
                <?php } else {
                ?>
                    <h1>FELICIDADES GANASTE</h1>
            <?php
                        }
                    } ?>
            </div>
        </div>
        <div class="col-3 m-5 p-5">
            <div class="col-1g-4">
                <a href="/login.php" id="enviar" name="enviar" class="btn btn-danger">REINICIAR JUEGO</a>
            </div>
        </div>

        <!------------------------POSICION SERPIENTES Y TABLERO --------------------------->
        <div class="col-6">
            <img src="/images/escalera1.png" alt="" style="z-index:2; margin-top:10px; margin-left:360px; position: absolute;
                    width: 70px; height:380px; transform: rotate(20deg)">
            <img src="/images/escalera2.png" alt="" style="z-index:2; margin-top:160px; margin-left:80px; position: absolute;
                    width: 70px; height:400px; transform: rotate(150deg)">
            <img src="/images/escalera_corta.png" alt="" style="z-index:2; margin-top:25px; margin-left:75px; position: absolute;
                    width: 50px; height:100px; transform: rotate(0deg)">
            <img src="/images/escalera_corta.png" alt="" style="z-index:2; margin-top:280px; margin-left:495px; position: absolute;
                    width: 70px; height:250px; transform: rotate(0deg)">
            <img src="/images/serpiente_larga_rosa.png" alt="" style="z-index:2; margin-top:-50px; margin-left:280px; position: absolute;
                    width: 90px; height:500px; transform: rotate(-40deg)">
            <img src="/images/serpiente_morada.png" alt="" style="z-index:2; margin-top:250px; margin-left:400px; position: absolute;
                    width: 100px; height:390px; transform: rotate(90deg)">
            <img src="/images/serpiente_pequeña.png" alt="" style="z-index:2; margin-top:40px; margin-left:570px; position: absolute;
                    width: 80px; height:480px;">
            <img src="/images/serpiente_larga_verde.png" alt="" style="z-index:2; margin-top:100px; margin-left:130px; position: absolute;
                    width: 120px; height:550px; transform: rotate(30deg)">
            <?php
            if ($jugador1casillaAcumulado == 0) {
            ?>
                <img src="/images/poker1.png" alt="" style="z-index:2; width:60px; height:50px; margin-top:570px;
                        margin-left:-70px; position:absolute;">
                <img src="/images/poker2.png" alt="" style="z-index:2; width:60px; height:50px; margin-top:510px;
                        margin-left:-70px; position:absolute;">
                <img src="/images/poker3.png" alt="" style="z-index:2; width:60px; height:50px; margin-top:450px;
                        margin-left:-70px; position:absolute;">
            <?php
            }
            ?>
            <table class="tablero" style="z-index: 1;">
                <?php
                $colores = ['yellow', 'white', 'skyblue', 'orange', 'grey'];
                $NoCasilla = 101;
                $coloranterior = '';
                for ($fila = 0; $fila < 10; $fila++) {
                    echo "<tr>";
                    for ($columna = 0; $columna < 10; $columna++) {
                        echo "<td>";
                        $colorquetoca = rand(0, 4);
                        while ($colorquetoca == $coloranterior) {
                            $colorquetoca = rand(0, 4);
                        }
                        $coloranterior = $colorquetoca;

                        if ($fila > 0) {
                            if ($columna == 0) {
                                $NoCasilla -= 10;
                            } else {
                                if ($fila % 2 == 0) {
                                    $NoCasilla--;
                                } else {
                                    $NoCasilla++;
                                }
                            }
                        } else {
                            $NoCasilla--;
                        }

                        if ($jugador1casillaAcumulado == $NoCasilla && $jugador1casillaAcumulado > 0 && $jugador1casillaAcumulado < 101) {
                            echo "<div class='ficha' style='width: 60px; height: 60px; border: solid; background-color: $colores[$colorquetoca]'><img src='/images/poker1.png' alt='' style='z-index: 2; width: 60px; height: 60px;'></div>";
                        } else {
                            echo "<div class='ficha' style='width: 60px; height: 60px; border: solid; background-color: $colores[$colorquetoca]'><p>$NoCasilla</p></div>";
                        }
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>

</body>

</html>