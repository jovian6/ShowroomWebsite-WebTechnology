<html>
    <head>
        <title>Database</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/linearicons/style.css"/>

        <!-- JQuery Confirm -->
        <link rel="stylesheet" href="assets/jquery-confirm/jquery-confirm.css"/>
    </head>
    <body>

        <div class="container">
            <div class="row pt-4">
                <div class="col-12">
                    <a href="/Proyek/services/user/logout.php"><button class="btn btn-success">Logout</button></a>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-6">
                    <h3 class="title">Admin</h3>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <button id="add-mobil-btn" class="btn btn-success"><i class="lnr lnr-plus-circle"></i> Add Mobil</button>
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-12">
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
                                <th width="20%">Tools</th>
                            </tr>
                        </thead>
                        <tbody id="user-content">
                             
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Add Mobil Modal -->
        <div class="modal fade" id="add-mobil-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Mobil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="merk">Merk: </label>
                            <input type="text" id="merk" name="merk" class="form-control" placeholder="Merk">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Mobil: </label>
                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Mobil">
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal: </label>
                            <input type="text" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga: </label>
                            <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga">
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun: </label>
                            <input type="text" id="tahun" name="tahun" class="form-control" placeholder="Tahun">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi: </label>
                            <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="submit-mobil-button" name="submit" class="btn btn-success"><i class="lnr lnr-plus-circle"></i> Add</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Mobil Modal -->
        <div class="modal fade" id="edit-mobil-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Mobil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="edit-id" name="id_mobil" value="">
                        <div class="form-group">
                            <label for="merk">Merk : </label>
                            <input type="text" id="edit-merk" name="merk" class="form-control" placeholder="Merk">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama : </label>
                            <input type="text" id="edit-nama" name="nama" class="form-control" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal : </label>
                            <input type="text" id="edit-tanggal" name="tanggal" class="form-control" placeholder="Tanggal">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga : </label>
                            <input type="text" id="edit-harga" name="harga" class="form-control" placeholder="Harga">
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun : </label>
                            <input type="text" id="edit-tahun" name="tahun" class="form-control" placeholder="Tahun">
                        </div>
                        <div class="form-group">
                            <label for="Deskripsi">Deskripsi : </label>
                            <input type="text" id="edit-deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="edit-mobil-button" class="btn btn-warning"><i class="lnr lnr-pencil"></i> Edit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS -->
        <script src="assets/jquery/jquery-3.5.1.min.js"></script>
        <script src="assets/popper/popper.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.js"></script>

        <!-- JQuery Confirm -->
        <script src="assets/jquery-confirm/jquery-confirm.js"></script>

        <script>

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
                            
                            // Tools
                            var tools = $("<td></td>");
                            var edit_btn = $('<button id="edit-mobil-btn" class="btn btn-warning"><i class="lnr lnr-pencil"></i></button>');
                            var delete_btn = $('<button id="delete-mobil-btn" class="btn btn-danger"><i class="lnr lnr-trash"></i></button>');
                            
                            edit_btn.data('id_mobil', mhs['id_mobil']);
                            edit_btn.data('merk', mhs['merk']);
                            edit_btn.data('nama', mhs['nama']);
                            edit_btn.data('tanggal', mhs['tanggal']);
                            edit_btn.data('harga', mhs['harga']);
                            edit_btn.data('tahun', mhs['tahun']);
                            edit_btn.data('deskripsi', mhs['deskripsi']);

                            delete_btn.data('id_mobil', mhs['id_mobil']);

                            edit_btn.appendTo(tools);
                            tools.append(" ");
                            delete_btn.appendTo(tools);
                            tools.appendTo(row);

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

            $("#add-mobil-btn").click(function(){
                $("#add-mobil-modal").modal();
            });

            $("#submit-mobil-button").click(function(){
                var merk = $("#merk").val();
                var nama = $("#nama").val();
                var tanggal= $("#tanggal").val();
                var harga = $("#harga").val();
                var tahun = $("#tahun").val();
                var deskripsi = $("#deskripsi").val();
                $.ajax({
                    url: '/Proyek/services/user/add_mobil.php',
                    method: 'POST',
                    data: {
                        merk: merk,
                        nama: nama,
                        tanggal: tanggal,
                        harga: harga,
                        tahun: tahun,
                        deskripsi: deskripsi
                    },
                    success: function(data) {
                        $("#merk").val(' ');
                        $("#nama").val(' ');
                        $("#tanggal").val(' ');
                        $("#harga").val(' ');
                        $("#tahun").val(' ');
                        $("#deskripsi").val(' ');
                        $("#add-mobil-modal").modal('toggle');
                        load_data();
                        alert("Tambah mobil Success");
                    },
                    error: function($xhr, textStatus, errorThrown) {
                        alert($xhr.responseJSON['error']);
                    }
                });
            });

            $("#user-content").on("click", "[id='edit-mobil-btn']", function(){
                var id_mobil = $(this).data('id_mobil');
                var merk = $(this).data('merk');
                var nama = $(this).data('nama');
                var tanggal = $(this).data('tanggal');
                var harga = $(this).data('harga');
                var tahun = $(this).data('tahun');
                var deskripsi = $(this).data('deskripsi');
                
                $("#edit-id").val(id_mobil);
                $("#edit-merk").val(merk);
                $("#edit-nama").val(nama);
                $("#edit-tanggal").val(tanggal);
                $("#edit-harga").val(harga);
                $("#edit-tahun").val(tahun);
                $("#edit-deskripsi").val(deskripsi);
                $("#edit-mobil-modal").modal();
            });

            $("#edit-mobil-button").click(function(){
                var id_mobil = $("#edit-id").val();
                var merk = $("#edit-merk").val();
                var nama = $("#edit-nama").val();
                var tanggal = $("#edit-tanggal").val();
                var harga = $("#edit-harga").val();
                var tahun = $("#edit-tahun").val();
                var deskripsi = $("#edit-deskripsi").val();
                
                $.ajax({
                    url: '/Proyek/services/user/edit_user.php',
                    method: 'POST',
                    data: {
                        id_mobil: id_mobil,
                        merk: merk,
                        nama: nama,
                        tanggal: tanggal,
                        harga: harga,
                        tahun: tahun,
                        deskripsi: deskripsi
                    },
                    success: function(data) {
                        $("#edit-mobil-modal").modal('toggle');
                        load_data();
                        alert("Edit mobil Success");
                    },
                    error: function($xhr, textStatus, errorThrown) {
                        alert($xhr.responseJSON['error']);
                    }
                });
            });

            $("#user-content").on("click", "[id='delete-mobil-btn']", function(){
                var id_mobil = $(this).data('id_mobil');
                $.confirm({
                    title: 'Confirm!',
                    content: 'You cannot recover deleted data!',
                    buttons: {
                        confirm: {
                            text: 'Confirm',
                            btnClass: 'btn-success',
                            keys: ['enter'],
                            action: function(){
                                $.ajax({
                                    url: '/Proyek/services/user/delete_user.php',
                                    method: 'POST',
                                    data: {
                                        id_mobil: id_mobil
                                    },
                                    success: function(data) {
                                        load_data();
                                    },
                                    error: function($xhr, textStatus, errorThrown) {
                                        alert($xhr.responseJSON['error']);
                                    }
                                });
                            }
                        },
                        cancel: {
                            text: 'Cancel',
                            btnClass: 'btn-secondary',
                            keys: ['shift'],
                            action: function(){
                                // alert("Cancel");
                            }
                        }
                    }
                });
            });
        </script>
    </body>
</html>