import "./bootstrap";

// import our custom css
import "~resources/scss/app.scss";

// Import all of Bootstrap's JS
import * as bootstrap from "bootstrap";

// dico a vite di processare le immagini nella cartella resources/img/
import.meta.glob(["../img/**"]);

//importo axios
import axios from "axios";

/*
*
*
*
CANCELLAZIONE RECORD COMIC CON AXIOS SENZA RICARICA DELLA PAGINA INIZIO
*
*
*
*/

// seleziono tutti i buttons che mi aprono le varie modali, ottengo una node list
const buttonsAxios = document.querySelectorAll(".my-button-axios");
// seleziono tutte le righe della tabella
const tableRow = document.querySelectorAll("tr");
// seleziono tutta la colonna con id
const tableDataId = document.querySelectorAll("tr td:first-child");

// ciclo sulla node list bottoni
buttonsAxios.forEach((button, index) => {
    // seleziono la modale con ogni button
    const myModale = document.getElementById(`my-modale-axios-${index}`);
    // seleziono il button no dell alert che chiude la modale
    const myNo = document.querySelector(`#my-modale-axios-${index} .go-back`);
    // seleziono il button si dell alert che fa la chiamata axios per cancellare il record
    const myYes = document.querySelector(`#my-modale-axios-${index} .delete`);
    // seleziono il button X dell alert che chiude la modale
    const myCloseModal = document.querySelector(
        `#my-modale-axios-${index} .btn-close`
    );

    // evento sul button che apre la modale
    button.addEventListener("click", function () {
        myModale.classList.toggle("d-none");
    });
    // evento sul pulsante no che chiude la modale
    myNo.addEventListener("click", function () {
        myModale.classList.toggle("d-none");
    });
    // cancellazione al si con axios
    myYes.addEventListener("click", function () {
        // prendo l id della riga della tabella che voglio cancellare
        const id = tableDataId[index].innerHTML;
        // chiamata axios per cancellare, poi rimuovo la riga dall HTML e poi chiudo modale
        // il then mi da error 405 e non me lo esegue, usiamo il catch in maniera impropria
        axios.delete(`/comics/${id}`).catch((error) => {
            tableRow[++index].remove();
            myModale.classList.toggle("d-none");
        });
    });
    // evento sul pulsante x che chiude la modale
    myCloseModal.addEventListener("click", function () {
        myModale.classList.toggle("d-none");
    });
    // evento sulla modale che chiude se stessa, però con condizione per dire se clicco direttamente su di lei chiuditi mentre se è su un contenitore figlio la chiusura non avviene
    myModale.addEventListener("click", function (e) {
        if (e.target.contains(myModale)) {
            myModale.classList.toggle("d-none");
        }
    });
});

/*
*
*
*
CANCELLAZIONE RECORD COMIC CON AXIOS SENZA RICARICA DELLA PAGINA FINE
*
*
*
*/

/*
*
*
*
CANCELLAZIONE RECORD COMIC CON JS E FORM CON RICARICA DELLA PAGINA INIZIO
*
*
*
*/

// seleziono tutti i buttons che mi aprono le varie modali, ottengo una node list
const buttons = document.querySelectorAll(".my-button");

// ciclo sulla node list
buttons.forEach((button, index) => {
    // seleziono la modale contenuta nel form con ogni button
    const myModale = document.getElementById(`my-modale-${index}`);
    // seleziono il button no dell alert che chiude la modale
    const myNo = document.querySelector(`#my-modale-${index} .go-back`);
    // seleziono il button X dell alert che chiude la modale
    const myCloseModal = document.querySelector(
        `#my-modale-${index} .btn-close`
    );

    // evento sul button che apre la modale
    button.addEventListener("click", function () {
        myModale.classList.toggle("d-none");
    });
    // evento sul pulsante no che chiude la modale
    myNo.addEventListener("click", function () {
        myModale.classList.toggle("d-none");
    });
    // evento sul pulsante x che chiude la modale
    myCloseModal.addEventListener("click", function () {
        myModale.classList.toggle("d-none");
    });
    // evento sulla modale che chiude se stessa, però con condizione per dire se clicco direttamente su di lei chiuditi mentre se è su un contenitore figlio la chiusura non avviene
    myModale.addEventListener("click", function (e) {
        if (e.target.contains(myModale)) {
            myModale.classList.toggle("d-none");
        }
    });
});
