function editName() {
    var checkbox = document.getElementById("nameCheck");
    if (checkbox.checked == true) {
        document.getElementById("nameEdit").readOnly = false;
    }

    if (checkbox.checked != true) {
        document.getElementById("nameEdit").readOnly = true;
    }

}

function editSex() {
    var checkbox = document.getElementById("sexCheck");
    if (checkbox.checked == true) {
        document.getElementById("sexSelect").disabled = false;
    }

    if (checkbox.checked != true) {
        document.getElementById("sexSelect").disabled = true;
    }
}

function editPrice() {
    var checkbox = document.getElementById("priceCheck");
    if (checkbox.checked == true) {
        document.getElementById("priceEdit").readOnly = false;
    }

    if (checkbox.checked != true) {
        document.getElementById("priceEdit").readOnly = true;
    }
}

function editCate() {
    var checkbox = document.getElementById("cateCheck");
    if (checkbox.checked == true) {
        document.getElementById("cateSelect").disabled = false;
    }

    if (checkbox.checked != true) {
        document.getElementById("cateSelect").disabled = true;
    }
}

function changeStatus(id) {
    var checkbox = document.getElementById('statusCheck' + id);
    if (checkbox.checked == true) {
        var a = document.getElementById('statusCheck' + id).value = "1";
    }

    if (checkbox.checked != true) {
        var a = document.getElementById('statusCheck' + id).value = "0";
    }
}

function changeStatusCate(id) {
    var checkbox = document.getElementById('status' + id);
    if (checkbox.checked == true) {
        document.getElementById('status' + id).value = "1";
    }

    if (checkbox.checked != true) {
        document.getElementById('status' + id).value = "0";
    }
}

function changeStatusPD(id) {
    var checkbox = document.getElementById('statusPD' + id);
    if (checkbox.checked == true) {
        document.getElementById('statusPD' + id).value = "1";
    }

    if (checkbox.checked != true) {
        document.getElementById('statusPD' + id).value = "0";
    }
}

function changeStatusSize(id) {
    var checkbox = document.getElementById('sizeStatus' + id);
    if (checkbox.checked == true) {
        document.getElementById('sizeStatus' + id).value = "1";
    }

    if (checkbox.checked != true) {
        document.getElementById('sizeStatus' + id).value = "0";
    }
}

const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
    e.preventDefault();

    checkInputs();
});

function checkInputs() {
    // trim to remove the whitespaces
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if (usernameValue === '') {
        setErrorFor(username, 'Username cannot be blank');
    } else {
        setSuccessFor(username);
    }

    if (emailValue === '') {
        setErrorFor(email, 'Email cannot be blank');
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Not a valid email');
    } else {
        setSuccessFor(email);
    }

    if (passwordValue === '') {
        setErrorFor(password, 'Password cannot be blank');
    } else {
        setSuccessFor(password);
    }

    if (password2Value === '') {
        setErrorFor(password2, 'Password2 cannot be blank');
    } else if (passwordValue !== password2Value) {
        setErrorFor(password2, 'Passwords does not match');
    } else {
        setSuccessFor(password2);
    }
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}