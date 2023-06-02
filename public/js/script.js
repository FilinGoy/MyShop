$(window).scroll(function () {
    scrollFunction;
});

$('#btn-back-to-top').on("click", scrollFunction);

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        $('#btn-back-to-top').show();
    } else {
        $('#btn-back-to-top').hide();
    }
}

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

$(window).on("load", function () {
    $("#loadingModal").css('height', 0);
    setTimeout(function () {
        $("#loadingModal").hide();
    }, 300);
});
