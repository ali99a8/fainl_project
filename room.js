/*// alert when  save settings in page  incubator temperature  
var save_changea = document.querySelector(".save_change");
save_change.onclick = function() {
    Swal.fire({
        title: 'Do you want to save the changes and sent?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Save',
        denyButtonText: `Don't save`,

    }).then((result) => {
        // Read more about isConfirmed, isDenied below 
if (result.isConfirmed) {
    Swal.fire('Done!', '', 'success')
} else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
}
})
} */

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

// go to page login 
var btn_back_room = document.querySelector(".btn_back_room");
btn_back_room.onclick = function() {
    window.open("login.html", "_parent")
}




var tempFrom = document.getElementById("tempFrom"),
    tempTo = document.getElementById("tempTo"),
    save_change = document.querySelector(".save_change");
save_change.onclick = function() {


        tempFrom.value = "";
        tempTo.value = "";
    }
    /*
    var valfrom_room;
    var in_range1 = document.querySelector(".in_range1"), 
    output_range1 = document.querySelector(".output_range1");
    var  valfrom_room = document.querySelector(".valfrom_room");
    output_range1.innerHTML = in_range1.value;
    in_range1.oninput = function()
    {
      output_range1.innerHTML  = this.value;
      localStorage.setItem("textvalue",in_range1.value );
      return false;
    }
    //valfrom_room  = querySelector(".valfrom_room").innerHTML = localStorage.getItem(textvalue);
    var in_range2 = document.querySelector(".in_range2"), 
    output_range2 = document.querySelector(".output_range2");
    output_range2.innerHTML = in_range2.value;
    in_range2.oninput = function()
    {
      output_range2.innerHTML  = this.value;
    } */
var tempFrom = document.getElementById("tempFrom"),
    tempTo = document.getElementById("tempTo"),
    myForm = document.getElementById("myForm");
myForm.onclick = function() {
    if (tempFrom.value < 25 || tempTo.value > 37) {
        alert("this number is less from 25 Or more 38")
    }
    elseif(tempFrom.value = "25" && tempTo.value == "25") {
        alert("can not set this value")
    }
}