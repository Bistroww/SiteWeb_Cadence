// Récupérez les références des éléments dans le DOM
const openModalButton = document.getElementById('openModal');
const closeModalButton = document.getElementById('closeModal');
const modal = document.getElementById('modal');

// Récupérez la référence de l'élément du formulaire dans la pop-up
const form = document.getElementById('clientForm');

// Définissez une variable pour stocker les articles ajoutés au panier
let cartItems = [];

// Fonction pour ouvrir la pop-up
function openModal() {
  modal.style.display = 'flex';
}

// Fonction pour fermer la pop-up
function closeModal() {
  modal.style.display = 'none';
}

// Fonction pour ajouter une bière au panier
function addToCart(event) {
  const button = event.target;
  const beerId = button.id.split('-')[2]; // Récupérer l'ID de la bière à partir de l'ID du bouton
  // A Surveiller
  const selectedBeer = bieres.find(beer => beer.id_biere === parseInt(beerId));; // Trouver la bière correspondante dans la liste des bières 

  if (selectedBeer) {
    cartItems.push(selectedBeer); // Ajouter la bière au panier
    updateCart(); // Mettre à jour l'affichage du panier
  }
}

// Fonction pour mettre à jour l'affichage du panier
function updateCart() {
  // Effacer le contenu précédent du formulaire du panier
  form.innerHTML = '';

  // Parcourir les articles dans le panier et les ajouter au formulaire du panier
  cartItems.forEach(item => {
    const beerName = item.nom;
    const beerPrice = item.prix;

    // Créer un élément <p> pour afficher le nom et le prix de la bière
    const itemElement = document.createElement('p');
    itemElement.textContent = `${beerName} - ${beerPrice} €`;

    // Ajouter l'élément au formulaire du panier
    form.appendChild(itemElement);
  });
}

// Associez les fonctions aux événements click
openModalButton.addEventListener('click', openModal);
closeModalButton.addEventListener('click', closeModal);

// Associez la fonction addToCart à tous les boutons "Ajouter au panier"
const addToCartButtons = document.querySelectorAll('.button-cart');
addToCartButtons.forEach(button => {
  button.addEventListener('click', addToCart);
});
