var ajax;
var dadosUsuario;

function requisicaoHTTP(tipo, url, assinc){
    if (window.XMLHttpRequest) {
        ajax = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) {
        ajax = new ActiveXObject("Msxm.XMLHTTP");

        if (!ajax) {
            ajax = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }

    if (ajax) {
        iniciaRequisicao(tipo, url, assinc);
    }
    else {
        alert("Seu navegador nao possui suporte a essa aplicacao!");
    }
}

function iniciaRequisicao(tipo, url, bool){
    ajax.onreadystatechange = trataResposta;
    ajax.open(tipo, url, bool);
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
    ajax.send(dadosUsuario);
}

function trataResposta(){
    if (ajax.readyState == 4) {
        if (ajax.status == 200) {
            trataDados();
        }
        else {
            alert("Problema na comunicacao com o objeto XMLHttpRequest.");
            trataDados();
        }
    }
}

function enviaDados(url){
    criaQueryString();
    requisicaoHTTP("POST", url, true);
}

function criaQueryString(){
    dadosUsuario = "";

    var frm = document.forms[0];
    var numElementos = frm.elements.length;

    for (var i = 0; i < numElementos; i++) {
        if (i < (numElementos - 1)) {
            dadosUsuario += frm.elements[i].name + "=" + encodeURIComponent(frm.elements[i].value) + "&";
        }
        else {
            dadosUsuario += frm.elements[i].name + "=" + encodeURIComponent(frm.elements[i].value);
        }
    }
}