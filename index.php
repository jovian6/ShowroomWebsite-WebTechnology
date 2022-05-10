<?php 

session_start();

// if(isset($_POST['tambah'])){
//     if($_SESSION['sekarang'] != NULL){
        
//     }
//     else{
//         echo "<script>alert('Login dulu bro');</script>";
//     }
// }

// if(isset($_POST['submit'])){
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $cekuser = false;
//     $cekpass = false;
//     $users = $mysqli->query("select id_customer,nama from customer")->fetch_all(MYSQLI_ASSOC);
//     foreach($users as $user){
//         $_SESSION['sekarang'] = $user;
//     }
//     foreach($users as $user){
//         $_SESSION['profil'] =$simpan;
//     }
//     if($email == "!admin" && $password == "!admin"){
//         header("location: index.php");
//     }
// }
?>

<html>
<head>
        <title>Showroom Mobil</title>

        <!-- LINK BOOTSTRAP -->
        <!-- <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

        <!-- TOASTR NOTIFY -->
        <!-- <link rel="stylesheet" href="build/toastr.min.css">
        <script src="build/toastr.min.js"></script> -->

        <!-- JQUERY CONFIRM -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script> -->

        <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
        <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

        <!-- Bootstrap Date-Picker Plugin -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/linearicons/style.css"/>

        <!-- JQuery Confirm -->
        <link rel="stylesheet" href="assets/jquery-confirm/jquery-confirm.css"/>

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

            /* css about us */
            .card{
            margin-top:50px;
            /* z-index:-2; */
            }
            .slick-slide img{
                margin:0 auto;
            }

            .slick-slide{
                transform: scale(0.8);
                opacity: 0.3;
                transition: all ease 0.5s;
            }

            .slick-slide.slick-current{
                transform: scale(1);
                opacity:1;
            }
            .slider{
                position: relative;
                width: 100%;
                left: 50%;
                transform: translateX(-50%);
            }
            .slider .prev_arrow{
                position: absolute;
                top: 50%;
                left: 2%;
                color:#fff;
                width: 50px;
                height:50px;
                background:blue;
                text-align: center;
                line-height: 50px;
                cursor: pointer;
                border-radius: 50%;
                z-index:99;
                transition: visibility 0s, color 0.4s ease, opacity 0.5s linear ;
            }
            .slider .next_arrow{
                position: absolute;
                top: 50%;
                left: 95%;
                color:#fff;
                width: 50px;
                height:50px;
                background:blue;
                text-align: center;
                line-height: 50px;
                cursor: pointer;
                border-radius: 50%;
                z-index:99;
                transition: visibility 0s, color 0.4s ease, opacity 0.5s linear ;
            }

            .next_arrow:hover, .prev_arrow:hover{
                background-color: dodgerblue;
                color: rgb(255, 188, 0);
            }

            .slick-slider .slick-arrow{
                visibility: hidden !important;
                opacity: 0 !important;
                transition: visibility 0.3s, opacity 0.3s linear !important;
            }
            .slick-slider:hover .prev_arrow{

                visibility: visible !important;
                opacity: 1 !important;
            }
            .slick-slider:hover .next_arrow{
                visibility: visible !important;
                opacity: 1 !important;
            }
            .slick-dots{
                display:flex;
                justify-content: center;
                margin:0;
                padding:16px 0;
                list-style: none;
                bottom:40px;
            }
            .slick-dots li{
                bottom:-80px;
                margin: 0 0.25rem;
                background: #fff;
                border-radius:50%;
            }
            .slick-dots button{
                display:block;
                width:16px;
                height:16px;
                padding:0;
                border:none;
                border-radius: 50%;
            }
            .slick-dots li.slick-active button{
                background-color: blue;
            }

            body::-webkit-scrollbar {
                background-color: #fff;
                width: 16px;
            }

            body::-webkit-scrollbar-track {
                background-color: #fff;
            }

            body::-webkit-scrollbar-thumb {
                background-color: #babac0;
                border-radius: 16px;
                border: 4px solid #fff;
            }

            body::-webkit-scrollbar-button {
                display:none;
        }

    /* read + profile book */
            .blur{
                filter: blur(0.9px);
                -webkit-filter: blur(0.9px);
            }

            #imgPage{
                width: 100%;
            }
            body, html{
                box-sizing: border-box;
                overflow-x: hidden;
                background: linear-gradient(rgba(220, 220, 220,0.85) , transparent);
                height:100vh; /*about us tidak bisa muncul */
                display:flex; 
                flex-direction:column; 
            }
            footer{
                margin-top:auto; 
            }
            .card{
                box-shadow: 0px 0 10px 3px rgb(171, 171, 171, 0.5);
                transition: 0.4s;
            }
            .card:hover{
                box-shadow: 0px 0 10px 6px rgb(171, 171, 171, 0.5);
            }

            table{
                box-shadow: 0px 0 10px 3px rgb(171, 171, 171, 0.5);
                transition: 0.3s;
            }
            table:hover{
                box-shadow: 0px 0 10px 6px rgb(171, 171, 171, 0.5);
            }
            .item{
                background-color:whitesmoke;
                border: solid 1px black;
                border-radius: 10px;
                padding: 10px 5px;
            }

        </style>
    </head>

    <body class="m-3">

        <div class="row p-2 bg-dark text-light ">
            <div class="col-sm-4">
                <img src="logo.png" style="width:20%" >
            </div>
            <div class="col-sm-5"><h1>Bursa Otomotif Surabaya</h1></div>
            <div class="col-sm-3">
                <span class="navbar-text mr-3">
                    <h5>Silahkan login/tambah akun</h5>
                </span>
                <button id="login-btn" data-target="#login-modal" class="btn btn-info">Login</button>  
                <a href="/Proyek/services/user/logout.php"><button class="btn btn-info">Logout</button></a>
                <button id="admin-button" data-target="admin-modal" class="btn btn-info">Admin</button>
                <button id="profil-btn" data-target="profil-modal" class="btn btn-info">Profil</button>  
            </div>
        </div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs bg-warning text-center" id="myTab" role="tablist">
            <li class="nav-item col sm-2">
                <a class="nav-link active text-dark" id="homeFE-tab" data-toggle="tab" href="#homeFE" role="tab" aria-controls="homeFE" aria-selected="false"><i class="fa fa-home"></i><button id="home-btn" onclick="pindah()" class="btn btn-warning btn-block">Home</button></a>
            </li>
            <li class="nav-item col sm-2">
                <a class="nav-link text-dark" id="profileFE-tab" data-toggle="tab" href="#profileFE" role="tab" aria-controls="profileFE" aria-selected="false"><i class="fa fa-image"></i><button id="mobil-btn" onclick="pindah2()" class="btn btn-warning btn-block">Mobil</button></a>
            </li>
            <li class="nav-item col sm-2">
                <a class="nav-link text-dark" id="messagesFE-tab" data-toggle="tab" href="#messagesFE" role="tab" aria-controls="messagesFE" aria-selected="false"><i class="fa fa-envelope"></i><button id="about-btn" onclick="pindah3()" class="btn btn-warning btn-block">About Us</button></a>
            </li>
        </ul>
       
        <div class="tab-content text-center font-weight-bold">
            <div class="tab-pane fade show active bg-light" id="homeFE" role="tabpanel" aria-labelledby="home-tab"><i>Home</i></div>
            <div class="tab-pane fade bg-light" id="profileFE" role="tabpanel" aria-labelledby="profile-tab"><i>Mobil</i></div>
            <div class="tab-pane fade bg-light" id="messagesFE" role="tabpanel" aria-labelledby="messages-tab"><i>About Us</i></div>
        </div>

        <div class="row p-3 bg-light" style="height : 100px;">   
            <button id="test-button" class="col-6 btn btn-danger btn-lg" data-target="#test-modal">&#8853 Test-Drive</button>
            <button id="beli-button" class="col-6 btn btn-danger btn-lg" data-target="#beli-modal">&#8853 Transaksi</button>
        </div>

        <!-- profile modal -->
        <div class="modal fade" id="profil-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <form action="" method="post"><h2 class="modal-title" style="text-align: center; padding-top: 5px">Profil</h2>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo$_SESSION['profil']?>
                    </div>
                    
                </form>   
                </div>
            </div>
        </div>


       <!-- login modal -->
       <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <form action="" method="post"><h2 class="modal-title" style="text-align: center; padding-top: 5px">Login</h2>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="email">Email : </label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password : </label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="submit-user-button" name="submit" class="btn btn-success">Login</button>
                        <button class="btn btn-success"><a href="register.php" target="self">Register</a></button>
                    </div>
                </form>   
                </div>
            </div>
        </div>

        <!-- admin modal -->
        <div class="modal fade" id="admin-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form action="" method="post"><h2 class="modal-title" style="text-align: center; padding-top: 5px">Login Admin</h2>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="username2">Username : </label>
                                <input type="text" class="form-control" name="username2" id="username2" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="password2">Password : </label>
                                <input type="password" class="form-control" name="password2" id="password2" placeholder="Password">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="submit-admin-btn" name="submit" class="btn btn-success">Login Admin</button>
                        </div>
                    </form>   
                </div>
            </div>
        </div>

        <!-- test drive modal -->
        <div class="modal" id="test-modal">
            <div class="modal-dialog">
                <div class="modal-content">    
                    <!--header-->
                    <div class="modal-header bg-dark">
                        <h2 class="modal-title text-light">Booking Test-Drive</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>                  
                    <!--body-->
                    <div class="row modal-body">
                        <div class="col-3">
                                    ID Customer
                              </div>
                              <div class="col-9">
                                    <input type="text" id="id_customer" class="form-control" autocomplete="off" placeholder="1">
                              </div>
                              <div class="col-3">
                                     ID Mobil
                              </div>
                              <div class="col-9">
                                    <input type="text" id="id_mobil2" class="form-control" autocomplete="off" placeholder="1">
                              </div>
                        <div class="col-3">
                            Merk Mobil
                        </div>
                        <div class="col-9">
                            <input type="text" id="merk" class="form-control" autocomplete="off" placeholder="Toyota">
                        </div>
                        <div class="col-3">
                            Nama Mobil
                        </div>
                        <div class="col-9">
                            <input type="text" id="nama" class="form-control" autocomplete="off" placeholder="Fortuner">
                        </div>
                        <div class="col-3">
                            Tahun Mobil
                        </div>
                        <div class="col-9">
                            <input type="text" id="tahun" class="form-control" autocomplete="off" placeholder="2019">
                        </div>              
                                                    
                        <div class="container">
                            <div class="form-group">
                                <label for="sel1">Pilih Hari :</label>
                                    <select class="form-control" id="hari">
                                        <option>Senin</option>
                                        <option>Selasa</option>
                                        <option>Rabu</option>
                                        <option>Kamis</option>
                                        <option>Jumat</option>
                                        <option>Sabtu</option>
                                    </select>
                            </div>
                        </div>                            

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                            
                                    <!-- Form code begins -->
                                    <form method="post">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal : </label>
                                        <input type="text" id="tanggal2" name="tanggal" class="form-control" placeholder="Tanggal">
                                    </div>
                                        <!-- <div class="form-group">
                                            <button class="btn btn-primary " name="submit" type="submit">Submit</button>
                                        </div> -->
                                    </form>
                            <!-- Form code ends --> 
                                </div>    
                            </div>
                        </div>                                                       
                                                            <div class="container">
                                                                <div class="form-group">
                                                                    <label for="sel1">Pilih Jam :</label>
                                                                    <select class="form-control" id="waktu">
                                                                        <option >10:00</option>
                                                                        <option>12:00</option>
                                                                        <option>14:00</option>
                                                                        <option>16:00</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>
                                                                
                                                        <div class="row modal-body">
                                                        <div class="col-12">
                                                            Notes : 
                                                        </div>
                                                        <div class="col-12">
                                                            <textarea id="cat" class="form-control" name="" autocomplete="off" placeholder="Text notes" style="width : 386px;height : 150px;"></textarea>
                                                        </div>
                                                        </div>                  
                                                        
                                                        <div class="modal-footer">
                                                        <button type="button"  id="submit-test-btn" class="btn btn-danger bg- text-light" data-dismiss="modal" style="width : 170px; ">+Add</button>
                                                        </div>  

                                                    </div>
                                                </div>
                                            </div>>
                                        </div>
                                    </div>
                                </div>
                            
        <!--beli modal -->
        <div class="modal" id="beli-modal">
                        <div class="modal-dialog">
                          <div class="modal-content">    
                            <!--header-->
                            <div class="modal-header bg-dark">
                              <h2 class="modal-title text-light">Form Transaksi</h2>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>                  
                            <!--body-->
                            <div class="row modal-body">
                              <div class="col-3">
                                    ID Customer
                              </div>
                              <div class="col-9">
                                    <input type="text" id="id_customer2" class="form-control" autocomplete="off" placeholder="1">
                              </div>
                              <div class="col-3">
                                     ID Mobil
                              </div>
                              <div class="col-9">
                                    <input type="text" id="id_mobil3" class="form-control" autocomplete="off" placeholder="1">
                              </div>
                              <div class="col-3">
                                  Merk Mobil
                              </div>
                              <div class="col-9">
                                  <input type="text" id="merk" class="form-control" autocomplete="off" placeholder="Toyota">
                              </div>
                                <div class="col-3">
                                    Nama Mobil
                                </div>
                                <div class="col-9">
                                    <input type="text" id="nama" class="form-control" autocomplete="off" placeholder="Fortuner">
                                </div>
                                <div class="col-3">
                                    Tahun Mobil
                                </div>
                                <div class="col-9">
                                    <input type="text" id="tahun" class="form-control" autocomplete="off" placeholder="2019">
                                </div>   
                                <div class="col-3">
                                    Harga Mobil
                                </div>
                                <div class="col-9">
                                    <input type="text" id="harga" class="form-control" autocomplete="off" placeholder="385000000">
                                </div>               

                                <div class="container-fluid">
                                    <div class="row">
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                  
                                      <!-- Form code begins -->
                                      <form method="post">
                                            <div class="form-group">
                                                <label for="tanggal">Tanggal : </label>
                                                <input type="text" id="tanggal3" name="tanggal" class="form-control" placeholder="Tanggal">
                                            </div>
                                        <!-- <div class="form-group">
                                          <button class="btn btn-primary " name="submit" type="submit">Submit</button>
                                        </div> -->
                                       </form>
                                       <!-- Form code ends --> 
                                    </div>    
                                   </div>
                                  </div>
                            
                                  <div class="container">
                                    <div class="form-group">
                                        <label for="sel1">DP : (dalam persen(%))</label>
                                        <select class="form-control col-6" id="dp">
                                            <option>25</option>
                                            <option>50</option>
                                            <option>75</option>
                                            <option>100</option>
                                        </select> 
                                    </div>
                                </div>                       

                                <div class="container">
                                    <div class="form-group">
                                        <label for="sel1">Tenor : (dalam tahun)</label>
                                        <select class="col-6 form-control" id="tenor">
                                            <option>0</option> 
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="form-group">
                                        <label for="sel1">Metode Pembayaran</label>
                                        <select class="form-control col-6" id="metode">
                                            <option>Tunai</option>
                                            <option>Kredit</option>
                                        </select>
                                    </div>
                                </div>
                            </div> 

                            <!--footer-->
                            <div class="modal-footer">
                              <button type="button"  id="submit-beli-btn" class="btn btn-danger bg- text-light" data-dismiss="modal" style="width : 170px; ">Submit Transaksi</button>
                            </div>          
                          </div>
                        </div>
                    </div>


        <!-- ajax -->
        <div id="sembarang">
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
                        <p class="text-muted">BURSA OTOMOTIF SURABAYA</p>
                        <p class="text-justify">Bursa Otomotif Surabaya adalah showroom mobil bekas berkualitas dan berkembang pesat di Jawa Timur, yang menyediakan mobil – mobil “Bekas Seperti Baru”. 
                        Bursa Otomotif Surabaya telah berdiri sejak tahun 2011 dan telah memiliki 3 cabang dealer yakni di Jakarta, Bali dan Surabaya. 
                        Kantor pusat Bursa Otomotif Surabaya berada di Jl. Baratajaya XIX No. 43-45 Surabaya dan Service Centre Bursa Otomotif Surabaya berada di Jl. Kendangsari no.21 Surabaya.</p>
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
                                        <p><em>"Rasakan kenyamanan berkelas, menjelajah bersama keluarga menggunakan Pajero Sport dari Mitsubishi Motors. Mobil pilihan keluarga dengan performa tangguh tanpa batas"</em></p>
                                    </div>
                                </li>
                                <li class="feature-item">
                                    <div class="left-icon">
                                        <img src="hrv.jpg" alt="second one">
                                    </div>
                                    <div class="right-content">
                                        <h4>Honda HRV</h4>
                                        <p><em>"Bersiaplah merasakan impresi dan sensasi berkendara yang outstanding dan stand out di segala suasana dari salah satu SUV terbaik Honda!"</em></p>
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
                                        <p><em>"Toyota New Kijang Innova Mobil terbaik untuk keluarga."</em></p>
                                    </div>
                                </li>
                                <li class="feature-item">
                                    <div class="left-icon">
                                        <img src="crv1.jpg" alt="training fifth">
                                    </div><br>
                                    <div class="right-content">
                                        <h4>Honda CRV</h4>
                                        <p><em>"Kesempurnaan berkendara untuk petualangan yang lebih mengesankan, kini semakin mewah dengan perubahan nyata pada sebuah SUV berkelas dunia. All New Honda CR-V, hadir dengan karakter baru yang lebih gagah, tangguh, dan senantiasa mewah untuk setiap perjalanan yang menakjubkan."</em></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>

        <footer class="bg-dark text-white text-lg-start">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-5 col-md-12 mb-4 mb-md-0 text-center">
                        <h5 class="text-uppercase">Footer Content</h5>
                        <hr style="border : 1px solid white;"></hr>
                        <p>Bursa Otomotif Surabaya adalah showroom mobil bekas berkualitas dan berkembang pesat di Jawa Timur, yang menyediakan mobil – mobil “Bekas Seperti Baru”. 
                        Bursa Otomotif Surabaya telah berdiri sejak tahun 2011 dan telah memiliki 3 cabang dealer yakni di Jakarta, Bali dan Surabaya. 
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
                                <a href="#!" class="text-white">Mobil</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">About Us</a>
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

        <!-- JS -->
        <script src="assets/jquery/jquery-3.5.1.min.js"></script>
        <!-- <script src="assets/popper/popper.min.js"></script> -->
        <script src="assets/bootstrap/js/bootstrap.js"></script>

        <!-- JQuery Confirm -->
        <script src="assets/jquery-confirm/jquery-confirm.js"></script>

        <script>

            function pindah(){
                $.ajax({
                    url: '/Proyek/terserah.php',
                    method: 'GET', 
                    data : {
                        action:"smbrng"
                    },
                    success: function(data) {
                        if(data=="trsh"){
                            $("#sembarang").html("")
                                let terserah = $(`
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
                                            <p class="text-muted">BURSA OTOMOTIF SURABAYA</p>
                                            <p class="text-justify">Bursa Otomotif Surabaya adalah showroom mobil bekas berkualitas dan berkembang pesat di Jawa Timur, yang menyediakan mobil – mobil “Bekas Seperti Baru”. 
                        Bursa Otomotif Surabaya telah berdiri sejak tahun 2011 dan telah memiliki 3 cabang dealer yakni di Jakarta, Bali dan Surabaya. 
                        Kantor pusat Bursa Otomotif Surabaya berada di Jl. Baratajaya XIX No. 43-45 Surabaya dan Service Centre Bursa Otomotif Surabaya berada di Jl. Kendangsari no.21 Surabaya.</p>
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
                                                            <p><em>"Rasakan kenyamanan berkelas, menjelajah bersama keluarga menggunakan Pajero Sport dari Mitsubishi Motors. Mobil pilihan keluarga dengan performa tangguh tanpa batas"</em></p>
                                                        </div>
                                                    </li>
                                                    <li class="feature-item">
                                                        <div class="left-icon">
                                                            <img src="hrv.jpg" alt="second one">
                                                        </div>
                                                        <div class="right-content">
                                                            <h4>Honda HRV</h4>
                                                            <p><em>"Bersiaplah merasakan impresi dan sensasi berkendara yang outstanding dan stand out di segala suasana dari salah satu SUV terbaik Honda!"</em></p>
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
                                                            <p><em>"Toyota New Kijang Innova Mobil terbaik untuk keluarga."</em></p>
                                                        </div>
                                                    </li>
                                                    <li class="feature-item">
                                                        <div class="left-icon">
                                                            <img src="crv1.jpg" alt="training fifth">
                                                        </div><br>
                                                        <div class="right-content">
                                                            <h4>Honda CRV</h4>
                                                            <p><em>"Kesempurnaan berkendara untuk petualangan yang lebih mengesankan, kini semakin mewah dengan perubahan nyata pada sebuah SUV berkelas dunia. All New Honda CR-V, hadir dengan karakter baru yang lebih gagah, tangguh, dan senantiasa mewah untuk setiap perjalanan yang menakjubkan."</em></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                <footer class="bg-dark text-white text-lg-start">
                                    <div class="container p-4">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-12 mb-4 mb-md-0 text-center">
                                                <h5 class="text-uppercase">Footer Content</h5>
                                                <hr style="border : 1px solid white;"></hr>
                                                <p>
                                                Bursa Otomotif Surabaya adalah showroom mobil bekas berkualitas dan berkembang pesat di Jawa Timur, yang menyediakan mobil – mobil “Bekas Seperti Baru”. 
                                                Bursa Otomotif Surabaya telah berdiri sejak tahun 2011 dan telah memiliki 3 cabang dealer yakni di Jakarta, Bali dan Surabaya. 
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
                                                        <a href="#!" class="text-white">Mobil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" class="text-white">About Us</a>
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
                            `)
                                $("#sembarang").append(terserah);
                        }
                    },
                    error: function($xhr, textStatus, errorThrown) {
                        alert($xhr.responseJSON['error']);
                    }
                });
            }

            function pindah2(){
                $.ajax({
                    url: '/Proyek/terserah.php',
                    method: 'GET', 
                    data : {
                        action:"smbrng"
                    },
                    success: function(data) {
                        if(data=="trsh"){
                            $("#sembarang").html("")
                                let terserah = $(`
                                    <div class="col-sm-12" role = "document">
                                        <button id="generate-btn" onclick="load_data()" class="btn btn-warning btn-block">Generate</button>
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%">Id</th>
                                                            <th width="15%">Merk</th>
                                                            <th width="20%">Nama Mobil</th>
                                                            <th width="15%">Tanggal</th>
                                                            <th width="5%">Harga</th>
                                                            <th width="5%">Tahun</th>
                                                            <th width="15%">Deskripsi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="user-content">

                                                    </tbody>
                                                </table>
                                    </div>

                                <footer class="bg-dark text-white text-lg-start">
                                    <div class="container p-4">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-12 mb-4 mb-md-0 text-center">
                                                <h5 class="text-uppercase">Footer Content</h5>
                                                <hr style="border : 1px solid white;"></hr>
                                                <p>
                                                Bursa Otomotif Surabaya adalah showroom mobil bekas berkualitas dan berkembang pesat di Jawa Timur, yang menyediakan mobil – mobil “Bekas Seperti Baru”. 
                                                Bursa Otomotif Surabaya telah berdiri sejak tahun 2011 dan telah memiliki 3 cabang dealer yakni di Jakarta, Bali dan Surabaya. 
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
                                                        <a href="#!" class="text-white">Mobil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" class="text-white">About Us</a>
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
                            `)
                                $("#sembarang").append(terserah);
                        }
                    },
                    error: function($xhr, textStatus, errorThrown) {
                        alert($xhr.responseJSON['error']);
                    }
                });
            }

            function pindah3(){
                $.ajax({
                    url: '/Proyek/terserah.php',
                    method: 'GET', 
                    data : {
                        action:"smbrng"
                    },
                    success: function(data) {
                        if(data=="trsh"){
                            $("#sembarang").html("")
                                let terserah = $(`
                                <section class="jumbotron text-center">
                                    <div class="container">
                                        <h1>Bursa Otomotif Surabaya</h1>
                                        <p class="lead text-muted">Bursa Otomotif Surabaya adalah showroom mobil bekas berkualitas dan berkembang pesat di Jawa Timur, yang menyediakan mobil – mobil “Bekas Seperti Baru”. 
                                            Harris Mobil telah berdiri sejak tahun 2011 dan telah memiliki 3 cabang dealer yakni di Sidoarjo, Probolinggo dan Darmo Trade Centre. 
                                            Kantor pusat Harris Mobil berada di Jl. Baratajaya XIX No. 43-45 Surabaya dan Service Centre Harris Mobil berada di Jl. Kendangsari no.21 Surabaya.</p>
                                    </div>
                                </section>
                                <br>
                                <br>
                                <br>
                                <div class="services" style="opacity: 1; transform: translateY(0px);">
                                <h1 class="text-center">TESTIMONIAL</h1><br>
                                <div class="container marketing">
                                    <div class="row">
                                    <div class="col-lg-4">
                                        <h2>Budi</h2><br>
                                        <p>"Mobil yang dijual di Bursa Otomotif Surabaya sangat bagus dan berkualitas, harganya juga terjangkau!"</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <h2>Joko</h2><br>
                                        <p>"Pelayanannya sangat baik dan mobil yang dijual benar-benar berkualitas, banyak orang merekomendasikan tempat ini!"</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <h2>Bobby</h2><br>
                                        <p>"Saya sudah 2x mencoba test drive dan dilayani dengan baik serta mobil-mobilnya sangat terawat dan terjamin pemakaiannya.Sangat recommended!"</p>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="aboutUs" style="opacity: 1; transform: translateY(0px);">
                                <h1 class="text-center">About Us</h1><br>
                                <div class="container" style="display:flex">
                                    <div class="card">
                                        <h4>Kendrew Tandio</h4>
                                        <p class="title">C14190070</p>
                                        <p>Universitas Kristen Petra Surabaya</p>
                                    </div>
                                    <div class="card">
                                        <h4>Hugo Oliviera</h4>
                                        <p class="title">C14190075</p>
                                        <p>Universitas Kristen Petra Surabaya</p>
                                    </div>
                                    <div class="card">
                                        <h4>Dick Jovian</h4>
                                        <p class="title">C14190076</p>
                                        <p>Universitas Kristen Petra Surabaya</p>
                                    </div>
                                    <div class="card">
                                        <h4>Arnol</h4>
                                        <p class="title">C14190092</p>
                                        <p>Universitas Kristen Petra Surabaya</p>
                                    </div>
                                </div>
                                </div>
                                <br>
                                <br>
                                <br>

                                    <footer class="bg-dark text-white text-lg-start">
                                        <div class="container p-4">
                                            <div class="row">
                                                <div class="col-lg-5 col-md-12 mb-4 mb-md-0 text-center">
                                                    <h5 class="text-uppercase">Footer Content</h5>
                                                    <hr style="border : 1px solid white;"></hr>
                                                    <p>
                                                    Bursa Otomotif Surabaya adalah showroom mobil bekas berkualitas dan berkembang pesat di Jawa Timur, yang menyediakan mobil – mobil “Bekas Seperti Baru”. 
                                                    Bursa Otomotif Surabaya telah berdiri sejak tahun 2011 dan telah memiliki 3 cabang dealer yakni di Jakarta, Bali dan Surabaya. 
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
                                                            <a href="#!" class="text-white">Mobil</a>
                                                        </li>
                                                        <li>
                                                            <a href="#!" class="text-white">About Us</a>
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
                                `)
                                $("#sembarang").append(terserah);
                        }
                    },
                });
            }

            $("#login-btn").click(function(){
                $("#login-modal").modal();
            });


            $("#profil-btn").click(function(){
                $("#profil-modal").modal();
            });

            $("#submit-user-button").click(function(){
                var email = $("#email").val();
                var password = $("#password").val();

                $.ajax({
                    url: '/Proyek/services/user/login.php',
                    method: 'POST',
                    data: {
                        email: email,
                        password: password,
                        action:'login'
                    },
                    success: function(data) {
                        $("#email").val('');
                        $("#password").val('');
                        $("#login-modal").modal('toggle');
                        data.forEach(cus => {
                            alert("Login Success");
                        })  
                    },
                });
            });

            $("#admin-button").click(function(){
                $("#admin-modal").modal();
            });

            $("#submit-admin-btn").click(function(){
                var username = $("#username2").val();
                var password = $("#password2").val();

                $.ajax({
                    url: '/Proyek/services/user/admin.php',
                    method: 'POST',
                    data: {
                        username: username,
                        password: password
                    },
                    success: function(data) {
                        $("#username2").val('');
                        $("#password2").val('');
                        $("#admin-modal").modal('toggle');
                        window.location = data['redirect'];
                        alert("Login Success");
                    },
                });
            });

            $("#test-button").click(function(){
                $("#test-modal").modal();
            });

            $("#submit-test-btn").click(function(){
                var id_mobil = $("#id_mobil2").val();
                var id_customer = $("#id_customer").val();
                var tanggal = $("#tanggal2").val();
                var waktu = $("#waktu").val();

                $.ajax({
                    url: '/Proyek/services/user/testdrive.php',
                    method: 'POST',
                    data: {
                        id_mobil: id_mobil,
                        id_customer: id_customer,
                        tanggal: tanggal,
                        waktu: waktu
                    },
                    success: function(data) {
                        $("#id_mobil2").val('');
                        $("#id_customer").val('');
                        $("#tanggal2").val('');
                        $("#waktu").val('');
                        $("#test-modal").modal('toggle');
                        window.location = data['redirect'];
                        alert("Booking Success");
                    },
                });
            });

            $("#beli-button").click(function(){
                $("#beli-modal").modal();
            });

            $("#submit-beli-btn").click(function(){
                var id_mobil = $("#id_mobil3").val();
                var id_customer = $("#id_customer2").val();
                var tanggal = $("#tanggal3").val();
                var dp = $("#dp").val();
                var tenor = $("#tenor").val();
                var metode_pembayaran = $("#metode").val();

                $.ajax({
                    url: '/Proyek/services/user/beli.php',
                    method: 'POST',
                    data: {
                        id_mobil: id_mobil,
                        id_customer: id_customer,
                        tanggal: tanggal,
                        dp: dp,
                        tenor: tenor,
                        metode_pembayaran: metode_pembayaran
                    },
                    success: function(data) {
                        $("#id_mobil3").val('');
                        $("#id_customer2").val('');
                        $("#tanggal3").val('');
                        $("#dp").val('');
                        $("#tenor").val('');
                        $("#metode").val('');
                        $("#beli-modal").modal('toggle');
                        window.location = data['redirect'];
                        alert("Transaksi Success");
                    },
                });
            });

            function load_data() {
                $.ajax({
                    url: "/Proyek/services/user/get_all_user.php",
                    method: "GET",
                    success: function(data) {
                        var co = 1;
                        $("#user-content").html('');
                        data.forEach(function(mhs){
                            var row = $("<tr></tr>");
                            var col1 = $("<td>" + mhs['id_mobil'] + "</td>");
                            var col2 = $("<td>" + mhs['merk'] + "</td>");
                            var col3 = $("<td>" + mhs['nama'] + "</td>");
                            var col4 = $("<td>" + mhs['tanggal'] + "</td>");
                            var col5 = $("<td>" + mhs['harga'] + "</td>");
                            var col6 = $("<td>" + mhs['tahun'] + "</td>");
                            var col7 = $("<td>" + mhs['deskripsi'] + "</td>");
                            col1.appendTo(row);
                            col2.appendTo(row);
                            col3.appendTo(row);
                            col4.appendTo(row);
                            col5.appendTo(row);
                            col6.appendTo(row);
                            col7.appendTo(row);

                            co++;
                            $("#user-content").append(row);
                        });
                    },
                    error: function(data) {

                    }
                });
            }

            $(document).ready(function(){
                load_data();
            });


            $(function () 
            {
                $("#cari").focus(); //set kursor di input nama saat load awal

                // $("#btngo").click(function(){
                //     var value=$("#input").val().toLowerCase();
                //     $(".card").filter(function(){
                //         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                //     });
                // });

                $("#add").click(function()
                {
                    var Mobil = "Mobil : ";
                    var space = " ";
                    var space2 = ", ";
                    var Waktu = "Waktu : ";
                    var Hari  = "Hari  : ";
                    var Notes = "Notes : ";

                    var merk= $("#merk").val();
                    var nama = $("#nama").val();  
                    var tahun = $("#tahun").val();      
                    var hari =  $("#hari").val(); 
                    var date  =  $("#date").val();   
                    var cat =  $("#cat").val(); 
                    var jam = $("#jam").val();    
                    $("#postit").append
                    (
                        '<div class="col mx-1" style="max-width: 300px; border: solid black; ">'
                        +'<div style="text-align: right;"><button type="button" class="btn exit">&times</button></div>'                        
                        +'<div>'+Mobil+merk+space+nama+space+tahun+'</div>'
                        +'<div>'+Waktu+jam+'</div>'
                        +'<div>'+Hari+hari+space2+date+'</div>'
                        +'<div>'+Notes+cat+'</div>'
                        +'<div style="text-align: center;"><button type="button" class="btn edit1 bg-secondary text-lights">Edit</button></div>' 
                        +'</div><br>'
                    );                
                    $("#merk").val("");
                    $("#nama").val("");
                    $("#tahun").val("");
                    $("#hari").val("");
                    $("#jam").val("");
                });

                var lastnum = parseInt($(".tr:last td:first").html()); //ambil nomor terakhir
                var beli="<tr>";
                $("#1").click(function(){
                    var delay = 200;                 
                    $.confirm({title: 'Confirm!',content: 'Tambah Favorit ?',autoClose: 'cancel|10000',buttons: {OK: {text: 'OK',btnClass: 'btn-blue',keys: ['enter'],action: function(){                                    
                                        setTimeout(function() {                                  
                                                lastnum += 1;
                                                beli+="<td>"+lastnum+"</td><td>"+$("#fortuner").text()+"</td><td>"+$("#tahunfortuner").text()+"</td></tr>"
                                                Totals();
                                                $("#myTable").html(beli);                                        
                                        }, delay); }
                                },cancel: {text: 'cancel',btnClass: 'btn-red',keys: ['esc'], action: function(){$.alert('Cancel');}}} });                    
                });
                $("#2").click(function(){
                    var delay = 200;                 
                    $.confirm({title: 'Confirm!',content: 'Tambah Favorit ?',autoClose: 'cancel|10000',buttons: {OK: {text: 'OK',btnClass: 'btn-blue',keys: ['enter'],action: function(){                                    
                                        setTimeout(function() {                                  
                                                lastnum += 1;
                                                beli+="<td>"+lastnum+"</td><td>"+$("#pajero").text()+"</td><td>"+$("#tahunpajero").text()+"</td></tr>" 
                                                Totals();
                                                $("#myTable").html(beli);                                    
                                       }, delay); }
                                },cancel: {text: 'cancel',btnClass: 'btn-red',keys: ['esc'], action: function(){$.alert('Cancel');}}} });                    
                });
                $("#3").click(function(){
                    var delay = 200;                 
                    $.confirm({title: 'Confirm!',content: 'Tambah Favorit ?',autoClose: 'cancel|10000',buttons: {OK: {text: 'OK',btnClass: 'btn-blue',keys: ['enter'],action: function(){                                    
                                        setTimeout(function() {                                  
                                            lastnum += 1;
                                            beli+="<td>"+lastnum+"</td><td>"+$("#cx5").text()+"</td><td>"+$("#tahuncx5").text()+"</td></tr>"   
                                            Totals();
                                            $("#myTable").html(beli);                                  
                                       }, delay); }
                                },cancel: {text: 'cancel',btnClass: 'btn-red',keys: ['esc'], action: function(){$.alert('Cancel');}}} });                    
                });            
                function Totals()
                {
                    var tot= lastnum;
                    $("#hasil").html(tot);
                }
                
                $("#cari").on("keyup", function() 
                {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() 
                    {
                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
                
                //JQuery tooltip enchanced title
                $('[data-toggle="tooltip"]').tooltip();

                $(document).ready(function()
                {
                    var date_input=$('input[name="date"]'); //our date input has the name "date"
                    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                    var options=
                    {
                        format: 'mm/dd/yyyy',
                        container: container,
                        todayHighlight: true,
                        autoclose: true,
                    };
                    date_input.datepicker(options);
                })
            });

            //home
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

                // transaksi
                $("#cekdp").click(function()
                {
                    var rp = " Rp"; 
                    var dp = $("#dp").val();
                    var harga = $("#harga").val();
                    var totdp = 0;
                    totdp = (harga*dp)/100;
                    $("#hasildp").empty();
                    $("#hasildp").append
                    (                                           
                      '<a>'+rp+totdp+'</a>'                    
                    );

                })
                $("#cektenor").click(function()
                {                
                    var rp = " Rp"; 
                    var bln = " per Bulan"
                    var dp = $("#dp").val();
                    var harga = $("#harga").val();
                    var tenor = $("#tenor").val();
                    var totdp = 0;
                    var sisa = 0;
                    var totbulan = 0;
                    var result = 0;
                    if(tenor == 0)
                    {
                        $("#hasilcicilan").append
                        (                                           
                        '<a>'+rp+result+'</a>'                    
                        );
                    }
                    else
                    {
                        totbulan = tenor*12;
                        totdp = (harga*dp)/100;
                        sisa = harga - totdp;
                        result = sisa/totbulan;
                        $("#hasilcicilan").empty();
                        $("#hasilcicilan").append
                        (                                           
                        '<a>'+rp+result.toPrecision(10)+bln+'</a>'                    
                        );
                    }
                   
                })
                $("#addtransaksi").click(function()
                {                  
  
                    $("#hasilcicilan").empty(); 
                    $("#hasildp").empty();
                    $("#idcustomer").val("");
                    $("#idmobil").val("");     
                    $("#merk").val("");
                    $("#nama").val("");
                    $("#tahun").val("");     
                    $("#harga").val("");        
                    $("#date").val("");                 
                    $("#dp").val("");           
                    $("#tenor").val("");      
                })

                // cari
                $("#cari").on("keyup", function() 
                {
                    var value = $(this).val().toLowerCase();
                    $("#user-content").filter(function() 
                    {
                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });

                //JQuery tooltip enchanced title
                $('[data-toggle="tooltip"]').tooltip();

        </script>

    </body>
</html>