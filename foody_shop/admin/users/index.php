<?php
session_start();
if (!isset($_SESSION["email_ad"])) {
    header('location: login.php');
}

$conn = @new mysqli("localhost", "root", "", "Blog_test");
if ($conn->error) {
    die("Có lỗi xảy ra ". $conn->error);
}

$sqlShowUser = "SELECT user_id, email, name, phone, address FROM user ";
$user = $conn->query($sqlShowUser);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./includes/css/base.css">
    <link rel="stylesheet" href="./includes/css/home.css">
</head>
<body>
<?php
    require '../includes/header.php';
    require '../includes/navbar.php';
    require '../includes/modal_login.php';
?>

#index CRUD users
<?php

?>
<div class="container mt-5 mb-3">
  <div class="row">
    <div class="col-xl-2 col-md-6 col-sm-12">
      <a href="#" class="btn btn-primary">Thêm người dùng</a>
    </div>
  </div>
</div>
<div class="container">
    <table class="table table-striped">
        <thead class="table-warning">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>    
                <th scope="col">Email</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col" >Chức năng</th>
            </tr>
        </thead>
      <?php
      $i = 1;
        if ($user->num_rows>0) {
          while ($row = $user->fetch_assoc()) {
      ?>
        <tbody>
            <tr>
                <td scope="row"><?php echo $i; ?></td>
                <td id="name<?php echo $row["user_id"]?>" ><?php echo $row["name"]?></td>
                <td id="email<?php echo $row["user_id"]?>" ><?php echo $row["email"]?></td>
                <td id="phone<?php echo $row["user_id"]?>" ><?php echo $row["phone"]?></td>
                <td id="address<?php echo $row["user_id"]?>" ><?php echo $row["address"]?></td>
                <td>
                    <a class="text-decoration-none btn btn-success text-light" href="./update.php"><i class="fa-light fa-pen-to-square"></i></a>
                    <button href="#" class="delete btn btn-danger text-light" value='<?php echo $row["user_id"]; ?>' data-bs-toggle="modal" data-bs-target="#xoa"><i class="fa-light fa-trash-can"></i></button>
                    <!-- <a class="text-decoration-none btn btn-danger text-light" href="./delete.php"><i class="fa-light fa-trash-can"></i></a> -->
                </td>
            </tr>
        </tbody>
      <?php
            $i++;
          };
        }
      ?>
    </table>
</div>

<?php
    require '../includes/footer.php';
?>
<!-- Modal - xoa -->
<div class="modal fade" id="xoa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-warning" id="exampleModalLabel">Vui lòng xác nhận xóa người dùng ??</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="delete.php" method="post"  enctype="multipart/form-data">
            <input type="hidden" id="d_user_id" name="d_user_id" value="">
            <table class="table table-striped">
              <tr>
                  <td>Tên người dùng:</td>
                  <td><span id="d_user_name"></span></td>
              </tr>
              <tr>
                  <td>Email:</td>
                  <td><span id="d_user_email"></span></td>
              </tr> 
              <tr>
                  <td>Số điện thoại: <br></td>
                  <td><span id="d_user_phone"></span></td>
              </tr> 
              <tr>
                  <td>Địa chỉ: <br></td>
                  <td><span id="d_user_address"></span></td>
              </tr>  
          </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="delete_user">Delete</button>
        </div>
        </form>
        </div>
    </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"> </script>
<script>
    $('.delete').click(function() {
            var user_id = $(this).val();
            var name = $("#name" + user_id).text();
            var email = $("#email" + user_id).text();
            var phone = $("#phone" + user_id).text();
            var address = $("#address" + user_id).text();
            
            $('#d_user_id').val(user_id);
            $('#d_user_name').text(name);
            $('#d_user_email').text(email);
            $('#d_user_phone').text(phone);
            $('#d_user_address').text(address);
        });
</script>
</body>
</html>