<?php
require_once('../../Model/function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h5 class="mb-2">Danh sách sinh viên</h5>
        <a class="btn btn-secondary mb-2" href="../../index.php">Quay lại</a>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã sinh viên</th>
                        <th>Họ tên</th>
                        <th>Tên môn học</th>
                        <th>Điểm TB</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $index = 1;
                    $row = new statistical();
                    //$mamh = new funcScores();
                    $mamh = new funcSub();
                    $masv = new funcStu();
                    $stuList = $masv->getAllStudent();
                    //$subjectList = $mamh->getAllScores();
                    $subjectList = $mamh->getAllSubject();
                    $studentList = [];
                    //var_dump($subjectList);
                    foreach ($subjectList as $subject) {
                        foreach ($stuList as $student){
                            $studentList[] = $row->TKSVTB($student['masv'],$subject['mamh']);   
                        }
                    }
                    
                    usort($studentList, function ($a, $b) { 
                            $n = count($a);
                            for($c=0; $c < $n; $c++){
                                return $b[$c]['diemtb'] <=> $a[$c]['diemtb']; 
                            }
                    });
                    foreach ($studentList as $item) {
                        $i=0;
                        if($item[$i]['diemtb']){
                            echo '
                                <tr>
                                    <td>' . $index++ . '</td>
                                    <td>' . $item[$i][0] . '</td>
                                    <td>' . $item[$i][1] . '</td>
                                    <td>' . $item[$i][2] . '</td>
                                    <td>' . $item[$i][3] . '</td>
                                </tr>';
                            }
                        $i++;
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