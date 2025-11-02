<form method="post" class="bg-gradient-to-br from-white to-blue-50 p-8 rounded-2xl shadow-xl max-w-xl mx-auto mt-10">
    <div class="text-center mb-6">
        <h3 class="text-2xl font-bold text-blue-800">Ajout / Modification d'un véhicule</h3>
    </div>

    <table class="w-full mb-4">
        <tr class="mb-2">
            <td class="py-2 font-semibold text-gray-700">Marque du véhicule</td> 
            <td><input type="text" name="marque" 
                       value="<?= ($unVehicule==null)? '' : $unVehicule['marque'] ?>" 
                       class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></td>
        </tr>
        <tr class="mb-2">
            <td class="py-2 font-semibold text-gray-700">Modèle du véhicule</td> 
            <td><input type="text" name="modele" 
                       value="<?= ($unVehicule==null)? '' : $unVehicule['modele'] ?>"
                       class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></td>
        </tr>
        <tr class="mb-2">
            <td class="py-2 font-semibold text-gray-700">Immatriculation</td> 
            <td><input type="text" name="immatriculation" 
                       value="<?= ($unVehicule==null)? '' : $unVehicule['immatriculation'] ?>"
                       class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></td>
        </tr>
        <tr class="mb-2">
            <td class="py-2 font-semibold text-gray-700">Type de véhicule</td> 
            <td><input type="text" name="typevehicule" 
                       value="<?= ($unVehicule==null)? '' : $unVehicule['typevehicule'] ?>"
                       class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></td>
        </tr>
        <tr class="mb-2">
            <td class="py-2 font-semibold text-gray-700">État</td> 
            <td><input type="text" name="etat" 
                       value="<?= ($unVehicule==null)? '' : $unVehicule['etat'] ?>"
                       class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></td>
        </tr>
    </table>

    <div class="flex justify-end mt-3 gap-3">
        <input type="reset" name="annuler" value="Annuler" 
               class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400 cursor-pointer">
        <input type="submit" <?= ($unVehicule==null)? 'name="Valider" value="Valider"' :'name="Modifier" value="Modifier"' ?>
               class="px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 cursor-pointer">
    </div>

    <?= ($unVehicule==null)? '' : '<input type="hidden" name="idvehicule" value="'.$_GET['idvehicule'].'">' ?>
</form>
