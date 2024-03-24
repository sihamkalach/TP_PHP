<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Suite de nombres aléatoires</title>
    
</head>
<body>
    <?php
    function genererNombreAleatoire() {
        return rand(1, 100); 
    }
    while (true) {
        $n1 = genererNombreAleatoire();
        $n2 = genererNombreAleatoire();
        $n3 = genererNombreAleatoire();
        if ($n1 % 2 == 0 && $n2 % 2 == 0 && $n3 % 2 != 0) {
            
            echo '<div class="suite">';
            echo '<span class="nombre paire">' . $n1 . '</span>';
            echo '<span class="nombre paire">' . $n2 . '</span>';
            echo '<span class="nombre impaire">' . $n3 . '</span>';
            echo '</div>';
            break;
        }
    }

    ?>
</body>
</html>
