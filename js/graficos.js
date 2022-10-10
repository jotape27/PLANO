var xValues = ["Fixos", "Variáveis", "Lazer", "Investimentos"];
//var yPlanValues = [gfixo, invest, 15];
var yPlanValues = [30, 40, 20, 10];
var yRealValues = [20, 30, 25, 15];
var barColors = [
   "#a200ff",
   "#38a4fc",
   "#F27D52",
   "#04BF9D",
];

var itemgraf = [];
itemgraf[0] = valor;
itemgraf[1] = document.getElementById("lazerid").value;
itemgraf[2] = document.getElementById("investeid").value;

var valor = itemgraf[1];
var valor1 = itemgraf[2];


var valor2 = parseInt(valor) + parseInt(valor1);
itemgraf[0] = 100 - parseInt(valor2);

new Chart("planejamento1", {
   type: "pie",
   data: {
      labels: xValues,
      datasets: [{
         backgroundColor: barColors,
         data: itemgraf
      }]
   },
   options: {
      title: {
         display: true,
         text: "Planejamento"
      }
   }
});


new Chart("realidade1", {
   type: "pie",
   data: {
      labels: xValues,
      datasets: [{
         backgroundColor: barColors,
         data: yRealValues
      }]
   },
   options: {
      title: {
         display: true,
         text: "Realidade",
      }
   }
});


