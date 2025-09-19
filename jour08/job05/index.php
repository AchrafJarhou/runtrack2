<?php
// Développez le fameux jeu du morpion. Faites un tableau html avec 3 lignes et 3
// colonnes représentant la grille. Au début de la partie, chacune des cases contient un
// bouton de type submit dont la valeur est “-”. Si un joueur clique sur ce bouton, le bouton
// est remplacé par un “O” ou par un “X”. C’est le joueur “X” qui commence.
// Dès qu’un joueur a gagné, affichez “X a gagné” ou “O a gagné” et réinitialisez la partie. Si
// toutes les cases ont été cliquées et que personne n’a gagné, affichez “Match nul” et
// réinitialisez la partie. Indice : pour stocker l’état de la partie, utilisez une session.
session_start();
if (!isset($_SESSION['grille'])) {
    $_SESSION['grille'] = array_fill(0, 3, array_fill(0, 3, '-'));
    $_SESSION['tour'] = 'X';
    $_SESSION['gagnant'] = null;
}
function verifierGagnant($grille)
{
    // Vérifier les lignes et les colonnes
    for ($i = 0; $i < 3; $i++) {
        if ($grille[$i][0] === $grille[$i][1] && $grille[$i][1] === $grille[$i][2] && $grille[$i][0] !== '-') {
            return $grille[$i][0];
        }
        if ($grille[0][$i] === $grille[1][$i] && $grille[1][$i] === $grille[2][$i] && $grille[0][$i] !== '-') {
            return $grille[0][$i];
        }
    }
    // Vérifier les diagonales
    if ($grille[0][0] === $grille[1][1] && $grille[1][1] === $grille[2][2] && $grille[0][0] !== '-') {
        return $grille[0][0];
    }
    if ($grille[0][2] === $grille[1][1] && $grille[1][1] === $grille[2][0] && $grille[0][2] !== '-') {
        return $grille[0][2];
    }
    return null;
}
if (isset($_POST['case'])) {
    list($ligne, $colonne) = explode(',', $_POST['case']);
    if ($_SESSION['grille'][$ligne][$colonne] === '-' && $_SESSION['gagnant'] === null) {
        $_SESSION['grille'][$ligne][$colonne] = $_SESSION['tour'];
        $_SESSION['gagnant'] = verifierGagnant($_SESSION['grille']);
        if ($_SESSION['gagnant'] === null) {
            // Vérifier si la grille est pleine
            $plein = true;
            foreach ($_SESSION['grille'] as $ligne) {
                if (in_array('-', $ligne)) {
                    $plein = false;
                    break;
                }
            }
            if ($plein) {
                $_SESSION['gagnant'] = 'Match nul';
            } else {
                $_SESSION['tour'] = $_SESSION['tour'] === 'X' ? 'O' : 'X';
            }
        }
    }
}
if (isset($_POST['reset'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Jeu du Morpion</h1>
    <?php if ($_SESSION['gagnant'] !== null): ?>
        <p><?php echo $_SESSION['gagnant'] === 'Match nul' ? 'Match nul !' : $_SESSION['gagnant'] . ' a gagné !'; ?></p>
        <form method="post">
            <button type="submit" name="reset">Réinitialiser la partie</button>
        </form>
    <?php else: ?>
        <p>C'est au tour de <?php echo $_SESSION['tour']; ?></p>
        <table>
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <td>
                            <?php if ($_SESSION['grille'][$i][$j] === '-'): ?>
                                <form method="post" style="display:inline;">
                                    <button type="submit" name="case" value="<?php echo $i . ',' . $j; ?>">-</button>
                                </form>
                            <?php else: ?>
                                <?php echo $_SESSION['grille'][$i][$j]; ?>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    <?php endif; ?>
</body>
</html>
<?php
// session_destroy(); // Pour réinitialiser la session manuellement si besoin
// var_dump($_SESSION); // Pour déboguer et voir l'état de la session
?>