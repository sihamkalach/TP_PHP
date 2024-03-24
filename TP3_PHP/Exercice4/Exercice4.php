<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Résolution d'équations du second degré</title>
</head>
<body>
    <h1>Résolution d'équations du second degré</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="a">Coefficient a :</label>
        <input type="number" id="a" name="a" required >
        <br>
        <label for="b">Coefficient b :</label>
        <input type="number" id="b" name="b" required>
        <br>
        <label for="c">Coefficient c :</label>
        <input type="number" id="c" name="c" required>
        <br>
        <input type="submit" value="Calculer">
    </form>

    <?php
    // Fonction pour résoudre l'équation du second degré
    function resoudreEquation($a, $b, $c) {
        // Calcul du discriminant
        $delta = ($b * $b) - (4 * $a * $c);
        
        // Si le discriminant est positif
        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            echo "Les solutions sont réelles et distinctes : x1 = $x1 et x2 = $x2";
        } elseif ($delta == 0) { // Si le discriminant est nul
            $x = -$b / (2 * $a);
            echo "La solution est réelle et unique : x = $x";
        } else { // Si le discriminant est négatif
            $partieReelle = -$b / (2 * $a);
            $partieImaginaire = sqrt(-$delta) / (2 * $a);
            echo "Les solutions sont complexes : x1 = $partieReelle + $partieImaginaire i et x2 = $partieReelle - $partieImaginaire i";
        }
    }

    // Vérification si le formulaire est soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des coefficients depuis le formulaire
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        // Appel de la fonction pour résoudre l'équation
        echo "<div class='result'>";
        echo "<h2>Resultat : </h2>";
        resoudreEquation($a, $b, $c);
        echo "</div>";
    }
    ?>
</body>
</html>
