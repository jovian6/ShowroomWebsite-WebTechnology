<?php 

include $_SERVER['DOCUMENT_ROOT']."/Proyek/database.php";

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $result = array(
        "status" => 1,
        "error" => ""
    );

    $id_mobil = $_POST['id_mobil'];
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
        $sql = "UPDATE mobil SET merk = ?, nama = ?, tanggal = ?, harga = ?, tahun = ?, deskripsi = ? WHERE id_mobil = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$merk, $nama, $tanggal, $harga, $tahun, $deskripsi, $id_mobil]);
    }

    echo json_encode($result);
} else {
    header("HTTP/1.1 400 Bad Request");
    $error = array(
        'error' => 'Method not Allowed'
    );

    echo json_encode($error);
}