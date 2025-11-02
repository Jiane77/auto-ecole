<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container my-4">
    <h2 class="mb-3">Gestion des Moniteurs</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Id Moniteur</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Expérience</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if(isset($lesmoniteurs)){
                foreach($lesmoniteurs as $unmoniteur){
                    echo "<tr>";
                    echo "<td>".$unmoniteur['idmoniteur']."</td>";
                    echo "<td>".$unmoniteur['nommoniteur']."</td>";
                    echo "<td>".$unmoniteur['prenommoniteur']."</td>";
                    echo "<td>".$unmoniteur['telephone']."</td>";
                    echo "<td>".$unmoniteur['emailmoniteur']."</td>";
                    echo "<td>".$unmoniteur['experience']."</td>";
                    echo "<td class='d-flex justify-content-center gap-2'>
                            <a href='index.php?page=2&action=edit&idmoniteur=".$unmoniteur['idmoniteur']."' class='btn btn-sm btn-primary'>
                                <i class='bi bi-pencil-square'></i>
                            </a>
                            <a href='index.php?page=2&action=delete&idmoniteur=".$unmoniteur['idmoniteur']."' class='btn btn-sm btn-danger'>
                                <i class='bi bi-trash'></i>
                            </a>
                          </td>";
                    echo "</tr>";
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
