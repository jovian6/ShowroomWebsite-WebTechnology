<html>
    <head>
        <title>Login</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/linearicons/style.css"/>
        <!-- JQuery Confirm -->
        <link rel="stylesheet" href="assets/jquery-confirm/jquery-confirm.css"/>
    </head>

    <body>
        <div class="background" style="background-image: url(https://www.homeppt.com/uploads/thumbnails/cartoon-beetle-car-slide-background-picture.jpg); background-size: cover; padding-top: 100px; height: 100%;">
            <div class="container">
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
            </div>
        </div>

        <!-- JS -->
        <script src="assets/jquery/jquery-3.5.1.min.js"></script>
        <script src="assets/popper/popper.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.js"></script>

        <script>
            $("#login-button").click(function(){
                var email = $("#email").val();
                var password = $("#password").val();

                $.ajax({
                    url: '/Proyek/services/user/login.php',
                    method: 'POST',
                    data: {
                        email: email,
                        password: password
                    },
                    success: function(data) {
                        window.location = data['redirect'];
                    },
                    error: function($xhr, textStatus, errorThrown) {
                        alert($xhr.responseJSON['error']);
                    }
                });
            });
        </script>
    </body>
</html>