let matricInput = document.querySelector("#new-ID");
let matric = document.querySelector("#matric");

let siswamailInput = document.querySelector("#email");
let siswamail = document.querySelector("#siswamail");

let registerEye = document.querySelector('#register-eye');
let loginEye = document.querySelector('#login-eye');
let myInput = document.querySelector("#new-pw");
let myInput1 = document.querySelector("#pw");

let letter = document.querySelector("#letter");
let capital = document.querySelector("#capital");
let number = document.querySelector("#number");
let length = document.querySelector("#length");

// When the user moves cursor onto the ID field, show the message box
matricInput.onmouseover = function () {
    document.getElementById("msg").style.display = "block";
}

// When the user moves cursor outside of the ID field, hide the message box
matricInput.onmouseout = function () {
    document.getElementById("msg").style.display = "none";
}

// When the user starts to type something inside the ID field
matricInput.onkeyup = function () {
    // Validate matric number format
    var matricFormat = /[a-zA-Z]{3}[0-9]{6}/;
    if (matricInput.value.match(matricFormat)) {
        matric.classList.remove("invalid");
        matric.classList.add("valid");
    } else {
        matric.classList.remove("valid");
        matric.classList.add("invalid");
    }
}

// When the user moves cursor onto the Email field, show the message box
siswamailInput.onmouseover = function () {
    document.getElementById("check").style.display = "block";
}

// When the user moves cursor outside of the Email field, hide the message box
siswamailInput.onmouseout = function () {
    document.getElementById("check").style.display = "none";
}

// When the user starts to type something inside the Email field
siswamailInput.onkeyup = function () {
    // Validate siswamail format
    var siswamailFormat = /[a-zA-Z]{3}[0-9]{6}/;
    if (siswamailInput.value.match(siswamailFormat)) {
        siswamail.classList.remove("invalid");
        siswamail.classList.add("valid");
    } else {
        siswamail.classList.remove("valid");
        siswamail.classList.add("invalid");
    }
}

// When the user clicks on eye icon at register section
registerEye.onclick = function () {
    if (this.classList.contains('slashed')) {
        this.classList.remove('slashed');
        this.classList.add('unslashed');
        myInput.type = "text";
    } else {
        this.classList.remove('unslashed');
        this.classList.add('slashed');
        myInput.type = "password";
    }
}

// When the user clicks on eye icon at login section
loginEye.onclick = function () {
    if (this.classList.contains('slashed')) {
        this.classList.remove('slashed');
        this.classList.add('unslashed');
        myInput1.type = "text";
    } else {
        this.classList.remove('unslashed');
        this.classList.add('slashed');
        myInput1.type = "password";
    }
}

// When the user moves cursor onto the password field, show the message box
myInput.onmouseover = function () {
    document.getElementById("message").style.display = "block";
}

// When the user moves cursor outside of the password field, hide the message box
myInput.onmouseout = function () {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function () {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
    } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
    }
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if (myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
    } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }

    // Validate length
    if (myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }
}

function checkForm() {
    let allValid = matric.classList.contains('valid') && capital.classList.contains('valid') && letter.classList.contains('valid') && number.classList.contains('valid') && length.classList.contains('valid');
    if (!allValid) {
        alert('Please follow the requested formats, thank you.');
    }
    return allValid;
}