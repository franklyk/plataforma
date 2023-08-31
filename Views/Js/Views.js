$(document).ready(function(){

    //ABRIR MODAL
    $(".open_modal").click(function(){
        $(".modal").fadeIn(400);
        $(".modal").css("display", "flex");
    });
    //FECHA MODAL
    $(".modal-close").click(function(){
        $(".modal").fadeOut(400);
    });

    //FECHA NOTIFICAÇÕES
    $(".open_notification").click(function(){
        $(".notification-container").fadeIn(400);
        $(".notification-container").css("display", "flex");
    });
    //FECHA MODAL
    $(".notification-close").click(function(){
        $(".notification-container").fadeOut(400);
    });

    //CEP AUTOMÁTICO - REPÚBLICA VIRTUAL
   $('.zipcode').blur(function(e){
       if($.trim($('.zipcode').val())){
            $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$('.zipcode').val(),function(){
               if(resultadoCEP["resultado"]){
                    $(".address").val(unescape(resultadoCEP["tipo_logradouro"]) + " "+ unescape(resultadoCEP["logradouro"]));
                    $(".neighborhood").val(unescape(resultadoCEP["bairro"]));
                    $(".city").val(unescape(resultadoCEP["cidade"]));
                    $(".state").val(unescape(resultadoCEP["uf"]));
               }
            });
       }
   });

    //CEP AUTOMÁTICO - REPÚBLICA VIRTUAL
    $('.zipcode5').blur(function(e){
        if($.trim($('.zipcode5').val())){
            $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$('.zipcode5').val(),function(){
                if(resultadoCEP["resultado"]){
                    $(".address5").val(unescape(resultadoCEP["tipo_logradouro"]) + " "+ unescape(resultadoCEP["logradouro"]));
                    $(".neighborhood5").val(unescape(resultadoCEP["bairro"]));
                    $(".city5").val(unescape(resultadoCEP["cidade"]));
                    $(".state5").val(unescape(resultadoCEP["uf"]));
                }
            });
        }
    });

    //CEP AUTOMÁTICO - REPÚBLICA VIRTUAL - Pessoa 1 - PJ
    $('.zipcodePartner1').blur(function(e){
        if($.trim($('.zipcodePartner1').val())){
            $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$('.zipcodePartner1').val(),function(){
                if(resultadoCEP["resultado"]){
                    $(".addressPartner1").val(unescape(resultadoCEP["tipo_logradouro"]) + " "+ unescape(resultadoCEP["logradouro"]));
                    $(".neighborhoodPartner1").val(unescape(resultadoCEP["bairro"]));
                    $(".cityPartner1").val(unescape(resultadoCEP["cidade"]));
                    $(".statePartner1").val(unescape(resultadoCEP["uf"]));
                }
            });
        }
    });

    //CEP AUTOMÁTICO - REPÚBLICA VIRTUAL - Pessoa 2 - PJ
    $('.zipcodePartner2').blur(function(e){
        if($.trim($('.zipcodePartner2').val())){
            $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$('.zipcodePartner2').val(),function(){
                if(resultadoCEP["resultado"]){
                    $(".addressPartner2").val(unescape(resultadoCEP["tipo_logradouro"]) + " "+ unescape(resultadoCEP["logradouro"]));
                    $(".neighborhoodPartner2").val(unescape(resultadoCEP["bairro"]));
                    $(".cityPartner2").val(unescape(resultadoCEP["cidade"]));
                    $(".statePartner2").val(unescape(resultadoCEP["uf"]));
                }
            });
        }
    });

    //CEP AUTOMÁTICO - REPÚBLICA VIRTUAL - Pessoa 3 - PJ
    $('.zipcodePartner3').blur(function(e){
        if($.trim($('.zipcodePartner3').val())){
            $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$('.zipcodePartner3').val(),function(){
                if(resultadoCEP["resultado"]){
                    $(".addressPartner3").val(unescape(resultadoCEP["tipo_logradouro"]) + " "+ unescape(resultadoCEP["logradouro"]));
                    $(".neighborhoodPartner3").val(unescape(resultadoCEP["bairro"]));
                    $(".cityPartner3").val(unescape(resultadoCEP["cidade"]));
                    $(".statePartner3").val(unescape(resultadoCEP["uf"]));
                }
            });
        }
    });

    //CEP AUTOMÁTICO - REPÚBLICA VIRTUAL - Pessoa 4 - PJ
    $('.zipcodePartner4').blur(function(e){
        if($.trim($('.zipcodePartner4').val())){
            $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$('.zipcodePartner4').val(),function(){
                if(resultadoCEP["resultado"]){
                    $(".addressPartner4").val(unescape(resultadoCEP["tipo_logradouro"]) + " "+ unescape(resultadoCEP["logradouro"]));
                    $(".neighborhoodPartner4").val(unescape(resultadoCEP["bairro"]));
                    $(".cityPartner4").val(unescape(resultadoCEP["cidade"]));
                    $(".statePartner4").val(unescape(resultadoCEP["uf"]));
                }
            });
        }
    });

    //CEP AUTOMÁTICO - REPÚBLICA VIRTUAL - Pessoa 5 - PJ
    $('.zipcodePartner5').blur(function(e){
        if($.trim($('.zipcodePartner5').val())){
            $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$('.zipcodePartner5').val(),function(){
                if(resultadoCEP["resultado"]){
                    $(".addressPartner5").val(unescape(resultadoCEP["tipo_logradouro"]) + " "+ unescape(resultadoCEP["logradouro"]));
                    $(".neighborhoodPartner5").val(unescape(resultadoCEP["bairro"]));
                    $(".cityPartner5").val(unescape(resultadoCEP["cidade"]));
                    $(".statePartner5").val(unescape(resultadoCEP["uf"]));
                }
            });
        }
    });

     //CEP AUTOMÁTICO - REPÚBLICA VIRTUAL - Pessoa 6 - PJ
    $('.zipcodePartner6').blur(function(e){
        if($.trim($('.zipcodePartner6').val())){
            $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$('.zipcodePartner6').val(),function(){
                if(resultadoCEP["resultado"]){
                    $(".addressPartner6").val(unescape(resultadoCEP["tipo_logradouro"]) + " "+ unescape(resultadoCEP["logradouro"]));
                    $(".neighborhoodPartner6").val(unescape(resultadoCEP["bairro"]));
                    $(".cityPartner6").val(unescape(resultadoCEP["cidade"]));
                    $(".statePartner6").val(unescape(resultadoCEP["uf"]));
                }
            });
        }
    });

});

