$(document).ready(function () {
    // Profile information
    $(".main-signup input").on("focus", function () {
        $(".main-signup input").css("border-color", "#9D9D9D");
        $(".main-signup input").attr("placeholder", "");
    });

    $(".main-signup select").on("focus", function () {
        $(".main-signup select").css("border-color", "#9D9D9D");
       
    });

    // Business Information
    $(".btn-ml").on("click", function () {
        $(this).addClass("active_btn");
        $(".label-txt").css("color", "black");
        $(".btn-dc").removeClass("active_btn");
    });

    $(".btn-dc").on("click", function () {
        $(this).addClass("active_btn");
        $(".label-txt").css("color", "black");
        $(".btn-ml").removeClass("active_btn");
    });
});
