<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Accueil - Auto-École</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">
<style>
    body { font-family: 'Montserrat', sans-serif; }
</style>
</head>
<body class="bg-gradient-to-br from-blue-400 via-blue-300 to-blue-200 min-h-screen flex items-center justify-center">

    <!-- Bloc central plein écran -->
    <div class="w-100 flex flex-col items-center justify-center text-center bg-white/90 backdrop-blur-md p-12 md:p-20 rounded-4xl shadow-2xl w-full h-screen max-w-7xl">

        <!-- Image -->
        <img src="https://i.pinimg.com/originals/e5/72/59/e57259cfc536746d8d91ed7dcc4cf5e2.png" 
             alt="Logo Auto-École" 
             class="w-64 mb-8 rounded-2xl shadow-lg animate-bounce">

        <!-- Titre -->
        <h1 class="text-4xl md:text-6xl font-extrabold text-blue-900 mb-4 md:mb-6 tracking-tight">
            Bienvenue sur le projet <span class="text-blue-700">Auto-École</span>
        </h1>

        <!-- Description -->
        <p class="text-base md:text-xl text-gray-800 mb-8 md:mb-12 px-4 md:px-16 leading-relaxed">
            Gérez facilement vos <span class="font-semibold text-blue-600">moniteurs</span>, 
            <span class="font-semibold text-blue-600">candidats</span>, 
            <span class="font-semibold text-blue-600">véhicules</span> et 
            <span class="font-semibold text-blue-600">cours</span> grâce à cette application moderne et intuitive.
        </p>

        <!-- Bouton -->
        <a href="index.php?page=2" 
           class="px-10 py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-bold rounded-full shadow-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300 transform hover:-translate-y-1">
           Accéder au dashboard
        </a>

    </div>

</body>
</html>