//AUTOCARREGAMENTO DE IMAGENS - PREVIEW
var loadFile = function(event){
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById("loadPhoto");
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
};

//INTERVALO DE TEMPO - MODAIS
setInterval(function(){
    $(".notification-container").fadeOut(1000);
}, 5000);

//TABELAS ZEBRADAS
$("table tbody tr:odd").css("background-color", "#d2d2d2");
$("table tbody tr:even").css("background-color", "#e4e4e4");
$("table tbody td").css("padding", "10px 20px");

//VALIDAR CPF
function CPF(){"user_strict";function r(r){
    for(var t=null,n=0;9>n;++n)t+=r.toString().charAt(n)*(10-n);var i=t%11;return i=2>i?0:11-i}function t(r){
    for(var t=null,n=0;10>n;++n)t+=r.toString().charAt(n)*(11-n);var i=t%11;return i=2>i?0:11-i}var n="(CPF Inválido)",
    i="";this.gera=function(){for(var n="",i=0;9>i;++i)n+=Math.floor(9*Math.random())+"";var o=r(n),a=n+"-"+o+t(n+""+o);
    return a},this.valida=function(o){for(var a=o.replace(/\D/g,""),u=a.substring(0,9),f=a.substring(9,11),v=0;10>v;v++)
    if(""+u+f==""+v+v+v+v+v+v+v+v+v+v+v)return n;var c=r(u),e=t(u+""+c);return f.toString()===c.toString()+e.toString()?i:n}}

