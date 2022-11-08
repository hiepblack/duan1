function validateDangNhap() {
    var email = document.getElementById("email").value;
    console.log("Email: " + email);
    if (email == "") {
        alert("Không được để trống email");
        document.getElementById("email").style.backgroundColor = "yellow";
        document.getElementById("email").focus();
        return false;
    } else {
        document.getElementById("email").style.backgroundColor = "white";
    }
    var password = document.getElementById("password").value
    if (password == "") {
        alert("Không được để trống Password");
        document.getElementById("password").style.backgroundColor = "yellow";
        document.getElementById("password").focus();
        return false;
    } else {
        document.getElementById("password").style.backgroundColor = "white";
    }
    
}
function validateDangKi(){
    var hoTen = document.getElementById("hoten").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if (hoTen == "") {
        alert("Không được để trống họ tên");
        document.getElementById("hoten").style.backgroundColor = "yellow";
        document.getElementById("hoten").focus();
        return false;
    } else {
        document.getElementById("hoten").style.backgroundColor = "white";
    }
    if (email == "") {
        alert("Không được để trống email");
        document.getElementById("email").style.backgroundColor = "yellow";
        document.getElementById("email").focus();
        return false;
    } else {
        document.getElementById("email").style.backgroundColor = "white";
    }
    
    if (password == "") {
        alert("Không được để trống Password");
        document.getElementById("password").style.backgroundColor = "yellow";
        document.getElementById("password").focus();
        return false;
    } else {
        document.getElementById("password").style.backgroundColor = "white";
    }
}