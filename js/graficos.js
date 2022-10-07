var xValues = ["Gastos Fixos", "Investimentos", "Lazer"];
//var yPlanValues = [gfixo, invest, 15];
var yPlanValues = [30, 40, 30];
var yRealValues = [55, 15, 30];
var barColors = [
   "#253659",
   "#04BF9D",
   "#F27D52",
];

var itemgraf = [];
itemgraf[0] = valor;
itemgraf[1] = document.getElementById("lazerid").value;
itemgraf[2] = document.getElementById("investeid").value;

var valor = itemgraf[1];
var valor1 = itemgraf[2];

itemgraf[0] = valor + valor1;
new Chart("planejamento1", {
   type: "pie",
   data: {
      labels: xValues,
      datasets: [{
         backgroundColor: barColors,
         data: yPlanValues
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


