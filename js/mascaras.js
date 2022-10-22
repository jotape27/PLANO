function numberToReal(numero) {
    var numero = numero.toFixed(2).split('.');
    numero[0] = "R$ " + numero[0].split(/(?=(?:...)*$)/).join('.');
    return numero.join(',');
}

function leech(v) {
    v = v.replace(/o/gi, "0")
    v = v.replace(/i/gi, "1")
    v = v.replace(/z/gi, "2")
    v = v.replace(/e/gi, "3")
    v = v.replace(/a/gi, "4")
    v = v.replace(/s/gi, "5")
    v = v.replace(/t/gi, "7")
    return v
}

function soNumeros(v) {
    return v.replace(/\D/g, "")
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
    v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
    v = v.replace(/(\d{3})(\d)/, "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
    v = v.replace(/(\d{3})(\d)/, "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
    //de novo (para o segundo bloco de números)
    v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); //Coloca um hífen entre o terceiro e o quarto dígitos
    return v;
}

function telefone(v) {
    v = v.replace(/\D/g, "")                 //Remove tudo o que não é dígito
    v = v.replace(/^(\d\d)(\d)/g, "($1) $2") //Coloca parênteses em volta dos dois primeiros dígitos
    v = v.replace(/(\d{5})(\d)/, "$1-$2")    //Coloca hífen entre o quarto e o quinto dígitos
    return v
}

function cep(v) {
    v = v.replace(/D/g, "")                //Remove tudo o que não é dígito
    v = v.replace(/^(\d{5})(\d)/, "$1-$2") //Esse é tão fácil que não merece explicações
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