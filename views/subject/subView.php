<h4 class="text-center">QUẢN LÝ MÔN HỌC</h4>
<a class="btn btn-success mb-2" href="?action=showSubAdd">Thêm môn học</a>
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
            foreach ($subjects as $subject) {
                echo '
                <tr>
                    <td>' . $index++ . '</td>
                    <td>' . $subject['mamh'] . '</td>
                    <td>' . $subject['tenmh'] . '</td>
                    <td>' . $subject['sotc'] . '</td>
                    <td><a class="btn btn-warning" href="?action=showSubEdit&id='.$subject['mamh'].'">Edit</a></td>
                    <td><a class="btn btn-danger" href="?action=subDelete&id='.$subject['mamh'].'" onclick="return confirm(\'Bạn có thực sự muốn xóa\');">Delete</a></td>
                </tr>';
            }
            ?>
        </tbody>
    </table>
</div>