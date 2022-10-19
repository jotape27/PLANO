var xValues = ["Fixos", "Variáveis", "Lazer", "Investimentos"];
//var yPlanValues = [gfixo, invest, 15];
var barColors = [
   "#a200ff",
   "#38a4fc",
   "#F27D52",
   "#04BF9D",
];

/*var itemgraf = [];
itemgraf[0] = 0;
itemgraf[1] = document.getElementById("lazerid").value;
itemgraf[2] = document.getElementById("investeid").value;
itemgraf[3] = 5;

var valor = itemgraf[1];
var valor1 = itemgraf[2];
var valor2 = itemgraf[3];

var valor3 = parseInt(valor) + parseInt(valor1) + parseInt(valor2);
itemgraf[0] = 100 - parseInt(valor3);*/

var yPlanValues = [25, 40, 15, 20];

var yRealValues = [25, 30, 25, 15];

new Chart("planejamento1", {
   type: "pie",
   data: {
      labels: xValues,
      datasets: [{
         backgroundColor: barColors,
         borderWidth: 2,
         scaleStepWidth: 1,
         data: yPlanValues
      }]
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
         text: "Planejamento",
         fontColor: "#fff",
         fontSize: 15

      }
   }
});


new Chart("realidade1", {
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
      legend: {
         labels: {
            fontColor: "#fff",
            fontSize: 12
         }
      },
      title: {
         display: true,
         text: "Realidade",
         fontColor: "#fff",
         fontSize: 15
      }
   }
});


