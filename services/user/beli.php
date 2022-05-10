<?php 

include $_SERVER['DOCUMENT_ROOT']."/Proyek/database.php";

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $result = array(
        "status" => 1,
        "error" => ""
    );

    $id_customer = $_POST['id_customer'];
    $id_mobil = $_POST['id_mobil'];
    $tanggal = $_POST['tanggal'];
    $dp = $_POST['dp'];
    $tenor = $_POST['tenor'];
    $metode_pembayaran = $_POST['metode_pembayaran'];

    if ($id_customer == '' || $id_mobil == '' || $tanggal == ''|| $dp == ''|| $tenor == ''|| $metode_pembayaran == '') {
        header("HTTP/1.1 400 Bad Request");
        $result['status'] = 0;
        $result['error'] = 'Must Have Value!';
    } else {
        $sql = "INSERT INTO transaksi VALUES(default, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$tanggal, $dp, $tenor, $metode_pembayaran, $id_customer, $id_mobil]);

        $row_count = $stmt->rowCount();

        if ($row_count >= 1) {
            $result['redirect'] = '/Proyek/index.php';
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