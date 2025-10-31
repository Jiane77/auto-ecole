<?php
session_start();
require_once("controleurs/controleur.class.php");
$unControleur = new Controleur();

$errorMsg = "";

// Vérification du formulaire de connexion
if (isset($_POST['Connexion'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $unUser = $unControleur->select_user($email, $mdp);
    if ($unUser == null) {
        $errorMsg = "⚠️ Vérifiez vos identifiants.";
    } else {
        $_SESSION['email'] = $unUser['email'];
        $_SESSION['nomuser'] = $unUser['nomuser'];
        $_SESSION['prenomuser'] = $unUser['prenomuser'];
        $_SESSION['roleuser'] = $unUser['roleuser'];

        header("Location: index.php?page=1");
        exit();
    }
}

// Déconnexion
if (isset($_GET['page']) && $_GET['page'] == 7) {
    session_destroy();
    header("Location: index.php");
    exit();
}

// Définition de la page à afficher
$page = isset($_GET['page']) ? $_GET['page'] : 1;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Auto-École</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="mt-3 bg-sky-200">
<center>
    <div>
        <h1 class="mt-20 text-4xl font-bold">Gestion de l’Auto-École</h1>
    </div>

    <?php
    // Affichage du formulaire de connexion si l'utilisateur n'est pas connecté
    if (!isset($_SESSION['email'])) {
        require_once("vue/vue_connexion.php");

        if (!empty($errorMsg)) {
            echo "<br>$errorMsg";
        }
    }

    // Si l'utilisateur est connecté, afficher le menu et la page
    if (isset($_SESSION['email'])) {
        echo '
        <nav class="bg-white shadow-md rounded-xl p-4 mb-6 w-full max-w-4xl mx-auto flex justify-center gap-6">
            <a href="index.php?page=1" class="hover:text-blue-600 font-semibold">🏠 Accueil</a>
            <a href="index.php?page=2" class="hover:text-blue-600 font-semibold">🚗 Moniteurs</a>
            <a href="index.php?page=3" class="hover:text-blue-600 font-semibold">👩‍🎓 Candidats</a>
            <a href="index.php?page=4" class="hover:text-blue-600 font-semibold">🚘 Véhicules</a>
            <a href="index.php?page=5" class="hover:text-blue-600 font-semibold">📅 Cours</a>
            <a href="index.php?page=6" class="hover:text-blue-600 font-semibold">🧑‍🏫 Examens</a>
            <a href="index.php?page=7" class="hover:text-blue-600 font-semibold">🚪 Déconnexion</a>
        </nav>
        ';

        switch ($page) {
            case 1: require_once("vue/vue_home.php"); break;
            case 2: require_once("vue/vue_moniteur.php"); break;
            case 3: require_once("vue/vue_candidat.php"); break;
            case 4: require_once("vue/vue_vehicule.php"); break;
            case 5: require_once("vue/vue_cours.php"); break;
            case 6: require_once("vue/vue_examen.php"); break;
            default: require_once("vue/vue_erreur.php"); break;
        }
    }
    ?>
</center>
</body>
</html>
