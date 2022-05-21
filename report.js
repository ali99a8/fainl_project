var btn_home_report = document.querySelector(".btn_home_report");
btn_home_report.onclick = function() {
    let timerInterval
    Swal.fire({
        title: 'يرجى الانتظار ',
        html: 'سيتم الانتقال الى الصفحة الرئيسية عند <b></b> .',
        timer: 1500,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
            }, 100)
        },
        willClose: () => {
            clearInterval(timerInterval)
        }
    }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
            window.open("login.html", "_parent")
        }
    })
}


// settings btn_printer
var btn_printer = document.querySelector(".btn_printer");
btn_printer.onclick = function() {
    window.print();
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