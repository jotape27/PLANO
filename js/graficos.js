var xValues = ["Fixos", "Variáveis", "Lazer", "Investimentos"];
//var yPlanValues = [gfixo, invest, 15];
var barColors = ["#a200ff", "#38a4fc", "#F27D52", "#04BF9D"];
var barColors0 = [
    "#a200ff",
    "#38a4fc",
    "#F27D52",
    "#04BF9D",
    "#e98931",
    "#eb403b",
    "#b32E37",
    "#6c2a6a",
    "#5c4399",
    "#274389",
    "#1f5ea8",
    "#fbb735",
    "#227FB0",
    "#2ab0c5",
    "#39c0b3",
];
var barColors1 = [
    "#a200ff",
    "#38a4fc",
    "#F27D52",
    "#04BF9D",
    "#e98931",
    "#eb403b",
    "#b32E37",
    "#6c2a6a",
    "#5c4399",
    "#274389",
    "#1f5ea8",
    "#fbb735",
    "#227FB0",
    "#2ab0c5",
    "#39c0b3",
];
var barColors2 = [
    "#a200ff",
    "#38a4fc",
    "#F27D52",
    "#04BF9D",
    "#e98931",
    "#eb403b",
    "#b32E37",
    "#6c2a6a",
    "#5c4399",
    "#274389",
    "#1f5ea8",
    "#fbb735",
    "#227FB0",
    "#2ab0c5",
    "#39c0b3",
];
var barColors3 = [
    "#a200ff",
    "#38a4fc",
    "#F27D52",
    "#04BF9D",
    "#e98931",
    "#eb403b",
    "#b32E37",
    "#6c2a6a",
    "#5c4399",
    "#274389",
    "#1f5ea8",
    "#fbb735",
    "#227FB0",
    "#2ab0c5",
    "#39c0b3",
];

// Função para randomizar array
function shuffleArray(arr) {
    // Loop em todos os elementos
    for (let i = arr.length - 1; i > 0; i--) {
        // Escolhendo elemento aleatório
        const j = Math.floor(Math.random() * (i + 1));
        [arr[i], arr[j]] = [arr[j], arr[i]];
    }

    return arr;
}
function shuffleArray1(arr) {
    // Loop em todos os elementos
    for (let i = arr.length - 1; i > 0; i--) {
        // Escolhendo elemento aleatório
        const j = Math.floor(Math.random() * (i + 1));
        [arr[i], arr[j]] = [arr[j], arr[i]];
    }

    return arr;
}
function shuffleArray2(arr) {
    // Loop em todos os elementos
    for (let i = arr.length - 1; i > 0; i--) {
        // Escolhendo elemento aleatório
        const j = Math.floor(Math.random() * (i + 1));
        [arr[i], arr[j]] = [arr[j], arr[i]];
    }

    return arr;
}
function shuffleArray3(arr) {
    // Loop em todos os elementos
    for (let i = arr.length - 1; i > 0; i--) {
        // Escolhendo elemento aleatório
        const j = Math.floor(Math.random() * (i + 1));
        [arr[i], arr[j]] = [arr[j], arr[i]];
    }

    return arr;
}

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

Arrayfixo = [];
Arrayfixonome = [];
for (let i = 0; i < document.getElementsByClassName("gastofixo").length; i++) {
    var gastofixo = document.getElementsByClassName("gastofixo")[i];
    var gastofixonome = document.getElementsByClassName("gastofixonome")[i];

    Arrayfixo[i] = gastofixo.value;
    Arrayfixonome[i] = gastofixonome.value;
}
console.log(Arrayfixo);

new Chart(fix, {
    type: "pie",
    data: {
        labels: Arrayfixonome,
        datasets: [
            {
                backgroundColor: shuffleArray(barColors0),
                borderWidth: 2,
                scaleStepWidth: 1,
                data: Arrayfixo,
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

Arrayvariavel = [];
Arrayvariavelnome = [];
for (
    let i = 0;
    i < document.getElementsByClassName("gastovariavel").length;
    i++
) {
    var gastovariavel = document.getElementsByClassName("gastovariavel")[i];
    var gastovariavelnome =
        document.getElementsByClassName("gastovariavelnome")[i];
    // var gastofixo = document.getElementsByClassName("gastofixo")[0];
    Arrayvariavel[i] = gastovariavel.value;
    Arrayvariavelnome[i] = gastovariavelnome.value;
}
console.log(Arrayvariavel);

new Chart(vav, {
    type: "pie",
    data: {
        labels: Arrayvariavelnome,
        datasets: [
            {
                backgroundColor: shuffleArray1(barColors1),
                borderWidth: 2,
                scaleStepWidth: 1,
                data: Arrayvariavel,
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

Arraylazer = [];
Arraylazernome = [];
for (let i = 0; i < document.getElementsByClassName("gastolazer").length; i++) {
    var gastolazer = document.getElementsByClassName("gastolazer")[i];
    var gastolazernome = document.getElementsByClassName("gastolazernome")[i];
    Arraylazer[i] = gastolazer.value;
    Arraylazernome[i] = gastolazernome.value;
}
console.log(Arraylazer);

new Chart(laz, {
    type: "pie",
    data: {
        labels: Arraylazernome,
        datasets: [
            {
                backgroundColor: shuffleArray2(barColors2),
                borderWidth: 2,
                scaleStepWidth: 1,
                data: Arraylazer,
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

Arrayinvest = [];
Arrayinvestnome = [];
for (
    let i = 0;
    i < document.getElementsByClassName("gastoinvestimento").length;
    i++
) {
    var gastoinvest = document.getElementsByClassName("gastoinvestimento")[i];
    var gastoinvestnome = document.getElementsByClassName(
        "gastoinvestimentonome"
    )[i];
    // var gastofixo = document.getElementsByClassName("gastofixo")[0];
    Arrayinvest[i] = gastoinvest.value;
    Arrayinvestnome[i] = gastoinvestnome.value;
}
console.log(Arrayinvest);

new Chart(inv, {
    type: "pie",
    data: {
        labels: Arrayinvestnome,
        datasets: [
            {
                backgroundColor: shuffleArray3(barColors3),
                borderWidth: 2,
                scaleStepWidth: 1,
                data: Arrayinvest,
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
// elemento = barColors[Math.floor(Math.random() * barColors.length)];

// barColors.forEach(function (color) {
//     console.log(color).sort();
// });
