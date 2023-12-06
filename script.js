
// Cookies.get('skor')
// Cookies.get('chest_key')
// Cookies.get('survey_done')
// Cookies.get('chest_open')

// ------------step-wizard-------------
$(document).ready(function () {
    // alert(Cookies.get('skor'));
    if(Cookies.get('skor') == 'undefined' || Cookies.get('skor') == 'NaN'){
        Cookies.set('skor',0);
        $('#jmh_skor').text(0);
    }else{
        $('#jmh_skor').text(Cookies.get('skor'));
    }
    
    $('#loading').hide();
    $('#blank').hide();
    $('.r1').hide();
    $('.treasure').hide();
    $('.treasure-locked').hide();
    $('.treasure-openend').hide();
    $('.r2').hide();
    $('.nav-tabs > li a[title]').tooltip();

    if (Cookies.get('survey_done') == 1) {
        $('.r1').show();
        $('#blank').hide();
        $("#jmh_survey").text(1);
    } else {
        $('.r1').hide();
        $('#blank').hide();
        $("#jmh_survey").text(0);
    }

    if (Cookies.get('chest_key') == '1') {
        $('.treasure-locked').hide();
        $('.treasure').show();
        $('.treasure-openend').hide();
    } else if(Cookies.get('chest_open') == '1'){
        $('.treasure-locked').hide();
        $('.treasure').hide();
        $('.treasure-openend').show();
        $('.r2').show();
    }else{
        $('.treasure-locked').show();
        $('.treasure').hide();
        $('.treasure-openend').hide();
    }

    $('.treasure').on('click', function () {
        swal.fire({
            title: "Selamat!",
            html: "Anda mendapatkan penghargaan 'Ganjil Trophy 23/24'<br><br><b>Tunggu 2 detik ...</b>",
            icon: "success",
            timer: 2000,
            showConfirmButton: false
          }).then(function (result) {
            Cookies.set('chest_open',1);
            Cookies.set('chest_key',0);
            if (result.dismiss === swal.DismissReason.timer) {
              window.location.href = "./";
            }
          });
    });
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

    $('#btn-mulai').on('click', function (e) {
        e.preventDefault();
        
        Swal.fire({
            title: "Anda yakin?",
            text: "Memulai ulang berarti anda akan mereset survey yang anda aktif sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya"
        }).then((result) => {
        if (result.isConfirmed) {
            $('#main').fadeOut();
            $('#loading').fadeIn();
            Cookies.set('skor',0);
            setTimeout(
                function () {
                    window.location.replace('./question.php');
                }, 1500);
        }
        });
        
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

$('.r1').on('click', function () {
    Swal.fire({
        title: "1st Timer!",
        text: "Menyelesaikan survey untuk pertama kali!",
        imageUrl: "./assets/img/r1g.png",
        imageWidth: 800,
        imageHeight: 400
    });
})
$('.r2').on('click', function () {
    Swal.fire({
        title: "Ganjil Trophy 23/24",
        text: "berhasil menyelesaikan survey semester ganjil 2023/2024",
        imageUrl: "./assets/img/r2g.png",
        imageWidth: 800,
        imageHeight: 400
    });
})