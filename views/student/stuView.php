<h4 class="text-center">QUẢN LÝ SINH VIÊN</h4>
<a class="btn btn-success mb-2" href="<?php echo $url_base ?>stuController/viewAddStu">Thêm sinh viên</a>
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
            if (isset($data["students"])) {
                foreach ($data["students"] as $student) : {
                        echo '
                                <tr>
                                    <td>' . $index++ . '</td>
                                    <td>' . $student['masv'] . '</td>
                                    <td>' . $student['hoten'] . '</td>
                                    <td>' . $student['sodt'] . '</td>
                                    <td>' . $student['diachi'] . '</td>
                                    <td><a class="btn btn-warning" href="' . $url_base . 'stuController/showEdit&id=' . $student['masv'] . '">Edit</a></td>
                                    <td><a class="btn btn-danger" href="' . $url_base . 'stuController/deleteStudent&id=' . $student['masv'] . '" onclick="return confirm(\'Bạn có thực sự muốn xóa\');">Delete</a></td>
                                </tr>';
                    }
                endforeach;
            }
            ?>
        </tbody>
    </table>
</div>