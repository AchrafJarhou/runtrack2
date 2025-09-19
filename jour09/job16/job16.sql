SELECT e.nom AS etage, s.nom AS `Biggest Room`, s.capacite
FROM salles s
JOIN etage e ON s.id_etage = e.id
ORDER BY s.capacite DESC
LIMIT 1;
-- requete qui affiche le nom de l'étage, le nom et la capacité de la salle la plus grande (capacité)