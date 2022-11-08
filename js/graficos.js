var xValues = ["Fixos", "Variáveis", "Lazer", "Investimentos"];
//var yPlanValues = [gfixo, invest, 15];
var barColors = [
    "#a200ff",
    "#38a4fc",
    "#F27D52",
    "#04BF9D",
    "#fbb735",
    "#e98931",
    "#eb403b",
    "#b32E37",
    "#6c2a6a",
    "#5c4399",
    "#274389",
    "#1f5ea8",
    "#227FB0",
    "#2ab0c5",
    "#39c0b3",
];

var fixo = document.getElementById("centfixo").value;
var variavel = document.getElementById("centvariavel").value;
var lazer = document.getElementById("centlazer").value;
var invest = document.getElementById("centinvestimento").value;

var planofixo = document.getElementById("planofixo").value;
var planovariavel = document.getElementById("planovariavel").value;
var planolazer = document.getElementById("planolazer").value;
var planoinvest = document.getElementById("planoinvestimento").value;

var yPlanValues = [planofixo, planovariavel, planolazer, planoinvest];
var yRealValues = [fixo, variavel, lazer, invest];

var items = document.getElementsByClassName('listgasto').value;

// let data = [].map.call(items, item => item.value);
// console.log(items);

// const teste = document.querySelectorAll('.listgasto');
// teste.forEach((el) => {
//     if (el.className === 'listgasto') {
//         console.log(teste);
//     }
// })




var plan = document.getElementById("planejamento").getContext("2d");
var real = document.getElementById("realidade").getContext("2d");

var fix = document.getElementById("chart_fixo").getContext("2d");
var vav = document.getElementById("chart_variavel").getContext("2d");
var laz = document.getElementById("chart_lazer").getContext("2d");
var inv = document.getElementById("chart_investimento").getContext("2d");



new Chart(plan, {
    //type: "doughnut",
    type: "pie",
    data: {
        labels: xValues,
        datasets: [
            {
                backgroundColor: barColors,
                borderWidth: 2,
                scaleStepWidth: 1,
                data: yPlanValues,
            },
        ],
        hoverOffset: 4,
    },
    options: {
        legend: {
            labels: {
                fontColor: "#fff",
                fontSize: 12,
            },
        },
        title: {
            display: true,
            text: "Planejamento (%)",
            fontColor: "#fff",
            fontSize: 15,
        },
    },
});

new Chart(real, {
    type: "pie",
    data: {
        labels: xValues,
        datasets: [
            {
                backgroundColor: barColors,
                borderWidth: 2,
                scaleStepWidth: 1,
                data: yRealValues,
            },
        ],
    },
    options: {
        legend: {
            labels: {
                fontColor: "#fff",
                fontSize: 12,
            },
        },
        title: {
            display: true,
            text: "Realidade (%)",
            fontColor: "#fff",
            fontSize: 15,
        },
    },
});

new Chart(fix, {
    type: "pie",
    data: {
        // labels: xValues,
        datasets: [
            {
                backgroundColor: barColors,
                borderWidth: 2,
                scaleStepWidth: 1,
                data: items,
            },
        ],
    },
    options: {
        legend: {
            labels: {
                fontColor: "#000",
                fontSize: 15,
            },
        },
        title: {
            display: true,
            text: "Gastos Fixos (%)",
            fontColor: "#000",
            fontSize: 20,
        },
    },
});
new Chart(vav, {
    type: "pie",
    data: {
        // labels: xValues,
        datasets: [
            {
                backgroundColor: barColors,
                borderWidth: 2,
                scaleStepWidth: 1,
                data: items,
            },
        ],
    },
    options: {
        legend: {
            labels: {
                fontColor: "#000",
                fontSize: 15,
            },
        },
        title: {
            display: true,
            text: "Gastos Variáveis (%)",
            fontColor: "#000",
            fontSize: 20,
        },
    },
});
new Chart(laz, {
    type: "pie",
    data: {
        // labels: xValues,
        datasets: [
            {
                backgroundColor: barColors,
                borderWidth: 2,
                scaleStepWidth: 1,
                data: items,
            },
        ],
    },
    options: {
        legend: {
            labels: {
                fontColor: "#000",
                fontSize: 15,
            },
        },
        title: {
            display: true,
            text: "Gastos com Lazer (%)",
            fontColor: "#000",
            fontSize: 20,
        },
    },
});
new Chart(inv, {
    type: "pie",
    data: {
        // labels: xValues,
        datasets: [
            {
                backgroundColor: barColors,
                borderWidth: 2,
                scaleStepWidth: 1,
                data: items,
            },
        ],
    },
    options: {
        legend: {
            labels: {
                fontColor: "#000",
                fontSize: 15,
            },
        },
        title: {
            display: true,
            text: "Investimentos (%)",
            fontColor: "#000",
            fontSize: 20,
        },
    },
});

