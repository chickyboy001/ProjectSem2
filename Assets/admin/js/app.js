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