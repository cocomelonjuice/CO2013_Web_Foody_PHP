<?php
session_start();
if (!isset($_SESSION["email_ad"])) {
    header('location: login.php');
}

$conn = @new mysqli("localhost", "root", "", "Blog_test");
if ($conn->error) {
    die("Có lỗi xảy ra ". $conn->error);
}

$sqlShowCate = "SELECT * FROM category";
$user = $conn->query($sqlShowCate);
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

#index CRUD cagtegory 
<div class="container">
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
      <?php
      if (isset($_COOKIE["thong_bao"])) {
        $tb = $_COOKIE["thong_bao"];
      ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $tb ?>
        </div>
      <?php
        }
      ?>
    </div>
    <div class="col-3"></div>
  </div>
</div>
<!-- table show category -->
<div class="container mt-5 mb-3">
  <div class="row">
    <div class="col-xl-2 col-md-6 col-sm-12">
      <button type="button" class="btn btn-primary" data-bs-toggle='modal' data-bs-target='#add_new_cate'>Thêm danh mục</button>
    </div>
  </div>
</div>
<div class="container">
    <table class="table table-striped">
        <thead class="table-warning">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">#Mã danh mục </th>    
                <th scope="col">Tên danh mục</th>
                <th scope="col">Chức năng</th>
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
                <td id="<?php echo $row["category_id"]?>" ><?php echo $row["category_id"]?></td>
                <td id="name<?php echo $row["category_id"]?>" ><?php echo $row["category_name"]?></td>
                <td>
					<button href='#' class="edit btn btn-success text-light" value='<?php echo $row["category_id"]; ?>' data-bs-toggle="modal" data-bs-target="#capnhat"><i class="fa-light fa-pen-to-square"></i></button>
                    <button href="#" class="delete btn btn-danger text-light" value='<?php echo $row["category_id"]; ?>' data-bs-toggle="modal" data-bs-target="#xoa"><i class="fa-light fa-trash-can"></i></button>
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
<!-- Modal them moi thong tin -->
<div class="modal fade" id="add_new_cate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm Loại Sữa Mới</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="add.php" method="post"  enctype="multipart/form-data">
          <table class="table">
            <tr>
                <td>#Mã danh mục:</td>
                <td><input type="text" class="form-control" name="a_cate_id" ></td>
            </tr>
            <tr>
                <td>Tên danh mục:</td>
                <td><input type="text" class="form-control" name="a_cate_name" ></td>
            </tr>    
          </table>   
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Đóng </button>
          <button type="submit" class="btn btn-primary" name="add_cate"> Thêm mới </button>
        </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal - cap nhat thong tin -->
<div class="modal fade" id="capnhat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cập nhật danh mục</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="update.php" method="post"  enctype="multipart/form-data">
				<table class="table">
					<tr>
						<td>#Mã danh mục:</td>
						<td><input type="text" class="form-control" id="u_category_id" name="u_category_id" value="" readonly></td>
					</tr>
					<tr>
						<td>Tên danh mục:</td>
						<td><input type="text" class="form-control" id="u_category_name" name="u_category_name" value="" ></td>
					</tr>    
				</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary" name="update_cate">Cập Nhật</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal - xoa -->
<div class="modal fade" id="xoa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-warning" id="exampleModalLabel">Vui lòng xác nhận xóa danh mục ??</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <form action="delete.php" method="post"  enctype="multipart/form-data">
                    <input type="hidden" id="d_category_id" name="d_category_id" value="">
                    <table class="table table-striped">
                    <tr>
                        <td>#Mã danh mục:</td>
                        <td><span class="user-select-none" id="d_category_id_text"></span></td>
                    </tr>
                    <tr>
                        <td>Tên danh mục:</td>
                        <td><span class="user-select-none" id="d_category_name"></span></td>
                    </tr>  
                </table>
                    
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="delete_cate">Delete</button>
        </div>
        </form>
        </div>
    </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"> </script>
<script>
	$('.edit').click(function() {
		var category_id = $(this).val();
		var name = $("#name" + category_id).text();

		$('#u_category_id').val(category_id);
		$('#u_category_name').val(name);
    });

    $('.delete').click(function() {
		var category_id = $(this).val();
		var name = $("#name" + category_id).text();
		
		$('#d_category_id').val(category_id);
		$('#d_category_id_text').text(category_id);
		$('#d_category_name').text(name);
    });
</script>
</body>
</html>