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
    $waktu = $_POST['waktu'];

    if ($id_customer == '' || $id_mobil == '' || $tanggal == '' || $waktu == '') {
        header("HTTP/1.1 400 Bad Request");
        $result['status'] = 0;
        $result['error'] = 'Must Have Value!';
    } else {
        $sql = "INSERT INTO test_drive VALUES(default, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$tanggal, $waktu, $id_customer, $id_mobil]);

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