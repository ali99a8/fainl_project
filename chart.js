// box2   baby
var xValues = [4, 8, 12, 16, 20, 24, 28, 32, 36, 40, 44, 48, 52, 56, 60, 64, 68, 72, 76, 80, 84, 88, 92, 96, 100, 104, 108, 112, 116, 120, 124, 128];
var yValues = [];
startShowingMessage(yValues, 'https://io.adafruit.com/api/v2/aliabbas99/feeds/bodytemp');

var chart3 = new Chart("myChart", {
    type: "line",
    data: {
        labels: xValues,
        datasets: [{
            fill: true,
            lineTension: 0,
            backgroundColor: "#80deea",
            borderColor: "red",
            data: yValues
        }]
    },
    options: {
        legend: { display: false },
        scales: {
            yAxes: [{ ticks: { min: 6, max: 38, beginAtZero: true, stepSize: 1 } }],
        }
    }
});

// box1 room


var xaxisValues = [4, 8, 12, 16, 20, 24, 28, 32, 36, 40, 44, 48, 52, 56, 60, 64, 68, 72, 76, 80, 84, 88, 92, 96, 100, 104, 108, 112, 116, 120, 124, 128];
var yaxisValues = [];

startShowingMessage(yaxisValues, 'https://io.adafruit.com/api/v2/aliabbas99/feeds/temp');



var chart = new Chart("myChart2", {
    type: "line",
    data: {
        labels: xaxisValues,
        datasets: [{
            fill: true,
            lineTension: 0,
            backgroundColor: "#80deea",
            borderColor: "red",
            data: yaxisValues
        }]
    },
    options: {
        legend: { display: false },
        scales: {
            yAxes: [{ ticks: { min: 25, max: 37, beginAtZero: true, stepSize: 1 } }],
        }
    }
});

function startShowingMessage(id, url) {
    setInterval(async function() {
        const response = await fetch(url);
        const text = await response.text();
        // document.getElementById(id).innerHTML = (JSON.parse(text)['last_value']);
        console.log(JSON.parse(text)['last_value']);
        id.push(Number(JSON.parse(text)['last_value']));
        console.log(id);
        chart.update();
        chart2.update();
        chart3.update();

    }, 4000);
}


// box3  humidity
var xaxisValue2 = [4, 8, 12, 16, 20, 24, 28, 32, 36, 40, 44, 48, 52, 56, 60, 64, 68, 72, 76, 80, 84, 88, 92, 96, 100, 104, 108, 112, 116, 120, 124, 128];
var yaxisValue2 = [];
startShowingMessage(yaxisValue2, 'https://io.adafruit.com/api/v2/aliabbas99/feeds/humidity');


var chart2 = new Chart("myChart3", {
    type: "line",
    data: {
        labels: xaxisValue2,
        datasets: [{
            fill: true,
            lineTension: 0,
            backgroundColor: "#80deea",
            borderColor: "red",
            data: yaxisValue2
        }]
    },
    options: {
        elements: {
            line: {
                tension: 0
            }
        },
        legend: { display: false },
        scales: {
            yAxes: [{ ticks: { min: 5, max: 100, beginAtZero: true, stepSize: 1 } }],
        }
    }
});




/// settingsgo to  home
var btn_home_chart = document.querySelector(".btn_home_chart");
btn_home_chart.onclick = function() {
    window.open("login.html", "_parent");
    btn_home_chart.style.border = 'none';
    btn_home_chart.style.outline = 'none';

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