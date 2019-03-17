$(document).ready(function () {
    var url = $("#inp-all-sponsor").val();
    $.ajax({
        type: 'GET',
        url: url,
        datatype: "json",
        success: function (response, status, XHR) {
            if (response.success) {
                // console.log(response.data);
                var x = response.data.length / 4;
                for (var i = 0; i < x + 1; i++) {
                    if (response.data.length < 4) {
                        createItem(response.data);
                    } else {
                        createItem(response.data.slice(0, 4));
                        response.data.splice(0, 4);
                    }
                }
            }
        },
        error: function () {
        }
    });
});
var active = true;

function createItem(sponsors) {
    var $class = active ? "carousel-item  active" : "carousel-item ";
    var $carouselitem = $("<div>", {class: $class});
    active = false;

    var $row = $("<div>", {class: "row centrar"});
    sponsors.forEach(function (sponsor) {
        var $a = $("<a>", {href: "#", title: "Image " + sponsor.id, class: "col"});
        var $img = $("<img>", {
            class: "img-fluid mx-auto d-block rounded-circle", src: sponsor.absolute_image_url,
            alt: "Sponsor " + sponsor.id,
            onclick: "console.log(this.alt)"
        });
        $a.append($img);
        $row.append($a);
    });

    $carouselitem.append($row);
    $("#carousel-sponsor-items").append($carouselitem);
}
