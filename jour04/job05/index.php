<!-- Faire un formulaire de connexion de type POST (se demander, pourquoi pas GET ?)
ayant deux champs <input> nommés username et password.
Après validation du formulaire :
● si le username est “John” ET le password est “Rambo” afficher :
“C’est pas ma guerre”
● sinon afficher : “Votre pire cauchemar”. -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de connexion</title>  
</head>
<body>
    <h2>Formulaire de connexion</h2>   
    
    <form method="POST" action="">
        <label>Username : <input type="text" name="username"></label><br><br>
        <label>Password : <input type="password" name="password"></label><br><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($username === 'John' && $password === 'Rambo') {
            echo "<p>C’est pas ma guerre</p>";
        } else {
            echo "<p>Votre pire cauchemar</p>";
        }
    }
    ?>