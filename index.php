<?php
require_once('./Model/function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Quản lý sinh viên</title>
</head>

<body>
    <div class="container">
        <h4 class="text-center">QUẢN LÝ SINH VIÊN</h4>
        <div class="d-flex justify-content-between">
            <a class="btn btn-primary mb-2" href="./View/thongKe/TKSVTL.php">Thống kê sinh viên đã thi lại</a>
            <a class="btn btn-primary mb-2" href="./View/thongKe/TKSVG.php">Thống kê sinh viên trên 8 điểm</a>
            <a class="btn btn-primary mb-2" href="./View/thongKe/TKSVY.php">Thống kê sinh viên dưới 5 điểm</a>
            <a class="btn btn-primary mb-2" href="./View/thongKe/TKSVTB.php">Thống kê điểm TB sinh viên</a>
        </div>
        <a class="btn btn-success mb-2" href="./View/sinhVien/themSV.php">Thêm sinh viên</a>
        <h5 class="mb-2">Danh sách sinh viên</h5>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã sv</th>
                        <th>Họ tên</th>
                        <th>Số ĐT</th>
                        <th>Địa chỉ</th>
                        <th width="60px"></th>
                        <th width="60px"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $index = 1;
                    $row = new funcStu();
                    $studentList = $row->getAllStudent();
                    foreach ($studentList as $item) {
                        echo '
                        <tr>
                            <td>'.$index++.'</td>
                            <td>'.$item[0].'</td>
                            <td>'.$item[1].'</td>
                            <td>'.$item[2].'</td>
                            <td>'.$item[3].'</td>
                            <td><a class="btn btn-warning" href="./View/sinhVien/suaSV.php?id='.$item['masv'].'">Edit</a></td>
                            <td><a class="btn btn-danger" href="./View/sinhVien/xoaSV.php?id='.$item['masv'].'" onclick="return confirm(\'Bạn có thực sự muốn xóa\');">Delete</a></td>
                        </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-success mb-2" href="./View/monHoc/themMH.php">Thêm môn học</a>
        <h5 class="mb-2">Danh sách môn học</h5>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã môn học</th>
                        <th>Tên môn học</th>
                        <th>Số tín chỉ</th>
                        <th width="60px"></th>
                        <th width="60px"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $index = 1;
                    $row = new funcSub();
                    $subjectList = $row->getAllSubject();
                    foreach ($subjectList as $item) {
                        echo '
                        <tr>
                            <td>' . $index++ . '</td>
                            <td>' . $item[0] . '</td>
                            <td>' . $item[1] . '</td>
                            <td>' . $item[2] . '</td>
                            <td><a class="btn btn-warning" href="./View/monHoc/suaMH.php?id='.$item['mamh'].'">Edit</a></td>
                            <td><a class="btn btn-danger" href="./View/monHoc/xoaMH.php?id='.$item['mamh'].'" onclick="return confirm(\'Bạn có thực sự muốn xóa\');">Delete</a></td>
                        </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-success mb-2" href="./View/diemThi/themDiem.php">Thêm điểm thi</a>
        <h5 class="mb-2">Điểm thi</h5>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã sv</th>
                        <th>Mã môn học</th>
                        <th>Điểm thi</th>
                        <th>Lần thi</th>
                        <th width="60px"></th>
                        <th width="60px"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $index = 1;
                    $row = new funcScores();
                    $scoresList = $row->getAllScores();
                    foreach ($scoresList as $item) {
                        echo '
                        <tr>
                            <td>' . $index++ . '</td>
                            <td>' . $item[1] . '</td>
                            <td>' . $item[2] . '</td>
                            <td>' . $item[3] . '</td>
                            <td>' . $item[4] . '</td>
                            <td><a class="btn btn-warning" href="./View/diemThi/suaDiem.php?id='.$item['id'].'">Edit</a></td>
                            <td><a class="btn btn-danger" href="./View/diemThi/xoaDiem.php?id='.$item['id'].'" onclick="return confirm(\'Bạn có thực sự muốn xóa\');">Delete</a></td>
                        </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>