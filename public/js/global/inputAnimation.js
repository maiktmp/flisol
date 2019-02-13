$(document).ready(function () {
    var x = $(".inputBox input");
    x.each(function (input) {
        if ($(this).val().length !== 0) {
            $($(this.parentElement).children("label")).addClass("label-focus");
            $($(this.parentElement).children("label")).removeClass("label-normal");
        }
    });

    $(".inputBox input").focus(function () {
        $($(this.parentElement).children("label")).removeClass("label-normal");
        $($(this.parentElement).children("label")).addClass("label-focus");
    });
    $(".inputBox input").focusout(function () {
        if ($(this).val().length === 0) {
            $($(this.parentElement).children("label")).removeClass("label-focus");
            $($(this.parentElement).children("label")).addClass("label-normal");
        }
    });
});