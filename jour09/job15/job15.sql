SELECT s.nom AS salle, e.nom AS etage
FROM salles s
JOIN etage e ON s.id_etage = e.id;
-- requete qui affiche le nom des salles avec le nom de l'étage correspondant