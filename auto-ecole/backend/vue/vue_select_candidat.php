<h2 class="mt-11 text-3xl font-bold text-blue-800 mb-6 text-center">Liste des candidats</h2>

<!-- Formulaire de filtre -->
<form method="post" class="flex justify-center mb-6 gap-2">
    <input type="text" name="filtre" placeholder="Filtrer par..." 
           class="border border-gray-300 rounded px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
    <input type="submit" name="Filtrer" value="Filtrer" 
           class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600 cursor-pointer">
</form>

<!-- Tableau des candidats -->
<div class="overflow-x-auto max-w-6xl mx-auto">
    <table class="min-w-full border border-gray-300 text-center">
        <thead class="bg-blue-500 text-white">
            <tr>
                <th class="px-4 py-2">ID candidat</th>
                <th class="px-4 py-2">Nom</th>
                <th class="px-4 py-2">Prenom</th>
                <th class="px-4 py-2">date de naissance</th>
                <th class="px-4 py-2">adresse</th>
                <th class="px-4 py-2">telephone</th>
                <th class="px-4 py-2">email</th>
                <th class="px-4 py-2">date inscription</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <?php
             if (isset($lesCandidats) && !empty($lesCandidats)) {
                foreach ($lesCandidats as $unCandidat) {
                    echo "<tr class='hover:bg-gray-100'>";
                    echo "<td class='px-4 py-2'>" .$unCandidat['idcandidat'] . "</td>";
                    echo "<td class='px-4 py-2'>" .$unCandidat['nomcandidat'] . "</td>";
                    echo "<td class='px-4 py-2'>" .$unCandidat['prenomcandidat'] . "</td>";
                    echo "<td class='px-4 py-2'>" .date ('d/m/y',strtotime($unCandidat['date_naissance'])) . "</td>";
                    echo "<td class='px-4 py-2'>" .$unCandidat['adresse'] . "</td>";
                    echo "<td class='px-4 py-2'>" .$unCandidat['telephone'] . "</td>";
                    echo "<td class='px-4 py-2'>" .$unCandidat['emailcandidat'] . "</td>";
                    echo "<td class='px-4 py-2'>" .$unCandidat['date_inscription'] . "</td>";

                    echo "<td class='px-4 py-2 flex justify-center gap-2'>";
                    echo "<a href='index.php?page=3&action=edit&idcandidat=" .$unCandidat['idcandidat'] . "'>
                            <img src='images/edit.jpg' width='30' height='30' alt='Modifier'>
                          </a>";
                    echo "<a href='index.php?page=3&action=delete&idcandidat=" .$unCandidat['idcandidat'] . "' 
                            onclick=\"return confirm('Voulez-vous vraiment supprimer ce candidat ?');\">
                            <img src='images/delete.png' width='30' height='30' alt='Supprimer'>
                          </a>";
                    echo "</td>";
                    echo "</tr>";
                }
}       
 else {
    echo "<tr><td colspan='9' class='px-4 py-2 text-gray-500'>Aucun candidat trouvé.</td></tr>";
}          ?>
        </tbody>
    </table>
</div>
