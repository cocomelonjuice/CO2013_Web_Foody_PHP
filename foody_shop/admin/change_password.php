<?php
session_start();
ob_start();
$conn = @new mysqli("localhost", "root", "", "blog_test");
if ($conn->error) {
    die("Có lỗi xảy ra ". $conn->error);
}

if (isset($_POST["update_pwd_ad"])) {
    $new_pwd_ad = $_POST["pwd_ad"];
    $old_pwd_ad = $_SESSION["pwd_ad"];
    if ($new_pwd_ad == $old_pwd_ad) {
        $tb = "Mật khẩu này đã tồn tại, vui lòng nhập mật khẩu khác";
        setcookie("thong_bao", $tb, time() + 5);
        header('location: index.php');
    } else {
        $email_ad = $_SESSION["email_ad"];
        $sqlFindAdmin = "SELECT admin_id FROM admin 
                        WHERE email = '$email_ad' AND password = '$old_pwd_ad'";
        $result_admin_id = $conn->query($sqlFindAdmin);
        while ($row = $result_admin_id->fetch_assoc()) {
            // $admin_id = $row["admin_id"];
            $admin_id = $row["admin_id"];
        }
        $sqlChangePwd = "UPDATE admin SET password = '$new_pwd_ad' WHERE admin_id = '$admin_id'";
        $conn->query($sqlChangePwd);
        echo $sqlChangePwd;
        $tb = "Đổi thành công, Vui lòng đang nhập lại";
        setcookie("thong_bao", $tb, time() + 5);
        $conn->close();
        header('location: logout.php');
    }
}

?>