<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de grados</title>
</head>
<body>
    <style>
        body{
        background-color: aqua;    
        }
          
    </style>
    <H1>Convertidor de Temperatura</H1>

    <form action="Convertidor.php" method="post">
    Grados: <input type="Grados Fahrenheit" name="grados" placeholder="Grados Fahrenheit"><br><br>
    <input class="Conv" type="submit" value="Convertir"><br><br>
    
    <?php

    $grados = (5 / 9 *($_POST['grados'] - 32));
    echo "<h2>Los Grados Celsios son:". $grados."</h2>";
    ?>
</body>
</html>