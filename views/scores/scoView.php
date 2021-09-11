<h4 class="text-center">QUẢN LÝ ĐIỂM THI</h4>
<a class="btn btn-success mb-2" href="?action=showScoAdd">Thêm điểm thi</a>
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
            foreach ($scores as $score) {
                echo '
                <tr>
                    <td>' . $index++ . '</td>
                    <td>' . $score['masv'] . '</td>
                    <td>' . $score['mamh'] . '</td>
                    <td>' . $score['diemthi'] . '</td>
                    <td>' . $score['lanthi'] . '</td>
                    <td><a class="btn btn-warning" href="?action=showScoEdit&id='.$score['id'].'">Edit</a></td>
                    <td><a class="btn btn-danger" href="?action=scoDelete&id='.$score['id'].'" onclick="return confirm(\'Bạn có thực sự muốn xóa\');">Delete</a></td>
                </tr>';
            }
            ?>
        </tbody>
    </table>
</div>