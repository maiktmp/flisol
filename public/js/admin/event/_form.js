$(document).ready(function () {
    CKEDITOR.replace('descripcion');
    CKEDITOR.replace('requisitos');
    $('#inp-datepicker').bootstrapMaterialDatePicker({
        date: false,
        lang: 'es',
        format:'HH:mm'
    });
});

