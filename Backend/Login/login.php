<?php
include '/xampp/htdocs/Recyclemart/Database/conn.php';

$conn = connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["sign-up-username"]);
    $password = trim($_POST["sign-up-password"]);
}

$sql = "SELECT username, password FROM user_account WHERE username=? AND password=?";
if ($stmt_check = $conn->prepare($sql)){
    $stmt_check->bind_param("ss", $check_username, $check_password);
    $check_username = $username;
    $check_password = $password;
    $stmt_check->execute();
    $stmt_check->store_result();
    if ($stmt_check->num_rows === 1) {
        echo "pass";
    }
    $stmt_check->close();
}

$conn->close();
?>
