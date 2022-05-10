<html>
    <head>
        <title>Register</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/linearicons/style.css"/>
        <!-- JQuery Confirm -->
        <link rel="stylesheet" href="assets/jquery-confirm/jquery-confirm.css"/>
    </head>

    <body>
        <div class="background" style="background-image: url(https://www.homeppt.com/uploads/thumbnails/cartoon-beetle-car-slide-background-picture.jpg); background-size: cover; height: 100%;">
            <div class="container">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4 pt-5">
                        <div class="card">
                            <div class="card-color" style="box-shadow: 1px 2px 8px rgba(1, 1, 1, 1);">
                                <div class="card-body">
                                    <h2 class="text-center">Register</h2>
                                    <hr>
                                    <div class="form-group">
                                        <label for="nama">Nama : </label>
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email : </label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password : </label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat : </label>
                                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="telp">No Telp : </label>
                                        <input type="text" class="form-control" name="telp" id="telp" placeholder="No. Telp">
                                    </div>
                                    <button type="button" id="register-button" class="btn btn-success btn-block">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS -->
        <script src="assets/jquery/jquery-3.5.1.min.js"></script>
        <script src="assets/popper/popper.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.js"></script>

        <script>

            $(document).ready(function(){
                load_data();
            });

            $("#register-button").click(function(){
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var alamat = $("#alamat").val();
                var telp = $("#telp").val();

                $.ajax({
                    url: '/Proyek/services/user/add_user.php',
                    method: 'POST',
                    data: {
                        nama: nama,
                        email: email,
                        password: password,
                        alamat: alamat,
                        telp: telp
                    },
                    success: function(data) {
                        $("#nama").val('');
                        $("#alamat").val('');
                        $("#telp").val('');
                        $("#email").val('');
                        $("#password").val('');
                        window.location = data['redirect'];
                        alert("Register Success");
                    },
                    error: function($xhr, textStatus, errorThrown) {
                        alert($xhr.responseJSON['error']);
                    }
                });
            });

        </script>
    </body>
</html>