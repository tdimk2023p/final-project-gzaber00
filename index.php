<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./assets/img/logo_stitek.png">
    <title>SKM Gamifikasi</title>
    <style>

    </style>
</head>

<body style="background-color: #3395ff;">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>

    <div style="margin:5em;" id="main">
        <div class="row bg-white" style="width: 90%; margin:0 auto;background-color: #3474eb;box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;">
            <div class="col-md-4 bg-primary text-white" style="border-right:1px solid #aaa; ">
                <div class="row p-5">
                    <div class="col-12 text-center p-5">
                        <span style="font-weight:bold;font-size:1.3em;">John Doe</span><br>
                        <small>Majikan</small>
                        <br><br>
                        <img src="assets/img/profil.png" style="width: 100px;">
                        <br><br>
                        <span style="font-weight:bold;font-size:1.3em;">Level 1</span><br>

                        <small><span id="jmh_survey"></span> Survey telah diisi</small>
                        <hr>
                        <span style="font-weight:bold;font-size:1em;">Penghargaan</span><br><br>
                            <span style="font-weight:bold;font-size:1em;" id="blank">-</span>
                            <img src="assets/img/r1.png" style="width: 50px;" class="award r1">
                            <img src="assets/img/r2.png" style="width: 50px;" class="award r2">
                        <hr>
                        <span style="font-weight:bold;font-size:1em;">Survey Terbaru</span><br>
                        <br>
                        <div class="row">
                            <div class="col-8 text-left">
                                <span style="font-weight:bold;font-size:1em;">SKM Semester genap 2023/2024</span><br>
                                <small>
                                    <span id="jmh_skor"></span>
                                    dari 10 pertanyaan sudah diisi
                                </small>
                            </div>
                            <div class="col-4">
                                <div class="bounce-3 treasure">
                                    <img src="assets/img/box.png" style="width: 50px;">
                                </div>
                                <div class="treasure-locked">
                                    <img src="assets/img/box_locked.png" style="width: 50px;">
                                </div>
                                <div class="treasure-openend">
                                    <img src="assets/img/box_opened.png" style="width: 50px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row p-5">
                    <div class="col-12 text-center p-5">
                        <img src="assets/img/logo.jpg" class="img-fluid w-50"><br><br>
                        <a href="#" class="btn btn-primary px-5" id="btn-mulai">Mulai</a>
                        <br><br>
                        <p class="mt-5">Sebelum Cetak kartu ujian isi survei Survei kepuasan mahasiswa, terlebih dahulu ya! : </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "loading.php"; ?>
    <script src="script.js"></script>
</body>

</html>