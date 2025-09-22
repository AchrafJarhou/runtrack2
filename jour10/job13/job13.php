<?php

// A l’aide d’une requête
// SQL, sélectionnez récupérer le nom des salles et le nom de leur étage. Affichez le
// résultat de cette requête dans un tableau html. La première ligne de votre tableau html
// doit contenir le nom des champs. Les suivantes doivent contenir les données présentes
// dans votre base de données.
require_once '../config/config.php';
require_once '../config/db.php';
function getSallesEtages($pdo)
{
    $stmt = $pdo->query("SELECT salles.nom AS nom_salle, etage.nom AS nom_etage FROM salles JOIN etage ON salles.id_etage = etage.id");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
$sallesEtages = getSallesEtages($pdo);
// var_dump($sallesEtages);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des salles et leurs étages</title> 
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Liste des salles et leurs étages</h1>
        <table  class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom de la salle</th>
                    <th>Nom de l'étage</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sallesEtages as $salleEtage): ?>
                    <tr>
                        <td><?= htmlspecialchars($salleEtage['nom_salle']) ?></td>
                        <td><?= htmlspecialchars($salleEtage['nom_etage']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>