<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบข้อมูลภาพยนต์</title>
</head>
<body>
<?php
    require_once("dbcon.php");
    session_start();
    if(isset($_POST['login'])) {
        $sql = "SELECT * FROM users WHERE m_user = '{$_POST['m_user']}' AND m_pin = '{$_POST['m_pin']}'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["m_user"] = $row['m_user'];
        } else {
            echo "<p>รหัสผิด</p>";
        }
    }
    if(isset($_POST['logout'])) {
        session_unset();
    }
    if(isset($_SESSION['m_user'])) {
        require_once("tables.php");
    } else {
        require_once("login.php");
    }
?>
</body>
</html>