<?php
	$conn = @new mysqli("localhost","root","","Blog_test");

    if($conn->connect_error) {
        die("Kết nối thất bại ". $conn->connect_error);
    }

   	if (isset($_POST["delete_user"])) {
		$user_id = $_POST["d_user_id"];
		$sqlDeleteUser = "DELETE FROM user where user_id='$user_id'";
		$conn->query($sqlDeleteUser);
		$conn->close();
		header("location: index.php");
   	}
?>