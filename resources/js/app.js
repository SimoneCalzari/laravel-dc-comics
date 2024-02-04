import "./bootstrap";

// import our custom css
import "~resources/scss/app.scss";

// Import all of Bootstrap's JS
import * as bootstrap from "bootstrap";

// dico a vite di processare le immagini nella cartella resources/img/
import.meta.glob(["../img/**"]);

// seleziono tutti i buttons che mi aprono le varie modali, ottengo una node list
const buttons = document.querySelectorAll(".my-button");

// ciclo sulla node list
buttons.forEach((button, index) => {
    // seleziono la modale contenuta nel form con ogni button
    const myModale = document.getElementById(`my-modale-${index}`);
    // seleziono il button no dell alert che chiude la modale
    const myNo = document.querySelector(`#my-modale-${index} .go-back`);

    // evento sul button che apre la modale
    button.addEventListener("click", function () {
        myModale.classList.toggle("d-none");
    });
    // evento sul pulsante no che chiude la modale
    myNo.addEventListener("click", function () {
        myModale.classList.toggle("d-none");
    });
    // evento sulla modale che chiude se stessa, però con condizione per dire se clicco direttamente su di lei chiuditi mentre se è su un contenitore figlio la chiusura non avviene
    myModale.addEventListener("click", function (e) {
        if (e.target.contains(myModale)) {
            myModale.classList.toggle("d-none");
        }
    });
});
