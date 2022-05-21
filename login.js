var username = document.querySelector(".in_username"),
    pass = document.queryCommandIndeterm(".in_pass");
var login__submit = document.querySelector(".login__submit");
login__submit.onclick = function() {

    if (username.value === "admin" || pass.value === "admin") {
        window.open("login.html", "_parent");

    } else if (username.value === "user" || pass.value === "user") {
        window.open("login.html", "_parent");
        document.querySelector(".request_display").style.display = 'none';


    }
}