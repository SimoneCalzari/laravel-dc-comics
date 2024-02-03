import "./bootstrap";

// import our custom css
import "~resources/scss/app.scss";

// Import all of Bootstrap's JS
import * as bootstrap from "bootstrap";

// dico a vite di processare le immagini nella cartella resources/img/
import.meta.glob(["../img/**"]);

const buttons = document.querySelectorAll(".my-button");
console.log(buttons);

buttons.forEach((button, index) => {
    const myModale = document.getElementById(`my-modale-${index}`);
    const myAlert = document.querySelector(`#my-modale-${index} .my-alert`);
    const myNo = document.querySelector(
        `#my-modale-${index} .my-alert .go-back`
    );
    const myYes = document.querySelector(
        `#my-modale-${index} .my-alert .proceed`
    );
    console.log(myAlert);
    button.addEventListener("click", function (e) {
        e.preventDefault();
        myModale.classList.toggle("d-none");
    });
    myNo.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        myModale.classList.toggle("d-none");
    });

    myYes.addEventListener("click", function (e) {
        e.stopPropagation();
    });
    myModale.addEventListener("click", function (e) {
        if (e.target !== myAlert) {
            myModale.classList.toggle("d-none");
        }
    });
});
