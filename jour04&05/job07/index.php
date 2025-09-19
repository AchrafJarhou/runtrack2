<!-- Faire un formulaire avec deux <input> de type text ayant comme nom “largeur” et
“hauteur” et un bouton submit.
Vous devez créer un algorithme qui affiche, à la validation du formulaire,
une maison telle que :
Si on entre les valeurs : largeur =10 et hauteur = 5 dans les champs, la
maison qui s’affiche sur la page doit ressembler à ceci : -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Maison</title>
    <style>
        .maison {
            font-family: monospace;
            line-height: 1;
            white-space: pre;
        }
    </style>
</head>
<body>
    <h2>Formulaire pour dessiner une maison</h2>   
    
    <form method="POST" action="">
        <label>Largeur : <input type="text" name="largeur"></label><br><br>
        <label>Hauteur : <input type="text" name="hauteur"></label><br><br>
        <input type="submit" value="Dessiner la maison">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $largeur = isset($_POST['largeur']) ? (int)$_POST['largeur'] : 0;
        $hauteur = isset($_POST['hauteur']) ? (int)$_POST['hauteur'] : 0;

        if ($largeur > 0 && $hauteur > 0) {
            echo "<div class='maison'>";

            // Dessiner le toit
            for ($i = 0; $i < ceil($hauteur / 2); $i++) {
                echo str_repeat(' ', ceil($largeur / 2) - $i - 1);
                echo str_repeat('_', 2 * $i + 1);
                echo "\n";
            }

            // Dessiner les murs
            for ($j = 0; $j < floor($hauteur / 2); $j++) {
                echo '|';
                echo str_repeat(' ', $largeur - 2);
                echo "|\n";
            }

            // Dessiner le sol
            echo str_repeat('-', $largeur) . "\n";
            echo "</div>";
        } else {
            echo "<p>Veuillez entrer des valeurs valides pour la largeur et la hauteur.</p>";
        }
    }
    ?>