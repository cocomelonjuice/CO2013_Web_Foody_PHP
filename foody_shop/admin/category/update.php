<?php
ob_start();
    $conn = @new mysqli("localhost","root","","Blog_test");

if($conn->connect_error) {
    die("Kết nối thất bại ". $conn->connect_error);
}

if(isset($_POST['update_cate'])) {
    $category_id = $_POST['u_category_id'];
    $category_name = $_POST['u_category_name'];
    $sqlUpdateCate = "UPDATE category SET category_name = '$category_name' WHERE category_id = '$category_id'";
    $conn->query($sqlUpdateCate);
    $conn->close();
    header("location: index.php");
}
?>