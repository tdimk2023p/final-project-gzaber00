

// ------------step-wizard-------------
$(document).ready(function () {

    Swal.fire({
        title: "Isi Survey!",
        customClass: 'swal-wide',
        text: "Seret kartu untuk mengisi survey",
        imageUrl: "./assets/img/guide.gif",
        imageWidth: 800,
        imageHeight: 400,
    });
    $('#loading').hide();
    $('.nav-tabs > li a[title]').tooltip();

    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);

        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });

    $('#btn-mulai').on('click', function () {
        $('#main').fadeOut();
        $('#loading').fadeIn();
        setTimeout(
            function () {
                window.location.replace('question.php');
            }, 1500);
    })
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function () {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});
