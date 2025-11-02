<script src="https://cdn.tailwindcss.com"></script>
<div class="max-w-2xl mx-auto mt-6 p-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-semibold mb-4 text-gray-700">Ajout / Modification d'un moniteur</h2>

    <form method="post" class="space-y-4">
        <div class="flex flex-col md:flex-row items-start md:items-center gap-4">
            <label class="w-32 font-medium text-gray-700">Nom</label>
            <input type="text" name="nommoniteur" 
                   value="<?= ($unmoniteur == null) ? '' : $unmoniteur['nommoniteur'] ?>" 
                   class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div class="flex flex-col md:flex-row items-start md:items-center gap-4">
            <label class="w-32 font-medium text-gray-700">Prénom</label>
            <input type="text" name="prenommoniteur" 
                   value="<?= ($unmoniteur == null) ? '' : $unmoniteur['prenommoniteur'] ?>" 
                   class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div class="flex flex-col md:flex-row items-start md:items-center gap-4">
            <label class="w-32 font-medium text-gray-700">Téléphone</label>
            <input type="text" name="telephone" 
                   value="<?= ($unmoniteur == null) ? '' : $unmoniteur['telephone'] ?>" 
                   class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div class="flex flex-col md:flex-row items-start md:items-center gap-4">
            <label class="w-32 font-medium text-gray-700">Email</label>
            <input type="email" name="emailmoniteur" 
                   value="<?= ($unmoniteur == null) ? '' : $unmoniteur['emailmoniteur'] ?>" 
                   class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div class="flex flex-col md:flex-row items-start md:items-center gap-4">
            <label class="w-32 font-medium text-gray-700">Expérience</label>
            <input type="text" name="experience" 
                   value="<?= ($unmoniteur == null) ? '' : $unmoniteur['experience'] ?>" 
                   class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div class="flex gap-4 justify-center mt-4">
            <input type="reset" name="annuler" value="Annuler" 
                   class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 transition cursor-pointer">
            
            <input type="submit" 
                   <?= ($unmoniteur == null) ? 'name="Valider" value="Valider"' : 'name="Modifier" value="Modifier"' ?> 
                   class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition cursor-pointer">
        </div>
        <?= ($unmoniteur == null) ? '' : '<input type="hidden" name="idmoniteur" value="'.$_GET['idmoniteur'].'"/>' ?>
    </form>
</div>
