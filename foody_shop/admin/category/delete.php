<?php
	$conn = @new mysqli("localhost","root","","Blog_test");

    if($conn->connect_error) {
        die("Kết nối thất bại ". $conn->connect_error);
    }

   	if (isset($_POST["delete_cate"])) {
		$category_id = $_POST["d_category_id"]; 
		$sqlDeleteCate = "DELETE FROM category WHERE category_id = '$category_id'";
		$conn->query($sqlDeleteCate);
		$conn->close();
		header("location: index.php");
   	}
?>