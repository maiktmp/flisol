$(document).ready(function () {
    $("#div-links").hide();
    $("#div-padre-cuenta").hide();
    var date1 = moment('2019-04-05 09:00:00');
    var date3 = moment();
    var duration = moment.duration({
        'seconds': date1.diff(date3, "seconds")
    });
    if (duration > 0) {
        $("#div-padre-cuenta").show();
        var interval = 1;
        var timer = setInterval(function () {
            duration = moment.duration(duration.asSeconds() - interval, 'seconds');
            if (duration < 0) {
                clearInterval(timer);
                $("#div-padre-cuenta").hide();
                $("#div-links").show();
            } else {
                var days = parseInt(duration.asDays()) < 10 ? ('0' + parseInt(duration.asDays())) : parseInt(duration.asDays());
                var hrs = duration.hours() < 10 ? ('0' + duration.hours()) : duration.hours();
                var min = duration.minutes() < 10 ? ('0' + duration.minutes()) : duration.minutes();
                var sec = duration.seconds() < 10 ? ('0' + duration.seconds()) : duration.seconds();
                $("#days-event").val(days);
                $("#hr-event").val(hrs);
                $("#min-event").val(min);
                $("#sec-event").val(sec);
            }
        }, 1000);
    } else {
        $("#div-padre-cuenta").hide();
        $("#div-links").show();
    }
});