<!DOCTYPE html>

<html lang="es-MX">

    <head>
        <meta name="author" content="Ian Svén">
        <meta name="description" content="Práctica 10">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="extra/icon.png">
        <link rel="stylesheet" type="text/css" href="extra/style-p10.css">
        <link rel="stylesheet" type="text/css" href="../css/w3.css">
        <link rel="stylesheet" type="text/css" href="../css/layout.css">

        <title> Práctica No. 10 </title>

    </head>

    <body>

        <div class="flex-container">

            <nav class="nav w3-light-gray">
                <ul>
                    <p> <strong> Navegación </strong> </p>
                    <li> <a href="../practica-1/p1.html" class=w3-button> Práctica 1 </a> </li>
                    <li> <a href="../practica-2/p2.html" class=w3-button> Práctica 2 </a> </li>
                    <li> <a href="../practica-3/p3.html" class=w3-button> Práctica 3 </a> </li>
                    <li> <a href="../practica-4/p4.html" class=w3-button> Práctica 4 </a> </li>
                    <li> <a href="../practica-5/p5.html" class=w3-button> Práctica 5 </a> </li>
                    <li> <a href="../practica-6/p6.html" class=w3-button> Práctica 6 </a> </li>
                    <li> <a href="../practica-7/p7.html" class=w3-button> Práctica 7 </a> </li>
                    <li> <a href="../practica-8/p8.html" class=w3-button> Práctica 8 </a> </li>
                    <li> <a href="../practica-9/p9.html" class=w3-button> Práctica 9 </a> </li>
                    <li> <a href="../practica-10/p10.html" class=w3-button> Práctica 10 </a> </li>
                    <br> <br>
                </ul>
            </nav>

            <header> <h1 style="color:#FFFFFF;text-shadow:none;"> <b> Práctica 10 </b> </h1> </header>

                <article class="article">
                <center>
                <h1> <b> Seleccione un color </b> v2 </h1>

                <?php
                    if (empty($_POST{'iro'})) {
                        echo "<p style=font-size:20px>No se seleccionó ningún color.</p>";
                    } 
                    else {
                        $iro=$_POST{'iro'};
                        $cant=count($iro);
                        if ($cant=='1') {
                            echo "<p style=font-size:20px>Se ha seleccionado un color:</p>";
                            for ($x=0; $x<$cant; $x++) {
                                echo "<p style=font-size:20px>";
                                echo $iro[$x]. ".</p>";
                            } 
                        }
                        else {
                            echo "<p style=font-size:20px>Se han seleccionado $cant colores:</p>";
                            echo "<p style=font-size:20px>";
                            for ($x=0; $x<$cant; $x++) {
                                echo $iro[$x];
                                if ($x < ($cant-2)) {
                                    echo ", ";
                                }
                                elseif ($x < ($cant-1)) {
                                    echo " y ";
                                }
                            }
                            echo '.</p>';
                        }
                    } 
                ?>
                </center>
            </article>

        </div>

        <div class="footer">
            <div class="w3-bar w3-bottom w3-light-gray w3-wide w3-padding-8 w3-card-2">
                <a href="../index.html" class="w3-margin-left w3-bar-item w3-button"> <b> Ian Svén </b> </a>
            </div>
        </div>

    </body>

</html>
