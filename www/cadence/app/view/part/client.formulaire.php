<main>
    <!-- Créer un fomulaire d'ajout de client avec les champs suivants : nom, prénom, date de naissance, adresse, email. -->

<div id="modal">
    <div id="modalContent">
        <form action="index.php" method="post" id="clientForm">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" placeholder="Nom" required>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" placeholder="Prénom" required>
            <label for="date_naissance">Date de naissance</label>
            <input type="date" name="date_naissance" id="date_naissance" placeholder="Date de naissance" required>
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" placeholder="Adresse" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="submit" value="Ajouter">
        </form>
        <button id="closeModal">Fermer</button>
    </div>
    <script src="public/js/modal.js"></script>
</main>
