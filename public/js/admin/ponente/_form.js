$(document).ready(function () {
    CKEDITOR.replace('descripcion');
    $("#inputGroupFile03").change(function ($e) {
        // FileReader support
        var fileName = $e.target.files[0].name;
        $(".custom-file-label").html(fileName);
    });
});

