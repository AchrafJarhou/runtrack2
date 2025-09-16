<!-- Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
bouton submit.
Après validation du formulaire :
● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
● si c’est un nombre impair, afficher “Nombre impair”. -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test GET Pair/Impair</title>
</head>
<body>
    <h2>Formulaire de test (méthode GET)</h2>   
    
    <form method="GET" action="">
        <label>Nombre : <input type="text" name="nombre"></label><br><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if (isset($_GET['nombre']) && $_GET['nombre'] !== '') {
        $nombre = $_GET['nombre'];
        if (is_numeric($nombre)) {
            if ($nombre % 2 == 0) {
                echo "<p>$nombre est un Nombre pair</p>";
            } else {
                echo "<p>$nombre est un Nombre impair</p>";
            }
        } else {
            echo "<p>Veuillez entrer un nombre valide.</p>";
        }
    }
    ?>