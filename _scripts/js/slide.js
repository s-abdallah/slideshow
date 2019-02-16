$(document).ready(function() {
    $(".hmx-slides div").each(function(i) {
        var t = $(this);
        setTimeout(function() {
            t.addClass("animation");
        }, (i + 1) * 50);
    });
});