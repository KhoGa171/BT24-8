<?php
require_once('../../Model/function.php');
if(!empty($_POST['addScores'])){
    $masv = addslashes($_POST['txtMaSV']);
    $mamh = addslashes($_POST['txtMaMH']);
    $diem = addslashes($_POST['txtDiem']);
    $lanthi = addslashes($_POST['txtLanThi']);
    $sco = new funcScores();
    $stu = new funcStu();
    $sub = new funcSub();
    if(empty($stu->getStudent($masv))){
        $message['masv'] = 'Không tồn tại sinh viên này!';
    }
    if(empty($sub->getSubject($mamh))){
        $message['mamh'] = 'Không tồn tại môn học này!';
    }
    // if(empty($sco->getScoresMH($mamh))){
    //     $message['mamh2'] = 'Không tồn tại môn học này!';
    // }
    if($diem <= 0 && $diem >=10){
        $message['diem'] = 'Lỗi! Điểm từ 0 đến 10!';
    }
    if($lanthi <= 0){
        $message['lanthi'] = 'Số lần thi phải lớn hơn 0!';
    }
    if(empty($message['masv'])&&empty($message['mamh'])&&empty($message['diem'])&&empty($message['lanthi'])){
        $result = $sco->addScores($masv, $mamh, $diem, $lanthi);
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
    <title>Thêm điểm</title>
</head>

<body>
    <div class="container">
        <?php if (!empty($message['masv'])) echo '<script>alert("'.$message['masv'].'");</script>';?>
        <?php if (!empty($message['mamh'])) echo '<script>alert("'.$message['mamh'].'");</script>';?>
        <?php if (!empty($message['diem'])) echo '<script>alert("'.$message['diem'].'");</script>';?>
        <?php if (!empty($message['lanthi'])) echo '<script>alert("'.$message['lanthi'].'");</script>';?>
        <h4 class="text-center">THÊM ĐIỂM</h4>
        <form action="" method="post" enctype="multipart/form">
            <div class="body">
                <div class="md-form mb-3">
                    <label>Mã sinh viên</label>
                    <input type="text" class="form-control validate" name="txtMaSV" required>
                </div>
                <div class="md-form mb-3">
                    <label>Mã môn học</label>
                    <input type="text" class="form-control validate" name="txtMaMH" required>
                </div>

                <div class="md-form mb-3">
                    <label>Điểm thi</label>
                    <input type="number" class="form-control validate" name="txtDiem" required>
                </div>
                <div class="mb-3">
                    <label>Lần thi</label>
                    <input type="number" class="form-control validate" name="txtLanThi" required>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <input class="btn btn-success mx-1" type="submit" name="addScores" value="Thêm">
                <a class="btn btn-secondary" href="../../index.php">Hủy</a>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>