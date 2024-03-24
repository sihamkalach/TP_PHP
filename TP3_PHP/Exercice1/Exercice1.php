<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nombres d'Armstrong</title>
</head>
<body>
    <h1>Nombres d'Armstrong inférieurs à 1000</h1>
    <ul>
        <?php
        for ($nombre = 0; $nombre < 1000; $nombre++) {
            $nombreString = (string)$nombre; 
            $longueur = strlen($nombreString);
            $somme = 0;

            for ($i = 0; $i < $longueur; $i++) {
                $digit = (int)$nombreString[$i]; 
                $somme += pow($digit, 3);
            }

            if ($somme === $nombre) {
                echo "<li class='armstrong'>$nombre est un nombre d'Armstrong</li>";
            }
        }
        ?>
    </ul>
</body>
</html>

