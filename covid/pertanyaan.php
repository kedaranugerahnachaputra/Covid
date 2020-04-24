<?php
include('../covid/config.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="css.css">
    <script type="text/javascript" src="../covid/app.js"></script>
    <script>
        $(document).ready(function() {
            $("#myModal").on("show.bs.modal", function(event) {
                // Get the button that triggered the modal
                var button = $(event.relatedTarget);

                // Extract value from the custom data-* attribute
                var titleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
        $(document).ready(function() {
            $("#Satu").on("show.bs.modal", function(event) {
                var button = $(event.relatedTarget);

                var tittleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
        $(document).ready(function() {
            $("#Dua").on("show.bs.modal", function(event) {
                var button = $(event.relatedTarget);

                var tittleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
        $(document).ready(function() {
            $("#Tiga").on("show.bs.modal", function(event) {
                var button = $(event.relatedTarget);

                var tittleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
        $(document).ready(function() {
            $("#Empat").on("show.bs.modal", function(event) {
                var button = $(event.relatedTarget);

                var tittleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
        $(document).ready(function() {
            $("#Lima").on("show.bs.modal", function(event) {
                var button = $(event.relatedTarget);

                var tittleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
        $(document).ready(function() {
            $("#Enam").on("show.bs.modal", function(event) {
                var button = $(event.relatedTarget);

                var tittleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
        $(document).ready(function() {
            $("#Ya").on("show.bs.modal", function(event) {
                var button = $(event.relatedTarget);

                var tittleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
        $(document).ready(function() {
            $("#Ya").on("show.bs.modal", function(event) {
                var button = $(event.relatedTarget);

                var tittleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
    </script>
</head>
<body>
    <header>
    <div class="container-fluid p-0">                           
        <nav class="navbar navbar-expand-sm navbar-light bg-light" >
            <a class="navbar-brand" href="#"><h2><i class="fas fa-stethoscope"></i> Covid-19 Self Check-Up </h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-right text-light"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div>
                        <button type="submit" class="btn px-4" data-toggle="modal" data-target="#Satu" data-title="hi" name="submit">Lanjutkan</button>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <form class="awal" method="post">
        <h1 class="gedi">Self <br> Check-Up <br> Covid-19</h1>
        <h3 class="cilik">Saat ini dengan mulai munculnya ODP, PDP dan kasus Positif COVID-19 di Jawa Timur, tentunya self-assesment COVID-19 akan dibutuhkan oleh masyarakat.</h3>
        <div>
            <button type="submit" class="submit" data-toggle="modal" data-target="#Satu" data-title="hi" name="submit">Lanjutkan</button>
        </div>
    </form>
    <div class="bikin">
        <img src="N.png">
    </div>
    <section id="takok">
        <div id="Satu" class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">
                                    <h4>1. Apakah Anda mengalami salah satu dari yang berikut:</h4>
                                </label>
                                <h5>
                                    <ol type="a">
                                        <li>
                                            <h5>Kesulitan bernafas yang parah (Bernafas dengan sangat cepat atau berbicara dalam satu kata)</h5>
                                        </li>
                                        <li>
                                            <h5>Nyeri dada yang parah</h5>
                                        </li>
                                        <li>
                                            <h5>Sulit untuk bangun</h5>
                                        </li>
                                        <li>
                                            <h5>Merasa kebingungan</h5>
                                        </li>
                                        <li>
                                            <h5>Penurunan kesadaran</h5>
                                        </li>
                                    </ol>
                                </h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" data-target="#Ya" data-title="hi" data-toggle="modal">Ya</button>
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#Dua" data-title="hi" data-dismiss="modal">Tidak</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="Dua" class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">
                                    <h4>2. Apakah Anda mengalami salah satu dari yang berikut:</h4>
                                </label>
                                <h5>
                                    <ol type="a">
                                        <li>
                                            <h5>Nafas yang pendek saat istirahat</h5>
                                        </li>
                                        <li>
                                            <h5>Ketidakmampuan untuk berbaring karena kesulitan bernafas </h5>
                                        </li>
                                        <li>
                                            <h5>Kondisi kesehatan kronis yang anda alami dirasakan lebih berat karena kesulitan bernapas</h5>
                                        </li>
                                    </ol>
                                </h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" data-target="#Ya" data-title="hi" data-toggle="modal">Ya</button>
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#Tiga" data-title="hi" data-dismiss="modal">Tidak</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div id="Tiga" class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">
                                    <h4>3. Apakah Anda mengalami salah satu dari yang berikut:</h4>
                                </label>
                                <h5>
                                    <ol type="a">
                                        <li>
                                            <h5>Demam</h5>
                                        </li>
                                        <li>
                                            <h5>Batuk</h5>
                                        </li>
                                        <li>
                                            <h5>Bersin</h5>
                                        </li>
                                        <li>
                                            <h5>Sakit Tenggorokan</h5>
                                        </li>
                                        <li>
                                            <h5>Sulit Bernafas</h5>
                                        </li>
                                    </ol>
                                </h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" data-target="#Ya" data-title="hi" data-toggle="modal">Ya</button>
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#Empat" data-title="hi" data-dismiss="modal">Tidak</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="Empat" class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h4>4. Apakah anda pernah muncul gejala sekitar 14 hari setelah travelling ke luar negeri? (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA) atau ke kota terjangkit (Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll)?</h4>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" data-target="#Ya" data-title="hi" data-toggle="modal">Ya</button>
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#Lima" data-title="hi" data-dismiss="modal">Tidak</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="Lima" class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h4>5. Apakah Anda memberikan perawatan atau melakukan kontak dekat dengan seseorang dengan COVID-19 (kemungkinan atau dikonfirmasi) saat mereka sakit (batuk, demam, bersin, atau sakit tenggorokan)?</h4>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" data-target="#Ya" data-title="hi" data-toggle="modal">Ya</button>
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#Enam" data-title="hi" data-dismiss="modal">Tidak</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="Enam" class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h4>6. Apakah Anda memiliki kontak dekat dengan seseorang yang bepergian ke luar Negeri dalam 14 hari terakhir yang menjadi sakit (batuk, demam, bersin, atau sakit tenggorokan)?</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" data-target="#Ya" data-title="hi" data-toggle="modal">Ya</button>
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#No" data-title="hi" data-dismiss="modal" name="Done" value="Done">Tidak</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div id="Ya" class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="../covid/check.php" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Konfirmasi</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="logic/test.php">
                                <div class="form-group">
                                    <label class="control-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                            </form>
                            <button name='submit' type="submit" class="btn btn-primary"> Lanjut</a> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="No" class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Kesimpulan</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h4 align="center"> Anda kemungkinan besar tidak terinfeksi oleh COVID-19, Namun anda disarankan untuk tetap tinggal dirumah. Infeksi anda mungkin disebabkan virus selain COVID-19, Oleh karena itu anda tidak perlu dites oleh COVID-19. Meskipun demikian, hindarilah keluar rumah jika memungkinkan. Penyakit anda akan sembuh sendiri dengan cukup makan dan istirahat
                                Apabila anda mengalami gejala atau mendapatkan informasi baru tentang perjalanan penyakit anda, anda bisa membuka web ini lagi.</h4>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="window.location.href='awal.php'"> Kembali Ke Halaman Awal</a> </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>                      
    
                            
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</body>
</html>