SELECT prenom, nom, naissance, sexe
FROM etudiants
WHERE TIMESTAMPDIFF(YEAR, naissance, CURDATE()) > 18;