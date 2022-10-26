<?php
 session_start();
 ob_start();
  $conn = @new mysqli("localhost","root","","Blog_test");

  if(isset($_POST['add_cate'])) {
    $category_id = $_POST['a_cate_id'];
    $category_name = $_POST['a_cate_name'];
    
    $sqlCheck = "SELECT * FROM category WHERE category_id = '$category_id'";
    $kq = $conn->query($sqlCheck);
    if ($kq->num_rows > 0) {
      $tb = "Mã danh mục đã tồn tại";
      setcookie("thong_bao", $tb, time() + 5);
      $conn->close();
      header('location: index.php');
    }

    $sqlAdd_Cate = "INSERT INTO category VALUES('$category_id', '$category_name')";
    $conn->query($sqlAdd_Cate);
    $conn->close();
    header("location: index.php");
  }  
  ?>