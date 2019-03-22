var rutaOriginal = $("#img-ponente").attr("src");

$(document).ready(function () {
    $("#modal-profile").modal("hide");
});

function clickButtonProfile(id) {
    var URL = $("#inp-url-ponente-view").val();
    URL = URL.replace("FAKE_ID", id);
    $.ajax({
        type: "GET",
        async: true,
        url: URL,
        dataType: "json",
        success: function (response) {
            if (response.success) {
                $("#img-ponente").attr("src", rutaOriginal + response.data.image_url);
                $("#inp-ponente-nombre").val(response.data.nombre);
                if (response.data.patrocinador != null) {
                    $("#inp-ponente-sponsor").val(response.data.patrocinador.r_social);
                } else {
                    $("#inp-ponente-sponsor").val("Independiente");
                }
                $("#ponente-desc").html(response.data.descripcion);
                $("#inp-ponente-contacto").val(response.data.correo);
                $("#modal-profile").modal("show");
                var $tbodyEvents = $("#tbody-events");
                $tbodyEvents.empty();
                var eventos = response.data.tiene_eventos;
                eventos.forEach(function (evento) {
                    var $trEvents = $("<tr>");
                    $trEvents.append($("<td>", {class: "text-center", html: evento.tipo_evento.nombre}));
                    $trEvents.append($("<td>", {class: "text-center", html: evento.nombre}));
                    var $hora = moment(evento.hora_inicio);
                    $trEvents.append($("<td>", {class: "text-center", html: $hora.format("LT")}));
                    $trEvents.append($("<td>", {
                        class: "text-center",
                        html: evento.ubicacion.edificio + "-" + evento.ubicacion.aula
                    }));
                    $tbodyEvents.append($trEvents);
                });

                $('.modal').on('shown.bs.modal', function () {
                    //Make sure the modal and backdrop are siblings (changes the DOM)
                    $(this).before($('.modal-backdrop'));
                    //Make sure the z-index is higher than the backdrop
                    $(this).css("z-index", parseInt($('.modal-backdrop').css('z-index')) + 1);
                    // $(this).css("z-index", parseInt($('.login-footer').css('z-index')) + 1);
                    // $('.login-footer').css("position", "inherit");
                });
            }
        },
        error: function () {

        }
    });
}
