import "./bootstrap";

import "~resources/scss/app.scss";
// Per permettere a vite di processare le immagini
import.meta.glob(["../img/**"]);

// Importiamo parte js di bootstrap css
import * as bootstrap from "bootstrap";

const deleteButtons = document.querySelectorAll("form > .btn.btn-danger");

deleteButtons.forEach(btn => {
    btn.addEventListener("click", function (event) {
        event.preventDefault();
    });
});
