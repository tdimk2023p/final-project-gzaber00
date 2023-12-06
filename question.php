<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="./assets/img/logo_stitek.png">
    <title>SKM Gamifikasi</title>

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./assets/css/style_form.css">
    <style>
        .hero-image {
            /* background-image: url('assets/img/rumah_hewan.png'); */
            /* Used if the image is unavailable */
            height: 300px;
            /* You must set a specified height */
            background-position: center;
            /* Center the image */
            background-repeat: no-repeat;
            /* Do not repeat the image */
            background-size: contain;
            /* Resize the background image to cover the entire container */
            z-index: 99;
        }
    </style>
    <style>
        #outer-dropzone {
            height: 200px;
            background-image: url('assets/img/rumah_hewan.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            border: dashed 4px #ccc;
        }


        .dropzone {
            /* background-color: #bfe4ff; */
            border: dashed 4px transparent;
            border-radius: 4px;
            margin: 10px auto 30px;
            margin-top: 30px;
            padding: 10px;
            width: 80%;
            transition: background-color 0.3s;

            animation-duration: 1s;
            animation-iteration-count: infinite;
        }

        .drop-active {
            border-color: #aaa;
        }

        .drop-target {
            background-color: #29e;
            border-color: #fff;
            border-style: solid;
        }

        .drag-drop {
            display: inline-block;
            min-width: 100px;
            padding: 4em 1em;
            touch-action: none;
            transform: translate(0px, 0px);
            transition: background-color 0.3s;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;


        }

        

        .drag-drop.can-drop {
            color: #000;
            background-color: #4e4;
        }
    </style>
</head>

<body style="background-color: #3395ff;">

    <div style="margin:3em;">
        <div class="row bg-white" style="width: 90%; margin:0 auto;background-color: #3474eb;box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;">
            <div class="col-md-12 ">
                <div class="row p-5">
                    <div class="col-12 pb-2">
                        <div class="row">
                            <div class="col-6">
                                <table>
                                    <tr>
                                        <td class="pr-3">
                                            <img src="assets/img/profil.png" width="70px;">
                                        </td>
                                        <td>
                                            <span style="font-weight:bold;font-size:1.3em;">John Doe</span><br>
                                            <small class="text-secondary">SKM semsester Genap 2023/2024</small>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-6 text-right">
                                <div id="skor_container"><span class="alert alert-danger"><i class='bx bx-star'></i> <span id="skor">0</span></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <?php include "isi_kuesioner.php"; ?>

                    </div>
                </div>
            </div>

        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/interactjs@1.10.25/dist/interact.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
        <script src="script.js"></script>
        
        <script src="./assets/js/script_form.js"></script>
        <script src="./assets/js/dragdrop.js"></script>

</body>

</html>