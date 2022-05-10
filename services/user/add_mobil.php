<?php 

include $_SERVER['DOCUMENT_ROOT']."/Proyek/database.php";

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $result = array(
        "status" => 1,
        "error" => ""
    );

    $merk = $_POST['merk'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $harga = $_POST['harga'];
    $tahun = $_POST['tahun'];
    $deskripsi = $_POST['deskripsi'];

    if ($merk == '' || $nama == '' || $tanggal == '' || $harga == '' || $tahun == '' || $deskripsi == '') {
        header("HTTP/1.1 400 Bad Request");
        $result['status'] = 0;
        $result['error'] = 'Must Have Value!';
    } else {
        $sql = "INSERT INTO mobil VALUES(default, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$merk, $nama, $tanggal, $harga, $tahun, $deskripsi]);

        $row_count = $stmt->rowCount();

        if ($row_count >= 1) {
            $result['redirect'] = '/Proyek/admin.php';
            $user = $stmt->fetch();
            session_start();
        } else {
            header("HTTP/1.1 400 Bad Request");
            $result['status'] = 0;
            $result['error'] = 'Wrong Email or Password';
        }
    }

    echo json_encode($result);

} else {
    header("HTTP/1.1 400 Bad Request");
    $error = array(
        'error' => 'Method not Allowed'
    );

    echo json_encode($error);
}