<h2 class="mt-11 text-3xl font-bold text-blue-800 mb-6 text-center">Liste des cours</h2>
<form method="post" class="flex justify-center mb-6 gap-2">
    <input type="text" name="filtre" placeholder="Filtrer par..." 
           class="border border-gray-300 rounded px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
    <input type="submit" name="Filtrer" value="Filtrer" 
           class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600 cursor-pointer">
</form>
<div class="overflow-x-auto max-w-6xl mx-auto">
    <table class="min-w-full border border-gray-300 text-center">
        <thead class="bg-blue-500 text-white">
            <tr>
                <th class="px-4 py-2">ID cours</th>
                <th class="px-4 py-2">Date du cours</th>
                <th class="px-4 py-2">Heure</th>
                <th class=" px-4 py-2">Duree</th>
                <th class=" px-4 py-2">Candidat</th>
                <th class=" px-4 py-2">Moniteur</th>
                <th class=" px-4 py-2">Vehicule</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <?php
            if (isset($lesCours) && !empty($lesCours)) {
        foreach ($lesCours as $unCours) {
         echo "<tr class='hover:bg-gray-100'>";
         echo "<td class='px-4 py-2'>" . $unCours['idcours'] . "</td>";
         echo "<td class='px-4 py-2'>" . $unCours['date_cours'] ."</td>";
           echo "<td class='px-4 py-2'>" . $unCours['heure'] . "</td>";
         echo "<td class='px-4 py-2'>" . $unCours['duree'] . " min</td>";
         echo "<td class='px-4 py-2'>" . $unCours['idcandidat'] . "</td>";
         echo "<td class='px-4 py-2'>" . $unCours['idmoniteur'] . "</td>";
         echo "<td class='px-4 py-2'>" . $unCours['idvehicule'] . "</td>";
         echo "<td class='px-4 py-2 flex justify-center gap-2'>";
         echo "<a href='index.php?page=6&action=edit&idcours=" . $unCours['idcours'] . "'>
                <img src='images/edit.jpg' width='30' height='30' alt='Modifier'>
              </a>";
        echo "<a href='index.php?page=6&action=delete&idcours=" . $unCours['idcours'] . "' 
                onclick=\"return confirm('Voulez-vous vraiment supprimer ce cours ?');\">
                <img src='images/delete.png' width='30' height='30' alt='Supprimer'>
              </a>";
        echo "</td>";
        echo "</tr>";
        }
            } else {
                echo "<tr><td colspan='7' class='px-4 py-2 text-gray-500'>Aucun véhicule trouvé.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
