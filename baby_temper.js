/*// alert when  save settings in page  incubator temperature  
var save_change_baby = document.querySelector(".save_change_baby");
save_change_baby.onclick = function() {
    Swal.fire({
        title: 'Do you want to save the changes and sent?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Save',
        denyButtonText: `Don't save`,

    }).then((result) => {
         Read more about isConfirmed, isDenied below 
if (result.isConfirmed) {
    Swal.fire('Done!', '', 'success')
} else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
}
})
} */



var btn_back_baby = document.querySelector(".btn_back_baby");
btn_back_baby.onclick = function() {
    window.open("login.html", "_parent")
}

var babyfrom = document.getElementById("babyfrom"),
    babyto = document.getElementById("babyto"),
    btn_sent = document.querySelector(".btn_sent");
btn_sent.onclick = function() {

    babyfrom.value = "";
    babyto.value = "";
}

//// settings menubar
var menubar = document.querySelector(".menubar"),
    closebar = document.querySelector(".closebar");
menubar.onclick = function() {
    menubar.style.display = "none"
    closebar.style.display = "block"
}


closebar.onclick = function() {
    closebar.style.display = "none"
    menubar.style.display = "block"
}