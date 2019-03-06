$(document).ready(function () {
    $.ajax({
        type: 'GET',
        url: url,
        datatype: "json",
        success: function (response, status, XHR) {
            if(response.success){
                var x = response.data.length / 4;
                for (var i = 0; i < x + 1; i++){
                    if(response.data.length < 4){
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

function createItem(sponsors){
    var $carouselitem = $("<div>",{class: "carousel-item"});
    var $row = $("<div>",{class: "row centrar"});

    sponsors.forEach(function (sponsor){
        var $a = $("<a>", {href:"#", title:"Image " + sponsor.id, class:"col"});
        var $img = $("<img>", {class:"img-fluid mx-auto d-block", src:"img/96090.jpg",
            alt:"Sponsor " + sponsor.id,
            onclick:"console.log(this.alt)"});
        $a.append($img);
        $row.append($a);
    });

    $carouselitem.append($row);

    $("#carousel-sponsor-items").append($carouselitem);
}