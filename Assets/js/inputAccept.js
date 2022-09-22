function editName() {
    var checkbox = document.getElementById("nameCheck");
    if (checkbox.checked == true) {
        document.getElementById("nameInput").readOnly = false;
    }

    if (checkbox.checked != true) {
        document.getElementById("nameInput").readOnly = true;
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
        document.getElementById("priceInput").readOnly = false;
    }

    if (checkbox.checked != true) {
        document.getElementById("priceInput").readOnly = true;
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