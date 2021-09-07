<?php
require_once('../../Model/function.php');
if(!empty($_POST['addStudent'])){
    $data['masv'] = addslashes($_POST['txtMaSV']);
    $data['hoten'] = addslashes($_POST['txtHoTen']);
    $data['sodt'] = addslashes($_POST['txtSoDT']);
    $data['diachi'] = addslashes($_POST['txtDiaChi']);
    $stu = new funcStu();
    if(!empty($stu->getStudent($data['masv']))){
        $message['masv'] = 'Đã tồn tại sinh viên này!';
    }
    if(!is_numeric($data['sodt'])){
        $message['sodt'] = 'Nhập sai định dạng số điện thoại!';
    }
    if(!$message){
        $result = $stu->addStudent($data['masv'], $data['hoten'], $data['sodt'], $data['diachi']);
        if($result){
            echo '<script>alert("Thêm thành công!"); window.location="../../index.php";</script>';
        }
        else
            echo '<script>alert("Thêm không thành công!"); window.location="../../index.php";</script>';
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
    <title>Thêm sinh viên</title>
</head>

<body>
    <div class="container">
        <?php if (!empty($message['masv'])) echo '<script>alert("'.$message['masv'].'");</script>';?>
        <?php if (!empty($message['sodt'])) echo '<script>alert("'.$message['sodt'].'");</script>';?>
        <h4 class="text-center">THÊM SINH VIÊN</h4>
        <form action="" method="post" enctype="multipart/form">
            <div class="body">
                <div class="md-form mb-3">
                    <label>Mã sinh viên</label>
                    <input type="text" class="form-control validate" name="txtMaSV" required>
                </div>
                <div class="md-form mb-3">
                    <label>Họ và tên</label>
                    <input type="text" class="form-control validate" name="txtHoTen" required>
                </div>

                <div class="md-form mb-3">
                    <label>Số điện thoại</label>
                    <input type="text" class="form-control validate" name="txtSoDT" required>
                </div>
                <div class="mb-3">
                    <label>Địa chỉ</label>
                    <input type="text" class="form-control validate" name="txtDiaChi" required>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <input class="btn btn-success mx-1" type="submit" name="addStudent" value="Thêm">
                <a class="btn btn-secondary" href="../../index.php">Hủy</a>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>