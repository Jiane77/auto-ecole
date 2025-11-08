<form method="post" class="bg-gradient-to-br from-white to-blue-50 p-8 rounded-2xl shadow-xl max-w-xl mx-auto mt-10">
    <div class="text-center mb-6">
        <h3 class="text-2xl font-bold text-blue-800">Ajout / Modification d'un cours</h3>
    </div>

    <label>Date du cours</label>
    <input type="date" name="date_cours"
           value="<?= ($unCours==null)? '' : $unCours['date_cours'] ?>"
           class="w-full px-4 py-3 mb-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>

    <label>Heure</label>
    <input type="time" name="heure"
           value="<?= ($unCours==null)? '' : $unCours['heure'] ?>"
           class="w-full px-4 py-3 mb-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>

    <label>Durée (minutes)</label>
    <input type="number" name="duree" min="1"
           value="<?= ($unCours==null)? '' : $unCours['duree'] ?>"
           class="w-full px-4 py-3 mb-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>

    <label>Candidat</label>
    <select name="idcandidat" class="w-full px-4 py-3 mb-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        <?php foreach($lesCandidats as $candidat): ?>
            <option value="<?= $candidat['idcandidat'] ?>" <?= ($unCours && $unCours['idcandidat']==$candidat['idcandidat'])?'selected':'' ?>>
                <?= $candidat['nomcandidat'].' '.$candidat['prenomcandidat'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label>Moniteur</label>
    <select name="idmoniteur" class="w-full px-4 py-3 mb-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        <?php foreach($lesMoniteurs as $moniteur): ?>
            <option value="<?= $moniteur['idmoniteur'] ?>" <?= ($unCours && $unCours['idmoniteur']==$moniteur['idmoniteur'])?'selected':'' ?>>
                <?= $moniteur['nommoniteur'].' '.$moniteur['prenommoniteur'] ?>
            </option>
        <?php endforeach; ?>
    </select>
    
    <label>Véhicule</label>
    <select name="idvehicule" class="w-full px-4 py-3 mb-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        <?php foreach($lesVehicules as $vehicule): ?>
            <option value="<?= $vehicule['idvehicule'] ?>" <?= ($unCours && $unCours['idvehicule']==$vehicule['idvehicule'])?'selected':'' ?>>
                <?= $vehicule['marque'].' '.$vehicule['modele'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <div class="flex justify-end mt-3 gap-3">
        <input type="reset" name="annuler" value="Annuler" 
               class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400 cursor-pointer">
        <input type="submit" <?= ($unCours==null)? 'name="Valider" value="Valider"' :'name="Modifier" value="Modifier"' ?>
               class="px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 cursor-pointer">
    </div>
    <?= ($unCours==null)? '' : '<input type="hidden" name="idcours" value="'.$_GET['idcours'].'">' ?>
</form>
