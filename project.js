// start settings for sgin in page room.html 
var btn_tem = document.querySelector(".btn_tem");
btn_tem.onclick = function() {
    Swal.fire({

        html: `<input type="text" id="login" class="swal2-input" placeholder="اسم مستخدم">
        <input type="password" id="password" class="swal2-input" placeholder="كلمة المرور">`,
        confirmButtonText: 'دخول',
        focusConfirm: false,
        preConfirm: () => {
            const login = Swal.getPopup().querySelector('#login').value
            const password = Swal.getPopup().querySelector('#password').value
            if (!login || !password) {
                Swal.showValidationMessage(`يرجى ادخال اسم مستخدم و كلمة المرور`)
            } else if (login == "ali" || password == 12) {
                window.open("room.html", "_parent");
            }

        }
    })

}

// end settings for sgin in page room.html 
// start settings for sgin in page babt_temperature.html 
var btn_baby_tem = document.querySelector(".btn_baby_tem");
btn_baby_tem.onclick = function() {
        Swal.fire({

            html: `<input type="text" id="login" class="swal2-input" placeholder="اسم مستخدم">
        <input type="password" id="password" class="swal2-input" placeholder="كلمة المرور">`,
            confirmButtonText: 'دخول',
            focusConfirm: false,
            preConfirm: () => {
                const login = Swal.getPopup().querySelector('#login').value
                const password = Swal.getPopup().querySelector('#password').value
                if (!login || !password) {
                    Swal.showValidationMessage(`يرجى ادخال اسم مستخدم و كلمة المرور`)
                } else if (login == "ali" || password == 12) {
                    window.open("baby_temperature.html", "_parent");
                } else if (login !== "ali" || password !== 12) {
                    Swal.showValidationMessage(`اسم مستخدم او كلمة مرور غير صحيحة`)
                }
            }
        })
    }
    // end settings for sgin in page babt_temperature.html
    // start settings for sgin in page humd.html  

var btn_hum = document.querySelector(".btn_hum");
btn_hum.onclick = function() {
        Swal.fire({

            buttons: true,
            html: `<input type="text" id="login" class="swal2-input" placeholder="اسم مستخدم">
        <input type="password" id="password" class="swal2-input" placeholder="كلمة المرور">`,
            confirmButtonText: 'دخول',
            confirmButtonColor: "#DD6B55",
            focusConfirm: false,
            preConfirm: () => {
                const login = Swal.getPopup().querySelector('#login').value
                const password = Swal.getPopup().querySelector('#password').value
                if (!login || !password) {
                    Swal.showValidationMessage(`يرجى ادخال اسم مستخدم و كلمة المرور`)
                } else if (login == "ali" || password == 12) {
                    window.open("humd.html", "_parent");
                } else if (login !== "ali" || password !== 12) {
                    Swal.showValidationMessage(`اسم مستخدم او كلمة مرور غير صحيحة`)
                }
            }
        })

    }
    // end settings for sgin in page humd.html 
var o2 = document.querySelector(".o2");
o2.onclick = function() {
    Swal.fire({
        icon: 'error',

        text: 'فــي طور الاعــــداد',

    })
}
var btn_dis = document.querySelector(".btn_dis");
btn_dis.onclick = function() {
    window.open("display_1.html", "_parent")
}


// button that Go to page report
var btn_report = document.querySelector(".btn_report");
btn_report.onclick = function() {
    let timerInterval
    Swal.fire({
        title: 'يرجى الانتظار ',
        html: 'جار جمع البيانات       <b></b> .',
        timer: 1500,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
            }, 50)
        },
        willClose: () => {
            clearInterval(timerInterval)
        }
    }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
            window.open("report.php", "_parent")
        }
    })
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

/// login in to page chart.php

var btn_chart = document.querySelector(".btn_chart");
btn_chart.onclick = function() {
        window.open("chart.php", "_parent")
    }
    /*var request_display = document.querySelector(".request_display").function() {
        function refresh() {
            setTimeout(function() {
                location.reload()
            }, 100);
        }

    }*/