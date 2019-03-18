$(document).ready(function () {
    var events = [];
    var eventsFilter = [];
    var active = true;
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
                            $event.requisitos,
                            $event.descripcion,
                            $event.ponentes,
                            new tipoEvento($event.tipo_evento.id, $event.tipo_evento.nombre),
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
        eventsFilter = events.filter($event => $event.hora_inicio.format("LT") === $hour);
        fillEventsByHour();
    });

    function fillEventsByHour() {
        $acordion.empty();
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
        var $title = $("<div>", {class: "mb-0"});
        var $btn = $("<div>", {
            class: "btn btn-link collapsed ",
            "data-toggle": "collapse",
            "data-target": "#collapse" + $event.id,
            "aria-expanded": "false",
            "aria-controls": "collapse" + $event.id,
            html: $event.nombre,
        });
        $title.append($btn);
        $cardHeader.append($title);

        var $collapse = $("<div>", {
            id: "collapse" + $event.id,
            class: "collapse",
            "aria-labelledby": "heading" + $event.id,
            "data-parent": "#accordion"
        });
        var $cardBody = $("<div>", {
            class: "card-body",
            html: "ASDASDASDSADASDASD"
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
        requisitos,
        descripcion,
        ponentes,
        tipoEvento
    ) {
        this.id = id;
        this.nombre = nombre;
        this.hora_inicio = moment(hora_inicio);
        this.duracion = duracion;
        this.requisitos = requisitos;
        this.descripcion = descripcion;
        this.ponentes = ponentes;
        this.tipoEvento = tipoEvento;
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

});

