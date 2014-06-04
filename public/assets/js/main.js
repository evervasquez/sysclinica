var cargando = '<div class="text-center" style="padding: 2em 0"><i class="icon-spinner icon-spin blue bigger-125"></i></div>';
var $path_base = "/";
var botones_acciones;

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
        var capaPadre = '<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#'+menu[i].descripcion+'">' +
            '<i class="fa '+menu[i].icono+'"></i>' + menu[i].descripcion + '<i class="fa fa-caret-down"></i></a>';

        capaMenu += capaPadre;

        var subLista = '<ul class="collapse nav" id="'+menu[i].descripcion+'">';

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
