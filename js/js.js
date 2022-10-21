const chk = document.getElementById("chk");
const imgdark = document.getElementsByClassName("img-dark");
const imglight = document.getElementsByClassName("img-light");
//const input = document.getElementsByClassName("input-box");
var i;
chk.addEventListener("change", () => {
  document.body.classList.toggle("dark-mode");
  document.input.classList.toogle("dark");
});

/*function loader() {
const loader = document.getElementsByClassName("preloader");
loader.classList.toogle('complete');
}*/

function numberToReal(numero) {
  var numero = numero.toFixed(2).split('.');
  numero[0] = "R$ " + numero[0].split(/(?=(?:...)*$)/).join('.');
  return numero.join(',');
}

function leech(v){
  v=v.replace(/o/gi,"0")
  v=v.replace(/i/gi,"1")
  v=v.replace(/z/gi,"2")
  v=v.replace(/e/gi,"3")
  v=v.replace(/a/gi,"4")
  v=v.replace(/s/gi,"5")
  v=v.replace(/t/gi,"7")
  return v
}
function soNumeros(v){
  return v.replace(/\D/g,"")
}

function mascara(o, f) {
  v_obj = o;
  v_fun = f;
  setTimeout("execmascara()", 1);
}

function execmascara() {
  v_obj.value = v_fun(v_obj.value);
}

