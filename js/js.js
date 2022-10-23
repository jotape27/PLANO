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
