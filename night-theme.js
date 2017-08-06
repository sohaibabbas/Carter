function switchToNightTheme() {
    console.log("切換至暗色主題");

    $("#share").removeClass("primary");
    $("#share").addClass("inverted");

    $("nav").removeClass("basic");
    $("nav").addClass("inverted");

    $("footer").addClass("inverted");
    $(".ts.card.perview").addClass("inverted");
    $(".ts.card.perview>.ts.fluid.bottom.attached").addClass("inverted");
    $(".ts.button").addClass("inverted");
    $(".ts.header").addClass("inverted");
    $(".ts.fluid.input").addClass("inverted");
    $(".ts.divider").addClass("inverted");
    $(".ts.slate").addClass("inverted");
    $(".ts.form").addClass("inverted");
    $(".ts.segment").addClass("inverted");
    $(".ts.comments").addClass("inverted");
    $("post").addClass("inverted");
    $("body").addClass("inverted");
}

function switchToDayTheme() {
    console.log("切換至亮色主題");

    $("#share").removeClass("inverted");
    $("#share").addClass("primary");

    $("nav").addClass("basic");
    $("nav").removeClass("inverted");

    $("footer").removeClass("inverted");
    $(".ts.card.perview").removeClass("inverted");
    $(".ts.card.perview>.ts.fluid.bottom.attached").removeClass("inverted");
    $(".ts.button").removeClass("inverted");
    $(".ts.header").removeClass("inverted");
    $(".ts.fluid.input").removeClass("inverted");
    $(".ts.divider").removeClass("inverted");
    $(".ts.slate").removeClass("inverted");
    $(".ts.form").removeClass("inverted");
    $(".ts.segment").removeClass("inverted");
    $(".ts.comments").removeClass("inverted");
    $("post").removeClass("inverted");
    $("body").removeClass("inverted");
}

function nightmode(mode = "true") {
    if (mode == "true") {
        var n = new Date().getHours();
        if (n > 20 || n < 6) {
            switchToNightTheme();
        }
    }
    $("body").attr("style", "");
}