var CPF = new CPF();
$(".cpf").keypress(function(){
    $("#validateCPF").html(CPF.valida($(this).val()));
});

$(".cpf").blur(function(){
    $("#validateCPF").html(CPF.valida($(this).val()));
});

//VALIDAR CNPJ
function cnpj(cnpj) {

    cnpj = cnpj.replace(/[^\d]+/g, '');

    if (cnpj == '') return false;

    if (cnpj.length != 14)
        return false;


    if (cnpj == "00000000000000" ||
        cnpj == "11111111111111" ||
        cnpj == "22222222222222" ||
        cnpj == "33333333333333" ||
        cnpj == "44444444444444" ||
        cnpj == "55555555555555" ||
        cnpj == "66666666666666" ||
        cnpj == "77777777777777" ||
        cnpj == "88888888888888" ||
        cnpj == "99999999999999")
        return false;


    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0, tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0)) return false;
    tamanho = tamanho + 1;
    numeros = cnpj.substring(0, tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
        return false;

    return true;

}

function validarCNPJ(el){
    if(cnpj(el.value) == false){
        $("#validateCNPJ").html('(CNPJ Inválido)');
    }else{
        $("#validateCNPJ").html('');
    }
}

/* MÁSCARA DE CEP */
jQuery("input.zipcode")
    .mask("99999-999")
    .focusout(function(event){
        var target, zipcode, element;
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
        zipcode = target.value.replace(/\D/g, '');
        element = $(target);
        element.unmask();

        if(zipcode.length > 9){
            element.mask("99999-999");
        }else{
            element.mask("99999-999");
        }
    });

jQuery("input.zipcode")
    .mask("99999-999")
    .focusout(function(event){
        var target, zipcode, element;
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
        zipcode = target.value.replace(/\D/g, '');
        element = $(target);
        element.unmask();

        if(zipcode.length > 9){
            element.mask("99999-999");
        }else{
            element.mask("99999-999");
        }
    });

/* MÁSCARA DE TELEFONE */
jQuery("input.phone")
    .mask("(99) 9999-9999?9")
    .focusout(function(event){
        var target, phone, element;
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
        phone = target.value.replace(/\D/g, '');
        element = $(target);
        element.unmask();

        if(phone.length > 10){
            element.mask("(99) 99999-999?9");
        }else{
            element.mask("(99) 9999-9999?9");
        }
    });

/* MÁSCARA DE DATA */
jQuery("input.datebirth")
    .mask("99/99/9999")
    .focusout(function(event){
        var target, datebirth, element;
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
        datebirth = target.value.replace(/\D/g, '');
        element = $(target);
        element.unmask();

        if(datebirth.length > 10){
            element.mask("99/99/9999");
        }else{
            element.mask("99/99/9999");
        }
    });

/* MÁSCARA DE CPF */
jQuery("input.cpf")
    .mask("999.999.999-99")
    .focusout(function(event){
        var target, cpf, element;
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
        cpf = target.value.replace(/\D/g, '');
        element = $(target);
        element.unmask();

        if(cpf.length > 14){
            element.mask("999.999.999-99");
        }else{
            element.mask("999.999.999-99");
        }
    });

/* MÁSCARA DE CNPJ */
jQuery("input.cnpj")
    .mask("99.999.999/9999-99")
    .focusout(function(event){
        var target, cnpj, element;
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
        cnpj = target.value.replace(/\D/g, '');
        element = $(target);
        element.unmask();

        if(cnpj.length > 18){
            element.mask("99.999.999/9999-99");
        }else{
            element.mask("99.999.999/9999-99");
        }
    });

/* MÁSCARA DE MOEDA */
$(".money").maskMoney();