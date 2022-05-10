<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Load Library Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Showroom Mobil</title>
    </head>

    <style>
    ul {
        list-style-type: none;
    }
    .site-footer {
        background-color: lightgrey;
        text-align: center;
        margin: 100px 0;
        padding: 10px 0;
    }

    #social-wrapper {
        text-align: center;
    }

    /*Social Media Icons*/
    .social-wrapper {
        text-align: center;
    }

    .social-wrapper ul li {
        display: inline;
        margin: 0 5px;
    }

    .twitter-icon,
    .facebook-icon,
    .instagram-icon,
    .line-icon,
    .whatsapp-icon,
    .youtube-icon{
        margin-top: .625em;
        width: 40px;
        height: 40px;
        border-radius: 25px;
    }

    .twitter-icon:hover,
    .facebook-icon:hover,
    .instagram-icon:hover,
    .line-icon:hover,
    .whatsapp-icon:hover,
    .youtube-icon:hover{
        opacity: 0.5;
    }

    .footer-nav p {
        text-align: center;
    }
    * {box-sizing: border-box;}
    body {font-family: Verdana, sans-serif;}
    .mySlides {display: none;}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
    }


    /* The dots/bullets/indicators */
    .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    }

    .active {
    background-color: #717171;
    }

    /* Fading animation */
    .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 4.5s;
    animation-name: fade;
    animation-duration: 4.5s;
    }

    @-webkit-keyframes fade {
    from {opacity: 1} 
    to {opacity: 1}
    }

    @keyframes fade {
    from {opacity: 1} 
    to {opacity: 1}
    }

    @media only screen and (max-width: 300px) {
    .text {font-size: 11px}
    }

    </style>

    <body class="m-3">
        
            <!-- awal header -->
            <!-- <div class="row border-bottom p-2">
                <div class="col-lg-3">

                    <img src="tokomobil.png" class="img-fluid">
                </div>
                <div class="col-lg-9">
    
                    <ul class="nav justify-content-end mt-3">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>  -->
            <!-- akhir header -->
            
            <div class="row p-2 bg-dark text-light ">
                <div class="col-sm-4"><h2>Bursa Otomotif Surabaya</h2></div>
                <div class="col-sm-1">
                        <a class="text-light dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Pilih Merk</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Toyota</a>
                        <a class="dropdown-item" href="#">Honda</a>
                        <a class="dropdown-item" href="#">Mitsibishi</a>
                        <a class="dropdown-item" href="#">Suzuki</a>
                        <a class="dropdown-item" href="#">Mazda</a>
                        <a class="dropdown-item" href="#">Nissan</a>
                        <a class="dropdown-item" href="#">Daihatsu</a>
                        <a class="dropdown-item" href="#">Wuling</a>
                        </div>
                </div>
                <div class="col-sm-4">
                    <div class="row float-right pr-3">
                        <input type="text" placeholder="Cari Mobil..." name="search" id="cari" style="width:300px";>
                        <button class="btn btn-outline-warning btn-rounded btn-sm my-0" type="button" id="" >Search</button>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="text-center"><strong><u> Logout </u></strong></div> 
                </div>
            </div>


        <!-- Nav tabs -->
        <ul class="nav nav-tabs bg-warning text-center" id="myTab" role="tablist">
            <img src="logo.png" width="3%" style="padding-left: 10px;"> 
            <li class="nav-item col sm-2">
            <a class="nav-link active text-dark" id="homeFE-tab" data-toggle="tab" href="#homeFE" role="tab" aria-controls="homeFE" aria-selected="false"><i class="fa fa-home"></i> Home</a>
            </li>
            <li class="nav-item col sm-2">
            <a class="nav-link text-dark" id="profileFE-tab" data-toggle="tab" href="#profileFE" role="tab" aria-controls="profileFE" aria-selected="false"><i class="fa fa-image"></i> Profile</a>
            </li>
            <li class="nav-item col sm-2">
            <a class="nav-link text-dark" id="messagesFE-tab" data-toggle="tab" href="#messagesFE" role="tab" aria-controls="messagesFE" aria-selected="false"><i class="fa fa-envelope"></i> Messages</a>
            </li>
            <li class="nav-item col sm-2">
            <a class="nav-link text-dark" id="settingsFE-tab" data-toggle="tab" href="#settingsFE" role="tab" aria-controls="settingsFE" aria-selected="false"><i class="fa fa-cog"></i> Settings</a>
            </li>
        </ul>
        
        <div class="tab-content bg-light text-center font-weight-bold">
                <div class="tab-pane fade show active" id="homeFE" role="tabpanel" aria-labelledby="home-tab">Home</div>
                <div class="tab-pane fade" id="profileFE" role="tabpanel" aria-labelledby="profile-tab">Profile</div>
                <div class="tab-pane fade" id="messagesFE" role="tabpanel" aria-labelledby="messages-tab">Messages</div>
                <div class="tab-pane fade" id="settingsFE" role="tabpanel" aria-labelledby="settings-tab">Settings</div>
        </div>

            <!-- awal content -->
            <div class="row p-3 mt-3"> <!-- ini baris pertama yang berisi 4 kolom -->

                <div class="col-md-3 col-sm-6 col-xs-6"> <!-- kolom 1 -->
                    <div class="text-center">
                        <a class="#">
                            <img src="honda.jpg" class="img-fluid img-thumbnail" alt="" style="width:80%">
                            <i class="course-link-icon fa fa-link"></i>
                        </a>
                        <div class="p-1">
                            <a class="#"href="https://www.honda-indonesia.com/">HONDA</a>
                            <br/>
                            <span class="partner">Partnership</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6"> <!-- kolom 2 -->
                    <div class="text-center">
                        <a class="#">
                            <img src="mitsubishi.png" class="img-fluid img-thumbnail" alt="" style="width:80%">
                            <i class="course-link-icon fa fa-link"></i>
                        </a>
                        <div class="p-1">
                            <a class="#" href="https://www.mitsubishi-motors.co.id/">MITSUBISHI</a>
                            <br/>
                            <span class="partner">Partnership</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6"> <!-- kolom 3 -->
                    <div class="text-center">
                        <a href="#">
                            <img src="nissan.jpg" class="img-fluid img-thumbnail" alt="" style="width:80%">
                            <i class="course-link-icon fa fa-link"></i>
                        </a>
                        <div class="p-1">
                            <a class="#" href="https://www.nissan.co.id/">NISSAN</a>
                            <br/>
                            <span class="partner">Partnership</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6"> <!-- kolom 4 -->
                    <div class="text-center">
                        <a href="#">
                            <img src="toyota.jpg" class="img-fluid img-thumbnail" alt="" style="width:80%">
                            <i class="course-link-icon fa fa-link"></i>
                        </a>
                        <div class="p-1">
                            <a class="#" href="https://www.toyota.astra.co.id/home">TOYOTA</a>
                            <br/>
                            <span class="partner">Partnership</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row p-3 mt-3"> <!-- ini baris kedua yang berisi 2 kolom -->
                <div class="col-md-7"> <!-- kolom 1 -->
                    <h3>WELCOME TO</h3>
                    <p class="text-muted">TOKO MOBIL SHOWROOM, SURABAYA</p>
                    <p class="text-justify">Toko Mobil adalah showroom mobil bekas berkualitas dan berkembang pesat di Jawa Timur, yang menyediakan mobil – mobil “Bekas Seperti Baru”. 
                    Harris Mobil telah berdiri sejak tahun 2011 dan telah memiliki 3 cabang dealer yakni di Sidoarjo, Probolinggo dan Darmo Trade Centre. 
                    Kantor pusat Harris Mobil berada di Jl. Baratajaya XIX No. 43-45 Surabaya dan Service Centre Harris Mobil berada di Jl. Kendangsari no.21 Surabaya.</p>
                </div>

                <div class="col-md-5"> <!-- kolom 2 -->
                    <div class="slideshow-container">
                    <div class="mySlides fade">
                    <img src="pajero1.jpg" style="width:100%">
                    </div>

                <div class="mySlides fade">
                <img src="hrv.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                <img src="xtrail.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                <img src="innova.jpg" style="width:100%">
                </div>

                </div>
                <br>
                <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span>
                <span class="dot"></span>
                </div>
                </div>
                
                <section class="section" id="features">

                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading text-center">
                            <h3>MOBIL TERLARIS</h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="features-items">
                            <li class="feature-item">
                                <div class="left-icon">
                                    <img src="pajero1.jpg" alt="First One">
                                </div>
                                <div class="right-content">
                                    <h4>Mitsubishi Pajero</h4>
                                    <p><em>"Makanannya sangat enak, porsinya banyak dan bisa dimakan bareng temen, Suasana juga nyaman dan comfy cocok buat kalian yang main dan makan bareng"</em></p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="left-icon">
                                    <img src="hrv.jpg" alt="second one">
                                </div>
                                <div class="right-content">
                                    <h4>Honda HRV</h4>
                                    <p><em>"Makanan mantapp, Rasanya enak, Harga bersahabat, Sesuai dengan ekspetasi waktu mau nyobain makan disini"</em></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="features-items">
                            <li class="feature-item">
                                <div class="left-icon">
                                    <img src="innova.jpg" alt="fourth muscle">
                                </div>
                                <div class="right-content">
                                    <h4>Toyota Kijang Innova</h4>
                                    <p><em>"Harga murah, Pelayanan sangat baik, Tempat bersih dan nyaman, Fasilitas sangat memadai"</em></p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="left-icon">
                                    <img src="crv1.jpg" alt="training fifth">
                                </div><br>
                                <div class="right-content">
                                    <h4>Honda HRV</h4>
                                    <p><em>"Sangat recommend bagi anak kuliahan karena harganya yang murah dan ada fasilitas wifi, jadi buat mahasiswa bisa kerja tugas sambil kumpul bareng"</em></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            <!-- akhir content -->


            <footer class="bg-dark text-white text-lg-start">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 mb-4 mb-md-0 text-center">
                            <h5 class="text-uppercase">Footer Content</h5>
                            <hr style="border : 1px solid white;"></hr>
                            <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                            voluptatem veniam, est atque cumque eum delectus sint!
                            </p>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-center">
                            <h5 class="text-uppercase font-weight-bold">Page</h5>
                            <hr style="border : 1px solid white;"></hr>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white">Home</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Profile</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Messages</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Setting</a>
                                </li>
                            </ul>                    
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase font-weight-bold text-center">Contact Us</h5>
                            <hr style="border : 1px solid white;"></hr>
                                <li>
                                    <a href="#!" class="text-white">@bursaotosby.id</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">bursaotomotifsby@gmail.com</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">+081-101-240-435</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">------------</a>
                                </li>
                            </ul>                    
                        </div>

                    </div>
                </div>

                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                    © 2020 Copyright:
                    <a class="text-white" href="google.com">Proyek Teknologi Web (C) UK PETRA</a>
                </div>
            </footer>
        
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

        <!-- LINK BOOTSTRAP -->
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <!-- TOASTR NOTIFY -->
            <link rel="stylesheet" href="build/toastr.min.css">
            <script src="build/toastr.min.js"></script>

            <!-- JQUERY CONFIRM -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

            <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
            <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
            <!-- Bootstrap Date-Picker Plugin -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
        
            <script>
                var slideIndex = 0;
                showSlides();

                function showSlides() 
                {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 3000); // Change image every 3 seconds
                }
            </script>

    </body>
</html>