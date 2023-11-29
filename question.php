<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .hero-image {
            background-image: url('assets/img/rumah_hewan.png');
            /* Used if the image is unavailable */
            height: 300px;
            /* You must set a specified height */
            background-position: center;
            /* Center the image */
            background-repeat: no-repeat;
            /* Do not repeat the image */
            background-size: contain;
            /* Resize the background image to cover the entire container */
        }
    </style>
    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }
    </script>
    <title>Gamifikasi</title>
</head>

<body style="background-color: #3395ff;">
    <div style="margin:5em;">
        <div class="row bg-white" style="width: 90%; margin:0 auto;background-color: #3474eb;box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;">
            <div class="col-md-12 ">
                <div class="row p-5">
                    <div class="col-12 pb-2">
                        <div class="row">
                            <div class="col-1">
                                <img src="assets/img/profil.png" width="70px;">
                            </div>
                            <div class="col-11">
                                <span style="font-weight:bold;font-size:1.3em;">John Doe</span><br>
                                <small class="text-secondary">SKM semsester Genap 2023/2024</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <section class="signup-step-container pt-5">
                            <div class="container">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-3">
                                        <img id="drag1" src="assets/img/j1.png" width="150px"   ="true" ondragstart="drag(event)" />
                                        <img id="drag2" src="assets/img/j2.png" width="150px" draggable="true" ondragstart="drag(event)" />
                                        <img id="drag3" src="assets/img/j3.png" width="150px" draggable="true" ondragstart="drag(event)" />
                                    </div>
                                    <div class="col-md-9">
                                        <div class="wizard">
                                            <form role="form" action="index.html" class="login-box">
                                                <div class="tab-content" id="main_form">
                                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                                        <h2 class="mb-0">Kejelasan Materi Perkuliahan yang diberikan dosen</h2>
                                                        <small style="font-style: italic;" class="text-secondary">seret kartu
                                                            kedalam rumah kucing</small>
                                                        <br>
                                                        <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)" style="border:1px solid #eee;" class="hero-image p-5">

                                                        </div>

                                                        <!-- <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                                                        <br>
                                                        <img id="drag1" src="img_logo.gif" draggable="true" ondragstart="drag(event)" width="336" height="69"> -->

                                                        <br>
                                                        <ul class="list-inline pull-right">
                                                            <li><button type="button" class="btn btn-primary next-step">Next</button></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </form>
                                            <br><br><br><br>
                                            <div class="wizard-inner mt-5">
                                                <div class="connecting-line"></div>
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active">
                                                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1
                                                            </span> <i>Step 1</i></a>
                                                    </li>
                                                    <li role="presentation" class="disabled">
                                                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Step 2</i></a>
                                                    </li>
                                                    <li role="presentation" class="disabled">
                                                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>Step
                                                                3</i></a>
                                                    </li>
                                                    <li role="presentation" class="disabled">
                                                        <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Step
                                                                4</i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>

        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="script.js"></script>

</body>

</html>