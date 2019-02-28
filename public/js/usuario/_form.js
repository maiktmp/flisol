$(document).ready(function () {
    if ($("#select-instituto").val() * 1 === 0) {
        $("#div-institute-name").hide();
    }

    $("#select-estado").change(function () {
        var stateId = $(this).val();
        var urlCities = $("#inp-url-municipios").val();
        urlCities = urlCities.replace("FAKE_ID", stateId);
        $("#select-municipio").val(0);
        $("#select-instituto").val(0);
        $("#div-institute-name").hide();
        $.get(urlCities, function (data) {
            var selectInstitutes = $("#select-instituto");
            var selectCity = $("#select-municipio");
            selectCity.find('option')
                .remove()
                .end();
            selectInstitutes.find('option')
                .remove()
                .end()
                .append(new Option('---', -2));
            selectCity.append(
                new Option("Selecciona un municipio", 0)
            );
            data.forEach(function (value) {
                selectCity.append(
                    new Option(value.nombre, value.id)
                )
            })
        });
    });

    $("#select-municipio").change(function () {
        var stateId = $(this).val();
        var urlInstitutes = $("#inp-url-instituciones").val();
        urlInstitutes = urlInstitutes.replace("FAKE_ID", stateId);
        $("#select-instituto").val(0);
        $("#div-institute-name").hide();
        $.get(urlInstitutes, function (data) {
            var selectInstitutes = $("#select-instituto");
            selectInstitutes.find('option')
                .remove()
                .end();
            selectInstitutes.append(
                new Option("Selecciona una institucion", -2)
            );
            data.forEach(function (value) {
                selectInstitutes.append(
                    new Option(value.nombre, value.id)
                )
            });
            selectInstitutes.append(
                new Option("No encuentro mi institución", -1)
            );
            selectInstitutes.append(
                new Option("No vengo de ninguna institución", 0)
            );
        });
    });

    $("#select-instituto").change(function () {
        $this = $(this);
        if ($this.val() * 1 === -1) {
            $("#div-institute-name").show();
        }
        if ($this.val() * 1 === 0) {
            $("#div-institute-name").hide();
        }
    });

    $('#inp-datepicker').bootstrapMaterialDatePicker({
        time: false,
        lang: 'es',
        maxDate: moment(),
        format: 'Y-MM-DD'
    });
});


function municipio(id, nombre) {
    this.id = id;
    this.nombre = nombre;
}

function institucion(id, nombre) {
    this.id = id;
    this.nombre = nombre;
}
