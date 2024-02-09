
$(document).on("scroll", window, function () {
    if ($(window).scrollTop()>200)
    {
        $(".slider").css("display", "flex");
    }
    else
    {
        $(".slider").hide();
    }
});

