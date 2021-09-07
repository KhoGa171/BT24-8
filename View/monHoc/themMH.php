<?php
require_once('../../Model/function.php');
if (!empty($_POST['addSubject'])) {
    $mamh = addslashes($_POST['txtMaMH']);
    $tenmh = addslashes($_POST['txtTenMH']);
    $sotc = addslashes($_POST['txtSoTC']);
    $sub = new funcSub();
    if (!empty($sub->getSubject($mamh))) {
        $message['mamh'] = 'Đã tồn tại môn học này!';
    }
    if($sotc <= 0){
        $message['sotc'] = 'Số tín chỉ phải lớn hơn 0!';
    }
    if (empty($message['mamh'])&&empty($message['sotc'])) {
        $result = $sub->addSubject($mamh, $tenmh, $sotc);
        if ($result) {
            echo '<script>alert("Thêm thành công!"); window.location="../../index.php";</script>';
        } else
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
    <title>Thêm môn học</title>
</head>

<body>
    <div class="container">
        <?php if (!empty($message['mamh'])) echo '<script>alert("' . $message['mamh'] . '");</script>'; ?>
        <?php if (!empty($message['sotc'])) echo '<script>alert("' . $message['sotc'] . '");</script>'; ?>
        <h4 class="text-center">THÊM MÔN HỌC</h4>
        <form action="" method="post" enctype="multipart/form">
            <div class="body">
                <div class="md-form mb-3">
                    <label>Mã môn học</label>
                    <input type="text" class="form-control validate" name="txtMaMH" required>
                </div>
                <div class="md-form mb-3">
                    <label>Tên môn học</label>
                    <input type="text" class="form-control validate" name="txtTenMH" required>
                </div>

                <div class="md-form mb-3">
                    <label>Số tín chỉ</label>
                    <input type="number" class="form-control validate" name="txtSoTC" required>
                </div>

            </div>
            <div class="d-flex justify-content-center">
                <input class="btn btn-success mx-1" type="submit" name="addSubject" value="Thêm">
                <a class="btn btn-secondary" href="../../index.php">Hủy</a>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>