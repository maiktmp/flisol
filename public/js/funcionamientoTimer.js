$(document).ready(function () {
    var date1 = moment('2019-03-10 10:00:00');
    var date3 = moment();
    var duration = moment.duration({
        'seconds': date1.diff(date3, "seconds")
    });
    var timestamp = new Date(0, 0, 0, 2, 10, 30);
    var interval = 1;
    var timer = setInterval(function () {
        timestamp = new Date(timestamp.getTime() + interval * 1000);

        duration = moment.duration(duration.asSeconds() - interval, 'seconds');
        var days = duration.days();
        var hours = duration.hours();
        var min = duration.minutes();
        var sec = duration.seconds();

        if (duration.asSeconds() > 0) {
            sec -= 1;
            if (min < 0)
                return clearInterval(timer);
            if (min < 10 && min.length !== 2)
                min = '0' + min;
            if (sec < 0 && min !== 0) {
                min -= 1;
                sec = 59;
            } else if (sec < 10 && length.sec !== 2)
                sec = '0' + sec;

            $("#days-event").val(days);
            $("#hr-event").val(hours);
            $("#min-event").val(min);
            $("#sec-event").val(sec);
            if (min === 0 && sec === 0)
                clearInterval(timer);
        }
    }, 1000);
});