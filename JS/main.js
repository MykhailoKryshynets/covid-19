function slowScroll(id) {
    $('html, body').animate({
        scrollTop: $(id).offset().top
    }, 1000);
}

$(document).on("scroll", function () {
    if ($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
    else
        $("header").attr("class", "fixed");
});
