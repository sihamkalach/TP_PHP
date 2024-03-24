<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nombre Aléatoire</title>
</head>
<body>
    <div class="container">
        <div class="section">
            <?php 
                echo '<h2>En utilisant while </h2>';
                function genererNombreAleatoire(){
                    return rand(100,999);
                }
                 $number = genererNombreAleatoire();
                $comteur = 0;
                while(true){
                    $number2 = genererNombreAleatoire();
                    if ($number2 === $number){
                        echo '<div class="resultat">';
                        echo '<h3>Résultat</h3>';
                        echo "<p>Le nombre aléatoire est : <strong>$number</strong></p>";
                        echo "<p>Nombre d'essais : <strong>$comteur</strong></p>";
                        echo '</div>';
                        break;
                    }
                    else {
                        $comteur++;
                    }
                }
            ?>
        </div>
        <div class="section">
            <?php
                echo '<h2>En utilisant for </h2>';
                $number = genererNombreAleatoire();
                $comteur = 0;
                for (;;) {
                    $number2 = genererNombreAleatoire();
                    if ($number2 === $number){
                        echo '<div class="resultat">';
                        echo '<h3>Résultat</h3>';
                        echo "<p>Le nombre aléatoire est : <strong>$number</strong></p>";
                        echo "<p>Nombre d'essais : <strong>$comteur</strong></p>";
                        echo '</div>';
                        break;
                    }
                    else {
                        $comteur++;
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
