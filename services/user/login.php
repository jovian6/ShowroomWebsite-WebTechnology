<?php 

include $_SERVER['DOCUMENT_ROOT']."/Proyek/database.php";

header("Content-Type: application/json");

session_start();
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $result = array(
//         "status" => 1,
//         "error" => "",
//         'redirect' => ""
//     );

//     if ($email == '' || $password == '') {
//         header("HTTP/1.1 400 Bad Request");
//         $result['status'] = 0;
//         $result['error'] = 'Email & Password Must Have Value!';
//     }

//     $sql = "SELECT * FROM customers WHERE email = ? AND password =  ?";
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute([$email, $password]);

//     $row_count = $stmt->rowCount();

//     if ($row_count >= 1) {
//         $result['redirect'] = '/Proyek/index.php';
//         $user = $stmt->fetch();
//         session_start();
//         $users = $mysqli->query("select * from customers")->fetch_all(MYSQLI_ASSOC);
//         foreach($users as $user){
//             if($user['email'] == $email){
//                 if($user['password'] == $password){
//                     $_SESSION['sekarang'] = $user;
//                     echo"berhasil";
//                 }
//             }
//         }
//     } else {
//         header("HTTP/1.1 400 Bad Request");
//         $result['status'] = 0;
//         $result['error'] = 'Wrong Email or Password';
//     }
//     echo json_encode($result);
// }

if($_REQUEST['action'] == 'login'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $sql = "SELECT * FROM customer WHERE email = ? AND password =  ?";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$email, $password]);
    // $cus = $stmt->fetchAll();

    $sql2 = "SELECT id_customer,nama FROM customer WHERE email = ? AND password =  ?";
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->execute([$email, $password]);
    $cus2 = $stmt2->fetchAll();

    // $_SESSION['sekarang'] = json_encode($cus);
    $_SESSION['profil'] = json_encode($cus2);
    // echo json_encode($cus);
    echo json_encode($cus2);
}