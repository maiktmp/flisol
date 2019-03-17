$(document).ready(function () {
    var events = [];
    getEvents(fetchHours);


    function fetchHours() {
        console.log(events);
    }

    function getEvents(callback) {
        var URL = $("#inp-url-get-all-events").val();
        $.ajax({
            type: "GET",
            async: true,
            url: URL,
            dataType: "json",
            success: function (result, status, xhr) {
                if (xhr.status === 200) {
                    result.forEach(function ($event) {
                        events.push(new evento(
                            $event.id,
                            $event.nombre,
                            $event.hora_inicio,
                            $event.duracion,
                            $event.requisitos,
                            $event.descripcion
                        ));
                    });
                    callback();
                }
            },
            error: function () {
                console.error("Error events")
            }
        });
    }

    function evento(
        id,
        nombre,
        hora_inicio,
        duracion,
        requisitos,
        descripcion
    ) {
        this.id = id;
        this.nombre = nombre;
        this.hora_inicio = moment(hora_inicio, "LT");
        this.duracion = duracion;
        this.requisitos = requisitos;
        this.descripcion = descripcion;
    }
});

