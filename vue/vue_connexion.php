<div class="mt-12 flex flex-col justify-center items-center bg-sky-200">
    <div class="bg-white rounded-2xl shadow-2xl p-10 flex flex-col items-center w-full max-w-2xl">
        <img src="images/autoecole.png" class="mb-6">
        <h5 class="mt-5 text-xl font-bold mb-8 text-gray-800">Entrer vos identifiants</h5>

        <form method="post" class="w-full">
            <table class="w-full">
                <tr>
                    <td class="pr-3 text-right text-lg w-1/3">Email :</td>
                    <td><input type="text" name="email" required class="border border-gray-300 rounded-md p-2 w-full text-base focus:ring-2 focus:ring-blue-400 focus:outline-none"></td>
                </tr>
                <tr>
                    <td class="pr-3 text-right text-lg pt-4">MDP :</td>
                    <td><input type="password" name="mdp" required class="border border-gray-300 rounded-md p-2 w-full text-base focus:ring-2 focus:ring-blue-400 focus:outline-none"></td>
                </tr>
            </table>

            <div class="flex justify-center items-center gap-3 mt-6">
                <input type="reset" name="Annuler" value="Annuler"
                    class="bg-gray-400 hover:bg-gray-500 text-white text-sm font-semibold py-2 px-5 rounded transition">
                <input type="submit" name="Connexion" value="Connexion"
                    class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold py-2 px-5 rounded transition">
            </div>
        </form>
    </div>
</div>
