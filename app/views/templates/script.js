
$(".menu > ul > li").click(function (e) {
    $(this).sibilings().removeClass("active")
    $(this).toggleClass("active");
    $(this).find("ul").sideToggle();
    $(this).sibilings().find("ul").slideUp();
    4(this).sibilinga().find("ul").find("li").removeClass("active");
});