<h2 class="mt-11 text-3xl font-bold text-blue-800 mb-6 text-center">Liste des véhicules</h2>

<!-- Formulaire de filtre -->
<form method="post" class="flex justify-center mb-6 gap-2">
    <input type="text" name="filtre" placeholder="Filtrer par..." 
           class="border border-gray-300 rounded px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
    <input type="submit" name="Filtrer" value="Filtrer" 
           class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600 cursor-pointer">
</form>

<!-- Tableau des véhicules -->
<div class="overflow-x-auto max-w-6xl mx-auto">
    <table class="min-w-full border border-gray-300 text-center">
        <thead class="bg-blue-500 text-white">
            <tr>
                <th class="px-4 py-2">ID examen</th>
                <th class="px-4 py-2">date del'examen</th>
                <th class="px-4 py-2">Resultat</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <?php
            if (isset($lesExamens) && !empty($lesExamens)) {
                foreach ($lesExamens as $unExamens) {
                    echo "<tr class='hover:bg-gray-100'>";
                    echo "<td class='px-4 py-2'>" . $unExamens['idexamen'] . "</td>";
                    echo "<td class='px-4 py-2'>" . $unExamens['date_examen'] . "</td>";
                    echo "<td class='px-4 py-2'>" . $unExamens['resultat'] . "</td>";
                    echo "<td class='px-4 py-2 flex justify-center gap-2'>";
                    echo "<a href='index.php?page=4&action=edit&idexamen=" . $unExamens['idexamen'] . "'>
                            <img src='images/edit.jpg' width='30' height='30' alt='Modifier'>
                          </a>";
                    echo "<a href='index.php?page=4&action=delete&idexamen=" . $unExamens['idexamen'] . "' 
                            onclick=\"return confirm('Voulez-vous vraiment supprimer ce véhicule ?');\">
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
