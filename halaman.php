<?php 
session_start();
// if (!isset($_SESSION['username'])) {
//     header("Location:index.php");
// }
if(isset($_POST['tambah'])){
    if($_SESSION['sekarang'] != NULL){
        echo "<script>alert('Sudah login Silahkan Transaksi');</script>";
    }
    else{
        echo "<script>alert('Login dulu bro');</script>";
    }
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cekuser = false;
    $cekpass = false;
    $users = $mysqli->query("select * from customers")->fetch_all(MYSQLI_ASSOC);
    foreach($users as $user){
        $_SESSION['sekarang'] = $user;
    }
    if($email == "admin" && $password == "admin"){
        header("location: index.php");
    }
}
?>

<html>
    <head>
        <title>Showroom Mobil</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/linearicons/style.css"/>
        <!-- JQuery Confirm -->
        <link rel="stylesheet" href="assets/jquery-confirm/jquery-confirm.css"/>

    </head>

    <body class="m-3">

        <div class="row p-2 bg-dark text-light ">
            <div class="col-sm-3"><h2>Bursa Otomotif Surabaya</h2></div>
            <div class="col-sm-3">
                <div class="row float-right pr-3">
                <input type="text" placeholder="Cari Mobil..." name="search" id="input" style="width:300px";>
                    <button type="button" class="btn btn-warning" id="btngo">Go</button>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="row float-right pr-3">           
                    <button id="navbar-btn" onclick="pindah()" class="btn btn-success btn-block">navbar</button>
                </div>
            </div>
            <div class="col-sm-2">
                <button id="login-btn" data-target="#login-modal" class="btn btn-success btn-block">Login</button>      
            </div>
            <div class="col-sm-2">
                <form action="" method="post"><button type="submit" name="tambah" class="btn btn-success btn-block">Tambah</button></form>
                <a href="/Proyek/services/user/logout.php"><button class="btn btn-success">Log out</button></a>
            </div>
        </div>
        
        <div id="sembarang">
            <!-- awal -->
        </div>

        <!-- modal login -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <form action="" method="post"><h5 class="modal-title">Login</h5>
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
                        <a href="register.php" target="_self"><button class="btn btn-success">Register</button></a>
                    </div></form>
                        
                </div>
            </div>
        </div>

        <div class="row px-3">
            
            <div class="col-sm-3"> 
                <div><strong>KERANJANG SAYA</strong></div> 
                <table class="table table-striped shop">
                    <thead>
                        <tr>
                            <th>Nama Mobil</th>
                            <th>Merk</th>
                            <th>SubTotal</th>
                        </tr>
                    </thead>

                    <tbody id="tbel">

                    </tbody>

                    <tfoot>
                        <tr class="total" style="background-color: lightblue;">
                            <td><b>Total Pembayaran:</b></td>
                            <td><b>Rp.</b></td>
                            <td id="hasil"><b>0</b></td>
                        </tr>
                    </tfoot>

                </table>
            </div>

            <div class="col-sm-9">

                <div class="row">
                    <div class="col card p-1 m-2"> 
                        <!-- <img src="fortuner.jpg" width="345" height="250"> -->
                        <!-- <img src="fortuner.jpg" width="100%" height="45%"> -->
                        <div class="container">
                            <h4><p class="text-secondary m-1" id="rinso" style="font-weight: bold;">Toyota fortuner</p></h4>
                            <h5><p class="price m-1" id="rinsop" style="font-weight: bold;">Rp. 42.000</p></h5>
                            <p class="m-1">2017</p>
                            <p class="text-muted m-1">Deskripsi Produk..Deskripsi Produk..Deskripsi Produk..Deskripsi Produk..
                                Deskripsi Produk..Deskripsi Produk..Deskripsi Produk..Deskripsi Produk...</p>
                        </div>
                        <div class="card-footer">
                            <div class="row p-1">
                                <!-- <div class="col-9"><img src="rating2.png" style="width: 100pt;"></div> -->
                                <div class="col-8 text-secondary m-1" style="font-size: small;">9 JUL</div>
                                <form action="" method="post"><div class="col-3 btn btn-success col float-right" id="1" >ADD</div></form>
                            </div>
                        </div>
                    </div> 

                    <div class="col card p-1 m-2"> 
                        <!-- <img src="pajero.jpg" width="345" height="250"> -->
                        <div class="container">
                            <h4><p class="text-secondary m-1" id="rinso" style="font-weight: bold;">Toyota fortuner</p></h4>
                            <h5><p class="price m-1" id="rinsop" style="font-weight: bold;">Rp. 42.000</p></h5>
                            <p class="m-1">2017</p>
                            <p class="text-muted m-1">Deskripsi Produk..Deskripsi Produk..Deskripsi Produk..Deskripsi Produk..
                                Deskripsi Produk..Deskripsi Produk..Deskripsi Produk..Deskripsi Produk...</p>
                        </div>
                        <div class="card-footer">
                            <div class="row p-1">
                                <!-- <div class="col-9"><img src="rating2.png" style="width: 100pt"></div> -->
                                <div class=" btn btn-success col float-right" id="2">BELI</div>
                            </div>
                        </div>
                    </div> 

                    <div class="col card p-1 m-2"> 
                        <!-- <img src="cx5.jpg" width="345" height="250"> -->
                        <div class="container">
                            <h4><p class="text-secondary m-1" id="rinso" style="font-weight: bold;">Toyota fortuner</p></h4>
                            <h5><p class="price m-1" id="rinsop" style="font-weight: bold;">Rp. 42.000</p></h5>
                            <p class="m-1">2017</p>
                            <p class="text-muted m-1">Deskripsi Produk..Deskripsi Produk..Deskripsi Produk..Deskripsi Produk..
                                Deskripsi Produk..Deskripsi Produk..Deskripsi Produk..Deskripsi Produk...</p>
                        </div>
                        <div class="card-footer">
                            <div class="row p-1">
                                <!-- <div class="col-9"><img src="rating2.png" style="width: 100pt;"></div> -->
                                <div class=" btn btn-success col float-right" id="3">BELI</div>
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="row">
                    <div class="col card p-1 m-2"> 
                        <!-- <img src="civic.jpg" width="345" height="250"> -->
                        <div class="container">
                            <h4><p class="text-secondary m-1" id="rinso" style="font-weight: bold;">Toyota fortuner</p></h4>
                            <h5><p class="price m-1" id="rinsop" style="font-weight: bold;">Rp. 42.000</p></h5>
                            <p class="m-1">2017</p>
                            <p class="text-muted m-1">Deskripsi Produk..Deskripsi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                let terserah = $(`<div class="container">
                                                    <div class="row">
                                                        <div class="col-4"></div>
                                                        <div class="col-4 pt-5">
                                                            <div class="card">
                                                                <div class="card-color" style="box-shadow: 1px 2px 8px rgba(1, 1, 1, 1);">
                                                                    <div class="card-body">
                                                                        <h2 class="text-center">Login</h2>
                                                                        <hr>
                                                                        <div class="form-group">
                                                                            <label for="email">Email : </label>
                                                                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="password">Password : </label>
                                                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                                                        </div>
                                                                        <button id="login-button" class="btn btn-success btn-block">Login</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>`)
                                $("#sembarang").append(terserah);
                        }
                    },
                    error: function($xhr, textStatus, errorThrown) {
                        alert($xhr.responseJSON['error']);
                    }
                });
            }

            $("#login-btn").click(function(){
                $("#login-modal").modal();
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
                        data.forEach(cus => {
                            let tempemail = cus['email'];
                            let temppassword = cus['password'];
                            if(tempemail == "admin"){
                                alert("Login Success");
                            }
                        })
                        
                    },
                });
            });

            $(function () 
            {
                $("#btngo").click(function(){
                    var value=$("#input").val().toLowerCase();
                    $(".card").filter(function(){
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });

                var i1=0;
                var i2=0;
                var i3=0;
                var i4=0;
                var i5=0;
                var i6=0;
                $("#1").click(function(){
                    i1+=1;
                    AddItem();
                    Totals();
                    
                });
                $("#2").click(function(){
                    i2+=1;
                    AddItem();
                    Totals();
                });
                $("#3").click(function(){
                    i3+=1;
                    AddItem();
                    Totals();
                });
                $("#4").click(function(){
                    i4+=1;
                    AddItem();
                    Totals();
                });
                $("#5").click(function(){
                    i5+=1;
                    AddItem();
                    Totals();
                });
                $("#6").click(function(){
                    i6+=1;
                    AddItem();
                    Totals();
                });

                function AddItem()
                {
                    var beli="<tr>"
                    if(i1!=0)
                    {
                        beli+="<td>"+$("#rinso").text()+"</td><td>"+i1+"</td><td>"+i1*42000+"</td></tr>"
                    }
                    if(i2!=0)
                    {
                        beli+="<td>"+$("#bear").text()+"</td><td>"+i2+"</td><td>"+i2*100000+"</td></tr>"         
                    }
                    if(i3!=0)
                    {
                        beli+="<td>"+$("#stitch").text()+"</td><td>"+i3+"</td><td>"+i3*50000+"</td></tr>"                   
                    }
                    if(i4!=0)
                    {
                        beli+="<td>"+$("#kispray").text()+"</td><td>"+i4+"</td><td>"+i4*30000+"</td></tr>"                   
                    }
                    if(i5!=0)
                    {
                        beli+="<td>"+$("#kursi").text()+"</td><td>"+i5+"</td><td>"+i5*150000+"</td></tr>"
                    }
                    if(i6!=0)
                    {
                        beli+="<td>"+$("#jam").text()+"</td><td>"+i6+"</td><td>"+i6*500000+"</td></tr>"
                    }
                    $("#tbel").html(beli);
                }

                function Totals()
                {
                    var tot=i1*42000+i2*100000+i3*50000+i4*30000+i5*150000+i6*500000;
                    $("#hasil").html(tot);
                }
            });

        </script>
    </body>
</html>