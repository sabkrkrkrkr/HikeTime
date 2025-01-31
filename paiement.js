var x = document.getElementById("date-exp").min= "2024-06"; // min month for the card

// bouton valider disabled

// selectioner formulaire et  bouton Valider
const formPaiement = document.forms["paiement"];
const boutonValider = formPaiement.querySelector('[name="valider-paiement"]');

// Fonction pour vérifier si tous les input sont remplis
function verifierChampsRemplis() {
    const nameInput = formPaiement.elements["name"];
    const numInput = formPaiement.elements["num-card"];
    const dateInput = formPaiement.elements["date-exp"];
    const codeInput = formPaiement.elements["code-card"];

    return nameInput.value.trim() !== "" &&
           numInput.value.trim() !== "" &&
           dateInput.value.trim() !== "" &&
           codeInput.value.trim() !== "";
}

// Fonction pour activer ou désactiver le bouton Valider
function gererBoutonValider() {
    boutonValider.disabled = !verifierChampsRemplis();
}

//  soumission du formulaire
formPaiement.addEventListener("submit", function(event) {
    if (!verifierChampsRemplis()) {
        event.preventDefault(); // Empêche la soumission du formulaire si les input ne sont pas remplis
    }
});

// Écouteurs d'événements pour les input
formPaiement.addEventListener("input", gererBoutonValider);

// Appel init pour vérifier l'état des champs
gererBoutonValider();
  
//pop-up
function openPopup(displayTime) {
    var popup = document.getElementById("valider");
    popup.style.display = "block";

    // Masquer le pop-up après displayTime millisecondes
    setTimeout(function() {
        popup.style.display = "none";
    }, displayTime);
}



  
//});
