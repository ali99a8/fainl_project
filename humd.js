/* alert when  save settings in page  incubator temperature  
var save_change_humd = document.querySelector(".save_change_humd");
save_change_humd.onclick = function() {
    Swal.fire({
        title: 'Do you want to save the changes and sent?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Save',
        denyButtonText: `Don't save`,

    }).then((result) => {
        
if (result.isConfirmed) {
    Swal.fire('Done!', '', 'success')
} else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
}
})
}*/



var btn_back_humd = document.querySelector(".btn_back_humd");
btn_back_humd.onclick = function() {
    window.open("login.html", "_parent")
}



var humidityfrom = document.getElementById("humidityfrom"),
    humidityto = document.getElementById("humidityto"),
    btn_sent = document.querySelector(".btn_sent");
btn_sent.onclick = function() {

    humidityfrom.value = "";
    humidityto.value = "";
}





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