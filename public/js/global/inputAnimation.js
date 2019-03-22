$(document).ready(function () {
    $(".btn-spin").click(function ($event) {
        var $this = $(this);
        var spinner = $("<i>", {class: "fas fa-spinner fa-spin"});
        $this.html(spinner);
        $this.attr("readonly",true);
    });
});
