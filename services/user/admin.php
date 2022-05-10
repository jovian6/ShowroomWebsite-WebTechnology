<?php 

include $_SERVER['DOCUMENT_ROOT']."/Proyek/database.php";

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = array(
        "status" => 1,
        "error" => "",
        'redirect' => ""
    );

    if ($username == '' || $password == '') {
        header("HTTP/1.1 400 Bad Request");
        $result['status'] = 0;
        $result['error'] = 'Username & Password Must Have Value!';
    }

    $sql = "SELECT * FROM admin WHERE username = ? AND password =  ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username, $password]);

    $row_count = $stmt->rowCount();

    if ($row_count >= 1) {
        $result['redirect'] = '/Proyek/admin.php';
        $user = $stmt->fetch();
        session_start();
        $_SESSION['username'] = $user['username'];
        $_SESSION['password'] = $user['password'];
    } else {
        header("HTTP/1.1 400 Bad Request");
        $result['status'] = 0;
        $result['error'] = 'Wrong Username or Password';
    }

    echo json_encode($result);
}