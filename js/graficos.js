var xValues = ["Fixos", "Variáveis", "Lazer", "Investimentos"];
//var yPlanValues = [gfixo, invest, 15];
var barColors = [
    "#a200ff",
    "#38a4fc",
    "#F27D52",
    "#04BF9D",
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

var plan = document.getElementById("planejamento").getContext('2d');
var real = document.getElementById("realidade").getContext('2d');
var ctx2 = document.getElementById("realidade2").getContext('2d');


new Chart(plan, {
    //type: "doughnut",
    type: "pie",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            borderWidth: 2,
            scaleStepWidth: 1,
            data: yPlanValues
        }],
        hoverOffset: 4
    },
    options: {
        legend: {
            labels: {
                fontColor: "#fff",
                fontSize: 12
            }
        },
        title: {
            display: true,
            text: "Planejamento (%)",
            fontColor: "#fff",
            fontSize: 15
        }
    }
});

new Chart(real, {
    type: "pie",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            borderWidth: 2,
            scaleStepWidth: 1,
            data: yRealValues
        }]
    },
    options: {
        // tooltips: {
        //     enabled: false
        // },
        //     plugins: {
        //         datalabels: {
        //             formatter: function (value, context) {
        //                 return context.dataIndex + ': ' + Math.round(value * 100) + '%';
        //             }
        //                      formatter: (value, ctx1) => {
        //                          let sum = 0;
        //                          let dataArr = ctx1.chart.data.datasets[0].data;
        //                          dataArr.map(data => {
        //                              sum += data;
        //                          });
        //                          let percentage = (value * 100 / sum).toFixed(2) + "%";
        //                          return percentage;
        //                      },
        //
        //         },
        //         color: '#fff',
        //     }
        // },

        legend: {
            labels: {
                fontColor: "#fff",
                fontSize: 12
            }
        },
        title: {
            display: true,
            text: "Realidade (%)",
            fontColor: "#fff",
            fontSize: 15

        }
    }
});

// new Chart(ctx2, {
//     type: "pie",
//     data: {
//         labels: xValues,
//         datasets: [{
//             backgroundColor: barColors,
//             borderWidth: 2,
//             scaleStepWidth: 1,
//             data: yRealValues
//         }]
//     },
//     options: {
//         legend: {
//             labels: {
//                 fontColor: "#000",
//                 fontSize: 12
//             }
//         },
//         title: {
//             display: true,
//             text: "Realidade (%)",
//             fontColor: "#000",
//             fontSize: 15

//         }
//     }
// });

// $('#myModal').modal(options)
