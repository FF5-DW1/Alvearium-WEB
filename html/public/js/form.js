const nameField = document.querySelector("#name");
const lNameField = document.querySelector("#lname");
const phoneField = document.querySelector("#phone");
const emailField = document.querySelector("#email");
const commentsField = document.querySelector("#comments");
const formFields = document.querySelectorAll("[data-field]");
const formFieldErrors = document.querySelectorAll(".formError");

function changeToErrorStyles(field, error) {
    for (i in formFields) {
        if (formFields[i] == field) {
            formFieldErrors[i].innerText = `El campo ${error}.`;
            formFieldErrors[i].style.visibility = "visible";
            break;
        }
    }
    field.style.borderColor = "red";
    field.style.backgroundColor = "rgb(255, 204, 204)";
}

function changeToDefaultStyles(field) {
    for (i in formFields) {
        if (formFields[i] == field) {
            formFieldErrors[i].style.visibility = "hidden";
            break;
        }
    }
    field.style.borderColor = "black";
    field.style.backgroundColor = "white";
}

function checkIfFieldIsNotEmpty(field) {
    if (field.value == "") {
        changeToErrorStyles(field, "está vacío");
        return false;
    } else {
        changeToDefaultStyles(field);
        return true;
    }
}

function limitCharacters(field, maxLength) {
    if (field.value.length > maxLength) {
        changeToErrorStyles(field, `no puede exceder los ${maxLength} caracteres`);
        return false;
    } else {
        changeToDefaultStyles(field);
        return true;
    }
}

function minCharacters(field, minLength) {
    if (field.value.length < minLength) {
        changeToErrorStyles(field, `no puede ser inferior a ${minLength} caracteres`);
        return false;
    } else {
        changeToDefaultStyles(field);
        return true;
    }
}

function checkIfLettersOnly(field) {
    let pattern = /^[a-z \u00E0-\u00FC]+$/i; //Allows accents, ñ, spaces.

    if(pattern.test(field.value) == false) {
        changeToErrorStyles(field, "contiene caracteres inválidos");
        return false;
    } else {
        changeToDefaultStyles(field);
        return true;
    }
}

function checkIfNumbersOnly(field) {
    let pattern = /^[0-9]*$/;

    if(pattern.test(field.value) == false) {
        changeToErrorStyles(field, "contiene caracteres inválidos")
        return false;
    } else {
        changeToDefaultStyles(field);
        return true;
    }
}

function checkIfEmail(field) {
    let pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (pattern.test(field.value) == false) {
        changeToErrorStyles(field, "no es un email válido");
        return false;
    } else {
        changeToDefaultStyles(field);
        return true;
    }
}

function validateName() {
    if (checkIfFieldIsNotEmpty(nameField) == true) {
        if (limitCharacters(nameField, 40) && checkIfLettersOnly(nameField)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function validateLName() {
    if (checkIfFieldIsNotEmpty(lNameField) == true) {
        if (limitCharacters(lNameField, 60) && checkIfLettersOnly(lNameField)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function validatePhone() {
    if (checkIfFieldIsNotEmpty(phoneField) == true) {
        if (minCharacters(phoneField, 9) && limitCharacters(phoneField, 14) && checkIfNumbersOnly(phoneField)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function validateEmail() {
    if (checkIfFieldIsNotEmpty(emailField) == true) {
        if (checkIfEmail(emailField)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function validateComments() {
    if (checkIfFieldIsNotEmpty(commentsField)) {
        return true;
    } else {
        return false;
    }
}

function validateForm(ev) {
    let valid = true;

    if (!validateName()) {
        valid = false;
    }
    if (!validateLName()) {
        valid = false;
    }
    if (!validatePhone()) {
        valid = false;
    }
    if (!validateEmail()) {
        valid = false;
    }
    if (!validateComments()) {
        valid = false;
    }

    if (!valid) {
        ev.preventDefault();
    } else {
        alert("Enviado!");
    }
}

nameField.addEventListener("blur", validateName);
lNameField.addEventListener("blur", validateLName);
phoneField.addEventListener("blur", validatePhone);
emailField.addEventListener("blur", validateEmail);
commentsField.addEventListener("blur", validateComments);
document.querySelector("#contacto").addEventListener("submit", validateForm);