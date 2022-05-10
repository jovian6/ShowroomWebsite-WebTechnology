<?php 

include $_SERVER['DOCUMENT_ROOT']."/Proyek/database.php";

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $result = array(
        "status" => 1,
        "error" => ""
    );

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($nama == '' || $alamat == '' || $telp == '' || $email == '' || $password == '') {
        header("HTTP/1.1 400 Bad Request");
        $result['status'] = 0;
        $result['error'] = 'NRP & Name Must Have Value!';
    } else {
        $sql = "INSERT INTO customer VALUES(default, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nama, $alamat, $telp, $email, $password]);

        $row_count = $stmt->rowCount();

        if ($row_count >= 1) {
            $result['redirect'] = '/Proyek';
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