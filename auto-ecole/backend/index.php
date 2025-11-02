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
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Auto-École</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-sky-200 min-h-screen flex flex-col">

<?php if(isset($_SESSION['email'])): ?>
    <nav class="bg-gradient-to-r from-blue-500 to-blue-700 shadow-md p-4 flex justify-center gap-6 sticky top-0 z-50 rounded-b-xl">
    <a href="index.php?page=1" class="text-white hover:text-yellow-300 font-semibold transition-colors duration-300">Accueil</a>
    <a href="index.php?page=2" class="text-white hover:text-yellow-300 font-semibold transition-colors duration-300">Moniteurs</a>
    <a href="index.php?page=3" class="text-white hover:text-yellow-300 font-semibold transition-colors duration-300">Candidats</a>
    <a href="index.php?page=4" class="text-white hover:text-yellow-300 font-semibold transition-colors duration-300">Véhicules</a>
    <a href="index.php?page=5" class="text-white hover:text-yellow-300 font-semibold transition-colors duration-300">Cours</a>
    <a href="index.php?page=6" class="text-white hover:text-yellow-300 font-semibold transition-colors duration-300">Examens</a>
    <a href="index.php?page=7" class="text-white hover:text-yellow-300 font-semibold transition-colors duration-300">Déconnexion</a>
</nav>
    <!-- Titre de page -->
    <header class="py-8 bg-sky-200 mb-6">
    <h1 class="text-4xl font-bold text-blue-800 text-center drop-shadow-md">
        Gestion de l’Auto-École
    </h1>
</header>
<?php endif; ?>

<main class="flex-grow container mx-auto p-4">
<?php
// Affichage du formulaire de connexion si non connecté
if (!isset($_SESSION['email'])) {
    require_once("vue/vue_connexion.php");
    if (!empty($errorMsg)) echo "<p class='text-red-600 mt-4'>$errorMsg</p>";
}

// Si connecté, afficher la page demandée
if (isset($_SESSION['email'])) {
    switch ($page) {
        case 1: require_once("controleurs/home.php"); break;
        case 2: require_once("controleurs/gestion_moniteur.php"); break;
        case 3: require_once("controleurs/gestion_candidat.php"); break;
        case 4: require_once("controleurs/gestion_vehicule.php"); break;
        case 5: require_once("controleurs/gestion_cours.php"); break;
        case 6: require_once("controleurs/gestion__examen.php"); break;
        default: require_once("controleurs/gestion__erreur.php"); break;
    }
}
?>
</main>

<?php 
// Footer uniquement si connecté (pas sur la page de connexion)
if(isset($_SESSION['email'])) {
    include("footer.php");
}
?>
</body>
</html>
