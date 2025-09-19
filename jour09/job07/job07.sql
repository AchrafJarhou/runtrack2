SELECT prenom, nom, naissance, sexe
FROM etudiants
WHERE TIMESTAMPDIFF(YEAR, naissance, CURDATE()) > 18;
-- requete qui affiche les étudiants majeurs (plus de 18 ans)