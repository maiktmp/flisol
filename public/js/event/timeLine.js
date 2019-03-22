$(document).ready(function () {
    var events = [];
    var eventsFilter = [];
    var active = true;
    var urlWorkShop = $("#inp-url-login-workshop").val();
    var firstHour;
    var $listHours = $("#time-line-nav");
    var $acordion = $("#accordion");

    getEvents(fetchHours);

    function fetchHours() {
        if (events.length > 0) {
            var auxLastHour = null;
            events.forEach(function ($event) {
                var hour = $event.hora_inicio.format("LT");
                if (auxLastHour === null) {
                    auxLastHour = $event.hora_inicio;
                } else {
                    var diff = $event.hora_inicio.diff(auxLastHour);
                    hour = diff === 0 ? null : hour;
                    auxLastHour = $event.hora_inicio;
                }
                $listHours.append(createLiHour(hour));
            });
            firstHour.click();
        }
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
                        // console.log($event.hora_inicio);
                        var $ponentes = [];
                        $event.tiene_ponentes.forEach(function ($ponente) {
                            $ponentes.push(new ponente(
                                $ponente.id,
                                $ponente.nombre,
                                $ponente.correo,
                                $ponente.image_url
                            ))
                        });
                        events.push(new evento(
                            $event.id,
                            $event.nombre,
                            $event.hora_inicio,
                            $event.duracion,
                            $event.cupo,
                            $event.requisitos,
                            $event.descripcion,
                            $ponentes,
                            new tipoEvento($event.tipo_evento.id, $event.tipo_evento.nombre),
                            new ubicacion($event.ubicacion.id, $event.ubicacion.edificio, $event.ubicacion.aula)
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

    $(document).on('click', '#item-hour', function () {
        $this = $(this);
        var $hour = $this.attr("data-date");
        firstHour.removeClass('active');
        $this.addClass('active');
        firstHour = $this;
        eventsFilter = events.filter($event => $event.hora_inicio.format("LT") === $hour);
        fillEventsByHour();
    });

    function fillEventsByHour() {
        $acordion.hide("slow");
        $acordion.empty();
        $acordion.show("slow");
        eventsFilter.forEach(function ($event) {
            $acordion.append(createCard($event));
        });
    }

    /**
     * ====================================
     *      Create elements JQuery
     * ====================================
     */

    function createLiHour(hour) {
        if (hour !== null) {
            var $li = $("<li>", {class: "nav-item"});
            var $a = $("<a>", {
                id: "item-hour",
                class: "nav-link px-0" + (active ? " active" : ""),
                "data-date": hour,
                html: hour,
                href: "#"
            });
            if (active) {
                firstHour = $a;
            }
            active = false;
            return $li.append($a);
        } else {
            return null;
        }
    }

    function createCard($event) {
        var $card = $("<div>", {class: "card"});
        var $cardHeader = $("<div>", {
            id: "heading" + $event.id,
            class: "card-header"
        });
        var $btn = null;
        var $isWorkShop = null;
        if ($event.tipoEvento.id === 1) {
            $btn = $('<a>', {
                role: "button",
                href: urlWorkShop.replace("FAKE_ID", $event.id),
                class: "btn btn-success",
                html: "Inscribirme"
            });
            $isWorkShop = "padding: 20px 0";
        }
        var $title = $("<div>", {class: " row mb-0"});

        var $col12Title = $("<div>", {class: " col-12 ", html: $event.nombre + " (" + $event.tipoEvento.nombre + ") "});
        var $col12Button = $("<div>", {class: " col-12 "}).append($btn);
        var $rowTitle = $("<div>", {class: " row"}).append($col12Title).append($col12Button);

        var details = $("<div>", {
            class: " col-10"
        }).append($rowTitle);

        var details2 = $("<div>", {
            class: " col-2 text-center",
            style: $isWorkShop
        });

        var $btn = $("<div>", {
            class: "btn btn-link collapsed p-0",
            "data-toggle": "collapse",
            "data-target": "#collapse" + $event.id,
            "aria-expanded": "false",
            "aria-controls": "collapse" + $event.id,
            html: '<i class="fas fa-plus-circle color-green-dark"></i>'
        });
        details2.append($btn);
        $title.append(details).append(details2);
        $cardHeader.append($title);

        var $collapse = $("<div>", {
            id: "collapse" + $event.id,
            class: "collapse",
            "aria-labelledby": "heading" + $event.id,
            "data-parent": "#accordion"
        });
        var $p = $('<p>', {
            html: "<b>Ponente: </b>" + $event.ponentes[0].nombre + "<br>" +
                "<b>Duración: </b>" + $event.duracion + "<br>" +
                "<b>Cupo: </b>" + $event.cupo + " personas <br>" +
                "<b>Edificio/Aula: </b>" + $event.ubicacion.edificio + " / " + $event.ubicacion.aula + "<br>" +
                "<b>Descripción: </b>" + $event.descripcion
        });
        var $cardBody = $("<div>", {
            class: "card-body",
            html: $p
        });
        $collapse.append($cardBody);
        $card.append($cardHeader).append($collapse);
        return $card;
    }

    /**
     * ===================================
     *               Objects
     * ====================================
     */
    /**
     *
     * @param id
     * @param nombre
     * @param hora_inicio
     * @param duracion
     * @param requisitos
     * @param descripcion
     */
    function evento(
        id,
        nombre,
        hora_inicio,
        duracion,
        cupo,
        requisitos,
        descripcion,
        ponentes,
        tipoEvento,
        ubicacion
    ) {
        this.id = id;
        this.nombre = nombre;
        this.hora_inicio = moment(hora_inicio);
        this.duracion = duracion;
        this.cupo = cupo;
        this.requisitos = requisitos;
        this.descripcion = descripcion;
        this.ponentes = ponentes;
        this.tipoEvento = tipoEvento;
        this.ubicacion = ubicacion;
    }

    /**
     *
     * @param id
     * @param nombre
     * @param correo
     * @param image_url
     */
    function ponente(
        id,
        nombre,
        correo,
        image_url
    ) {
        this.id = id;
        this.nombre = nombre;
        this.correo = correo;
        this.image_url = image_url;
    }

    /**
     *
     * @param id
     * @param nombre
     */
    function tipoEvento(
        id,
        nombre,
    ) {
        this.id = id;
        this.nombre = nombre;
    }

    function ubicacion(
        id,
        edificio,
        aula,
    ) {
        this.id = id;
        this.edificio = edificio;
        this.aula = aula;
    }

});