function cpf(v) {
  v = v.replace(/\D/g,""); //Remove tudo o que não é dígito
  v = v.replace(/(\d{3})(\d)/, "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
  v = v.replace(/(\d{3})(\d)/, "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
  //de novo (para o segundo bloco de números)
  v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); //Coloca um hífen entre o terceiro e o quarto dígitos
  return v;
}

function telefone(v){
  v=v.replace(/\D/g,"")                 //Remove tudo o que não é dígito
  v=v.replace(/^(\d\d)(\d)/g,"($1) $2") //Coloca parênteses em volta dos dois primeiros dígitos
  v=v.replace(/(\d{5})(\d)/,"$1-$2")    //Coloca hífen entre o quarto e o quinto dígitos
  return v
}

function cep(v){
  v=v.replace(/D/g,"")                //Remove tudo o que não é dígito
  v=v.replace(/^(\d{5})(\d)/,"$1-$2") //Esse é tão fácil que não merece explicações
  return v
}

function maskMoeda() {
  var elemento = document.getElementById("dinheiro");

  elemento.value = parseInt(elemento.value.replace(/[\D]+/g, ""));
  elemento.value = elemento.value + "";
  elemento.value = elemento.value.replace(/([0-9]{2})$/g, ",$1");

  if (elemento.value.length > 6) {
    elemento.value = elemento.value.replace(/([0-9]{3}),([0-9]{2})/g, ".$1,$2");
  }

  if (elemento.value.length > 10) {
    elemento.value = elemento.value.replace(/([0-9]{3}).([0-9]{3})/g, ".$1.$2");
  }
}

function maskMoeda2() {
  var elemento = document.getElementById("dinheiro2");

  elemento.value = parseInt(elemento.value.replace(/[\D]+/g, ""));
  elemento.value = elemento.value + "";
  elemento.value = elemento.value.replace(/([0-9]{2})$/g, ",$1");

  if (elemento.value.length > 6) {
    elemento.value = elemento.value.replace(/([0-9]{3}),([0-9]{2})/g, ".$1,$2");
  }

  if (elemento.value.length > 10) {
    elemento.value = elemento.value.replace(/([0-9]{3}).([0-9]{3})/g, ".$1.$2");
  }
}

function maskMoeda3() {
  var elemento = document.getElementById("dinheiro3");

  elemento.value = parseInt(elemento.value.replace(/[\D]+/g, ""));
  elemento.value = elemento.value + "";
  elemento.value = elemento.value.replace(/([0-9]{2})$/g, ",$1");

  if (elemento.value.length > 6) {
    elemento.value = elemento.value.replace(/([0-9]{3}),([0-9]{2})/g, ".$1,$2");
  }

  if (elemento.value.length > 10) {
    elemento.value = elemento.value.replace(/([0-9]{3}).([0-9]{3})/g, ".$1.$2");
  }
}

function maskMoeda4() {
  var elemento = document.getElementById("dinheiro4");

  elemento.value = parseInt(elemento.value.replace(/[\D]+/g, ""));
  elemento.value = elemento.value + "";
  elemento.value = elemento.value.replace(/([0-9]{2})$/g, ",$1");

  if (elemento.value.length > 6) {
    elemento.value = elemento.value.replace(/([0-9]{3}),([0-9]{2})/g, ".$1,$2");
  }

  if (elemento.value.length > 10) {
    elemento.value = elemento.value.replace(/([0-9]{3}).([0-9]{3})/g, ".$1.$2");
  }
}

function maskMoeda5() {
  var elemento = document.getElementById("dinheiro5");

  elemento.value = parseInt(elemento.value.replace(/[\D]+/g, ""));
  elemento.value = elemento.value + "";
  elemento.value = elemento.value.replace(/([0-9]{2})$/g, ",$1");

  if (elemento.value.length > 6) {
    elemento.value = elemento.value.replace(/([0-9]{3}),([0-9]{2})/g, ".$1,$2");
  }

  if (elemento.value.length > 10) {
    elemento.value = elemento.value.replace(/([0-9]{3}).([0-9]{3})/g, ".$1.$2");
  }
}






function porcent(novoValor) {
  document.getElementById("exibePorcent").innerHTML = novoValor;
}

function porcent1(novoValor) {
  document.getElementById("exibePorcent1").innerHTML = novoValor;
}

/*
var imgdark = document.getElementsByClassName("img-dark");
var imglight = document.getElementsByClassName("img-light");
var input = document.input;
var element = document.body;
input.classList.add("input-dark-mode");
element.classList.toggle("dark-mode");
if (imgdark.style.display = "flex") 
imgdark.style.display = "none";
imglight.style.display = "flex";
} else {
imgdark.style.display = "flex";
imglight.style.display = "none";
}*/
function show() {
  var x, i, show, hide;
  x = document.getElementById("senha");
  hide = document.getElementsByClassName("hide");
  show = document.getElementsByClassName("show");
  for (i = 0; i < show.length; i++) {
    show[i].style.display = "none";
    hide[i].style.display = "flex";
    x.type = "text";
  }
}
function valshow() {
  var x, i, show, hide;
  x = document.getElementById("valsenha");
  hide = document.getElementsByClassName("valhide");
  show = document.getElementsByClassName("valshow");
  for (i = 0; i < show.length; i++) {
    show[i].style.display = "none";
    hide[i].style.display = "flex";
    x.type = "text";
  }
}
function hide() {
  var x, i, show, hide;
  x = document.getElementById("senha");
  hide = document.getElementsByClassName("hide");
  show = document.getElementsByClassName("show");
  for (i = 0; i < show.length; i++) {
    show[i].style.display = "flex";
    hide[i].style.display = "none";
    x.type = "password";
  }
}
function valhide() {
  var x, i, show, hide;
  x = document.getElementById("valsenha");
  hide = document.getElementsByClassName("valhide");
  show = document.getElementsByClassName("valshow");
  for (i = 0; i < show.length; i++) {
    show[i].style.display = "flex";
    hide[i].style.display = "none";
    x.type = "password";
  }
}

function validatePassword() {
  var senha = document.getElementById("senha"),
    valsenha = document.getElementById("valsenha");

  if (senha.value != valsenha.value) {
    valsenha.setCustomValidity("Senhas diferentes!");
    return false;
  } else {
    valsenha.setCustomValidity("");
    return true;
  }
}

function openCadastro() {
  var i, abrir, fechar;
  fechar = document.getElementsByClassName("part1");
  abrir = document.getElementsByClassName("part2");
  for (i = 0; i < abrir.length; i++) {
    abrir[i].style.display = "none";
    fechar[i].style.display = "flex";
  }
}

function closeCadastro() {
  var i, abrir, fechar;
  fechar = document.getElementsByClassName("part1");
  abrir = document.getElementsByClassName("part2");
  for (i = 0; i < abrir.length; i++) {
    abrir[i].style.display = "flex";
    fechar[i].style.display = "none";
  }
}

function openEndereco() {
  var i, abrir, fechar;
  fechar = document.getElementsByClassName("part2");
  abrir = document.getElementsByClassName("part3");
  for (i = 0; i < abrir.length; i++) {
    abrir[i].style.display = "none";
    fechar[i].style.display = "flex";
  }
}

function closeEndereco() {
  var i, abrir, fechar;
  fechar = document.getElementsByClassName("part2");
  abrir = document.getElementsByClassName("part3");
  for (i = 0; i < abrir.length; i++) {
    abrir[i].style.display = "flex";
    fechar[i].style.display = "none";
  }
}

function openPlan() {
  var i, abrir, fechar;
  fechar = document.getElementsByClassName("part3");
  abrir = document.getElementsByClassName("part4");
  for (i = 0; i < abrir.length; i++) {
    abrir[i].style.display = "none";
    fechar[i].style.display = "flex";
  }
}

function closePlan() {
  var i, abrir, fechar;
  fechar = document.getElementsByClassName("part3");
  abrir = document.getElementsByClassName("part4");
  for (i = 0; i < abrir.length; i++) {
    abrir[i].style.display = "flex";
    fechar[i].style.display = "none";
  }
}

//---------------------------------------------------------------------------------------------------------------------

function openFixo() {
  var i, abrir, fechar;
  fechar = document.getElementsByClassName("addFixo");
  abrir = document.getElementsByClassName("adcFixo");
  for (i = 0; i < abrir.length; i++) {
    abrir[i].style.display = "flex";
    fechar[i].style.display = "none";
  }
}

function closeFixo() {
  var i, abrir, fechar;
  fechar = document.getElementsByClassName("addFixo");
  abrir = document.getElementsByClassName("adcFixo");
  for (i = 0; i < abrir.length; i++) {
    abrir[i].style.display = "none";
    fechar[i].style.display = "flex";
  }
}

function openVariavel() {
  var i, abrir, fechar;
  fechar = document.getElementsByClassName("addVariavel");
  abrir = document.getElementsByClassName("adcVariavel");
  for (i = 0; i < abrir.length; i++) {
    abrir[i].style.display = "flex";
    fechar[i].style.display = "none";
  }
}

function closeVariavel() {
  var i, abrir, fechar;
  fechar = document.getElementsByClassName("addVariavel");
  abrir = document.getElementsByClassName("adcVariavel");
  for (i = 0; i < abrir.length; i++) {
    abrir[i].style.display = "none";
    fechar[i].style.display = "flex";
  }
}

function openLazer() {
  var i, abrir, fechar;
  fechar = document.getElementsByClassName("addLazer");
  abrir = document.getElementsByClassName("adcLazer");
  for (i = 0; i < abrir.length; i++) {
    abrir[i].style.display = "flex";
    fechar[i].style.display = "none";
  }
}

function closeLazer() {
  var i, abrir, fechar;
  fechar = document.getElementsByClassName("addLazer");
  abrir = document.getElementsByClassName("adcLazer");
  for (i = 0; i < abrir.length; i++) {
    abrir[i].style.display = "none";
    fechar[i].style.display = "flex";
  }
}

function openInvestimento() {
  var i, abrir, fechar;
  fechar = document.getElementsByClassName("addInvestimento");
  abrir = document.getElementsByClassName("adcInvestimento");
  for (i = 0; i < abrir.length; i++) {
    abrir[i].style.display = "flex";
    fechar[i].style.display = "none";
  }
}

function closeInvestimento() {
  var i, abrir, fechar;
  fechar = document.getElementsByClassName("addInvestimento");
  abrir = document.getElementsByClassName("adcInvestimento");
  for (i = 0; i < abrir.length; i++) {
    abrir[i].style.display = "none";
    fechar[i].style.display = "flex";
  }
}
