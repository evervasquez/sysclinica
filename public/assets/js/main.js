var cargando = '<div class="text-center" style="padding: 2em 0"><i class="icon-spinner icon-spin blue bigger-125"></i></div>';
var $path_base = "/";

$(document).ready(function () {
    cargaMenu();
});

var cargaMenu = function () {
    var menu = "_menu";
    $.ajax({
        type: 'GET',
        url: 'menu',
        beforeSend: function () {
            $(menu).html(cargando);
        },
        success: function (data) {
            var menus = generaMenu(data);
            $("."+menu).append(menus);
        }
    })
}

var generaMenu = function (menu) {
    var capaMenu = "";
    var capaInicio = '<li><a class="active" href="/"><i class="fa fa fa-arrow-circle-right"></i> Inicio</a></li>';
    capaMenu += capaInicio;

    for (var i = 0; i < menu.length; i++) {
        var capa = "<li class='panel'>";

        capaMenu += capa;

        //capa del menu padre
        var capaPadre;
        var subLista;
        if(menu[i].enlaces.length > 0){

        capaPadre = '<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#'+menu[i].descripcion+'">' +
            '<i class="fa '+menu[i].icono+'"></i>' + menu[i].descripcion + '<i class="fa fa-caret-down"></i></a>';
            capaMenu += capaPadre;

            subLista = '<ul class="collapse nav" id="'+menu[i].descripcion+'">';
        }



        for (var j = 0; j < menu[i].enlaces.length; j++)
         {
            var subElemento = '<li>';
            subLista += subElemento;
            var subenlace = '<a href="' + menu[i].enlaces[j].url + '"><i class="fa '+menu[i].enlaces[j].icono+'"></i>' + menu[i].enlaces[j].descripcion + '</a>';
            subLista += subenlace;
            subLista += '</li>';
        };

        capaMenu += subLista;
        capaMenu += '</ul>';
        capaMenu += '</li>';

    }
    ;

    return capaMenu;
};

var verPerfil = function(){
    var content = "#content";
    $.ajax({
        type: 'GET',
        url: 'users/getProfile',
        beforeSend: function () {
            $(content).html(cargando);
        },
        success: function (data) {
            $("#nombres").val(data['nombres']);
            $("#apellidos").val(data['apellidos']);
            $("#telefono").val(data['telefono']);
            $("#direccion").val(data['direccion']);
            $("#ciudad").val(data['ciudad']);
            $("#distrito").val(data['distrito']);
            $("#email").val(data['email']);
            $("#web").val(data['web']);
            $("#facebook").val(data['facebook']);
            $("#linkedin").val(data['linkedin']);
            $("#google").val(data['google']);
            $("#twitter").val(data['twitter']);
        }
    })
}

var getClinicas = function()
{
    var content = "#content";
    $.ajax({
        type: 'GET',
        url: 'clinica/getClinica',
        beforeSend: function () {
            $(content).html(cargando);
        },
        success: function (data) {
            $("#idclinica").val(data[0]['id']);
            $("#descripcion").val(data[0]['descripcion']);
            $("#latitud").val(data[0]['latitud']);
            $("#longitud").val(data[0]['longitud']);
            $("#razon_social").val(data[0]['razon_social']);
            $("#telefono").val(data[0]['telefono']);
            $("#direccion").val(data[0]['direccion']);
            $("#ciudad").val(data[0]['ciudad']);
            $("#distrito").val(data[0]['distrito']);
            $("#email").val(data[0]['email']);
            $("#web").val(data[0]['web']);
            $("#facebook").val(data[0]['facebook']);
            $("#twitter").val(data[0]['twitter']);
        }
    });

    $.ajax({
        type: 'GET',
        url: 'servicio/getServicios',
        beforeSend: function () {
            $('#servicios').html(cargando);
        },
        success: function (data) {
            var html="";

            $("#idclinicaServicio").val($("#idclinica").val());

            for(var i=0; i < data.length; i++)
            {
                html += "<label class='checkbox'><input type='checkbox' value='"+data[i]['id']+"' name='servicios[]' />"+data[i]['descripcion']+"</label>";
            }

            html += '<button type="submit" class="btn btn-primary">Actualizar</button>' +
                '<button style="margin-left: 10px" class="btn btn-red">Cancelar</button>';

            $("#servicios").html(html);
        }
    })
}
