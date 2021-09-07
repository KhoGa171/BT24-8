<?php
require_once('../../Model/function.php');
if(isset($_GET['id'])){
    $stu = new funcStu();
    $stu_arr = $stu->getStudent($_GET['id']);
    $masv = $stu_arr[0]['masv'];
    $hoten = $stu_arr[0]['hoten'];
    $sodt = $stu_arr[0]['sodt'];
    $diachi = $stu_arr[0]['diachi'];
    if(isset($_POST['editStudent'])){
        $masv = addslashes($_POST['txtMaSV']);
        $hoten = addslashes($_POST['txtHoTen']);
        $sodt = addslashes($_POST['txtSoDT']);
        $diachi = addslashes($_POST['txtDiaChi']);
        if(empty($stu->getStudent($masv))){
            $message['masv'] = 'Không thể thay đổi mã sinh viên!';
        }
        if(!is_numeric($sodt)){
            $message['sodt'] = 'Nhập sai định dạng số điện thoại!';
        }
        if(empty($message['masv'])&&empty($message['sodt'])){
            $result = $stu->editStudent($masv, $hoten, $sodt, $diachi);
            if($result){
                echo '<script>alert("Cập nhật thành công!"); window.location="../../index.php";</script>';
            }
            else
                echo '<script>alert("Cập nhật không thành công!"); window.location="../../index.php";</script>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sửa sinh viên</title>
</head>
<body>
    <?php if (!empty($message['masv'])) echo '<script>alert("'.$message['masv'].'");</script>';?>
    <?php if (!empty($message['sodt'])) echo '<script>alert("'.$message['sodt'].'");</script>';?>
    <div class="container">
        <h4 class="text-center">SỬA SINH VIÊN</h4>
        <form action="" method="post" enctype="multipart/form">
            <div class="body">
                <div class="md-form mb-3">
                    <label>Mã sinh viên</label>
                    <input type="text" class="form-control validate" name="txtMaSV" required value="<?php echo $masv?>">
                </div>
                <div class="md-form mb-3">
                    <label>Họ và tên</label>
                    <input type="text" class="form-control validate" name="txtHoTen" required value="<?php echo $hoten?>">
                </div>

                <div class="md-form mb-3">
                    <label>Số điện thoại</label>
                    <input type="text" class="form-control validate" name="txtSoDT" required value="<?php echo $sodt?>">
                </div>
                <div class="mb-3">
                    <label>Địa chỉ</label>
                    <input type="text" class="form-control validate" name="txtDiaChi" required value="<?php echo $diachi?>">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <input class="btn btn-success mx-1" type="submit" name="editStudent" value="Sửa">
                <a class="btn btn-secondary" href="../../index.php">Hủy</a>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>