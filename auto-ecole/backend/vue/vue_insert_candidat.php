<form method="post" class="bg-gradient-to-br from-white to-blue-50 p-8 rounded-2xl shadow-xl max-w-xl mx-auto mt-10">
    <div class="text-center mb-6">
        <h3 class="text-2xl font-bold text-blue-800">Ajout / Modification des candidats</h3>
    </div>

    <table class="w-full mb-4">
        <tr class="mb-2">
            <td class="py-2 font-semibold text-gray-700">Nom</td> 
            <td><input type="text" name="nomcandidat" 
                       value="<?= ($unCandidat==null)? '' : $unCandidat['nomcandidat'] ?>" 
                       class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></td>
        </tr>
        <tr class="mb-2">
            <td class="py-2 font-semibold text-gray-700">Prénom</td> 
            <td><input type="text" name="prenomcandidat" 
                       value="<?= ($unCandidat==null)? '' : $unCandidat['prenomcandidat'] ?>"
                       class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></td>
        </tr>
        <tr class="mb-2">
            <td class="py-2 font-semibold text-gray-700">Date de naissance</td> 
            <td><input type="date" name="date_naissance" 
                       value="<?= ($unCandidat==null)? '' : $unCandidat['date_naissance'] ?>"
                       class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></td>
        </tr>
        <tr class="mb-2">
            <td class="py-2 font-semibold text-gray-700">Adresse</td> 
            <td><input type="text" name="adresse" 
                       value="<?= ($unCandidat==null)? '' : $unCandidat['adresse'] ?>"
                       class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></td>
        </tr>
        <tr class="mb-2">
            <td class="py-2 font-semibold text-gray-700">Téléphone</td> 
            <td><input type="text" name="telephone" 
                       value="<?= ($unCandidat==null)? '' : $unCandidat['telephone'] ?>"
                       class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></td>
        </tr>
        <tr class="mb-2">
            <td class="py-2 font-semibold text-gray-700">Email</td> 
            <td><input type="email" name="emailcandidat" 
                       value="<?= ($unCandidat==null)? '' : $unCandidat['emailcandidat'] ?>"
                       class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></td>
        </tr>
    </table>

    <div class="flex justify-end mt-3 gap-3">
        <input type="reset" name="annuler" value="Annuler" 
               class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400 cursor-pointer">
        <input type="submit" <?= ($unCandidat==null)? 'name="Valider" value="Valider"' :'name="Modifier" value="Modifier"' ?>
               class="px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 cursor-pointer">
    </div>

    <?= ($unCandidat==null)? '' : '<input type="hidden" name="idcandidat" value="'.$_GET['idcandidat'].'">' ?>
</form>
