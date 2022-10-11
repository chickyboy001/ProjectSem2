$(function() {

    $('.toast').toast('show');

    $('.nav-item.dropdown').mouseenter(function() {
        $(this).addClass('show');
        $(this).children('.dropdown-menu').addClass('show');
        $(this).children('.dropdown-toggle').attr('aria-expanded', 'true');
    }).mouseleave(function() {
        $(this).removeClass('show');
        $(this).children('.dropdown-menu').removeClass('show');
        $(this).children('.dropdown-toggle').attr('aria-expanded', 'false');
    });

    $('.img-small').on('mouseenter click', function() {
        var src = $(this).data('src');
        $('.img-large').css("background-image", "url('" + src + "')");
    });

    var imgLarge = $('.img-large');

    imgLarge.mousemove(function(event) {
        var relX = event.pageX - $(this).offset().left;
        var relY = event.pageY - $(this).offset().top;
        var width = $(this).width();
        var height = $(this).height();
        var x = (relX / width) * 100;
        var y = (relY / height) * 100;
        $(this).css("background-position", x + "% " + y + "%");
    });

    imgLarge.mouseout(function() {
        $(this).css("background-position", "center");
    });

    $(window).resize(function() {
        setImgLarge();
        setImgSmall();
    });

    setImgLarge();
    setImgSmall();

});

function setImgLarge() {
    var imgLarge = $('.img-large');
    var width = imgLarge.width();
    imgLarge.height(width * 2 / 3);
}

function setImgSmall() {
    var imgSmall = $('.img-small');
    var width = imgSmall.width();
    imgSmall.height(width);
}

function sendColorName(colorName) {
    document.getElementById("colorSelected").innerHTML = colorName;
    // var a = document.getElementById("chooseCl").value = colorId;
    // console.log(a);
}


const form = document.getElementById('registrationValidate');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password_confirm = document.getElementById('password_confirm');

form.addEventListener('submit', e => {
    e.preventDefault();

    checkInputs();
});

function checkInputs() {
    // trim to remove the whitespaces
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password_confirm.value.trim();

    if (usernameValue === '') {
        setErrorFor(username, 'Tên người dùng không được bỏ trống');
    } else {
        setSuccessFor(username);
    }

    if (emailValue === '') {
        setErrorFor(email, 'Email không được bỏ trống');
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Sai định dạng email');
    } else {
        setSuccessFor(email);
    }

    if (passwordValue === '') {
        setErrorFor(password, 'Mật khẩu không được bỏ trống');
    } else {
        setSuccessFor(password);
    }

    if (password2Value === '') {
        setErrorFor(password_confirm, 'Nhập lại mật khẩu không được bỏ trống');
    } else if (passwordValue !== password2Value) {
        setErrorFor(password_confirm, 'Mật khẩu nhập lại không trùng khớp');
    } else {
        setSuccessFor(password_confirm);
    }
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'formValid mb-3 error';
    small.innerText = message;
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'formValid mb-3 success';
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

let subTotalEl = document.querySelector('.subtotal span');
let vatEl = document.querySelector('.vat span');
let totalEle = document.querySelector('.total span');