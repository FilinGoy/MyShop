$(window).on("load", function () {
    $("#loadingModal").css('height', 0);
    setTimeout(function () {
        $("#loadingModal").hide();
    }, 300);
});
