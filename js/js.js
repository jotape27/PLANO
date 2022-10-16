const chk = document.getElementById('chk');
const imgdark = document.getElementsByClassName("img-dark");
const imglight = document.getElementsByClassName("img-light");
//const input = document.getElementsByClassName("input-box");
var i;
chk.addEventListener('change', () => {
    document.body.classList.toggle('dark-mode');
    document.input.classList.toogle('dark');
})

/*function loader() {
const loader = document.getElementsByClassName("preloader");
loader.classList.toogle('complete');
}*/


function maskcpf() {
    var cpf = document.getElementById('cpf');

    if (cpf.value.length == 3 || cpf.value.length == 7) {
        cpf.value += ".";
    } else if (cpf.value.length == 11) {
        cpf.value += "-";
    }

}

function masktel() {
    var tel = document.getElementById('celular');

    if (tel.value.length == 0) {
        tel.value = "(" + tel.value;
    } else if (tel.value.length == 3) {
        tel.value += ") ";
    } else if (tel.value.length == 10) {
        tel.value += "-";
    }
}

function maskcpf2() {
    var cpf2 = document.getElementById('cpf2');

    if (cpf2.value.length == 3 || cpf2.value.length == 7) {
        cpf2.value += ".";
    } else if (cpf2.value.length == 11) {
        cpf2.value += "-";
    }

}

function masktel2() {
    var tel2 = document.getElementById('celular2');

    if (tel2.value.length == 0) {
        tel2.value = "(" + tel2.value;
    } else if (tel2.value.length == 3) {
        tel2.value += ") ";
    } else if (tel2.value.length == 10) {
        tel2.value += "-";
    }
}

function maskcep() {
    var cep = document.getElementById('cep');

    if (cep.value.length == 5) {
        cep.value += "-";
    }
}

function maskcep2() {
    var cep2 = document.getElementById('cep2');

    if (cep2.value.length == 5) {
        cep2.value += "-";
    }
}

function maskMoeda() {
    var elemento = document.getElementById('dinheiro');

    elemento.value = parseInt(elemento.value.replace(/[\D]+/g, ''));
    elemento.value = elemento.value + '';
    elemento.value = elemento.value.replace(/([0-9]{2})$/g, ",$1");

    if (elemento.value.length > 6) {
        elemento.value = elemento.value.replace(/([0-9]{3}),([0-9]{2})/g, ".$1,$2");
    }

    if (elemento.value.length > 10) {
        elemento.value = elemento.value.replace(/([0-9]{3}).([0-9]{3})/g, ".$1.$2");
    }
}

function maskMoeda2() {
    var elemento = document.getElementById('dinheiro2');

    elemento.value = parseInt(elemento.value.replace(/[\D]+/g, ''));
    elemento.value = elemento.value + '';
    elemento.value = elemento.value.replace(/([0-9]{2})$/g, ",$1");

    if (elemento.value.length > 6) {
        elemento.value = elemento.value.replace(/([0-9]{3}),([0-9]{2})/g, ".$1,$2");
    }

    if (elemento.value.length > 10) {
        elemento.value = elemento.value.replace(/([0-9]{3}).([0-9]{3})/g, ".$1.$2");
    }
}

function maskcpf3() {
    var cpf3 = document.getElementById('cpf3');

    if (cpf3.value.length == 3 || cpf3.value.length == 7) {
        cpf3.value += ".";
    } else if (cpf3.value.length == 11) {
        cpf3.value += "-";
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
        valsenha.setCustomValidity('');
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





