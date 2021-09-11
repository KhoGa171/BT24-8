<h5 class="mb-2">Danh sách sinh viên</h5>
<a class="btn btn-secondary" href="?action=stuList">Quay lại</a>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã sv</th>
                <th>Họ tên</th>
                <th>Tên môn học</th>
                <th>Điểm</th>
                <th>Lần thi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $index = 1;
            foreach ($statisticals as $statistical) {
                echo '
                            <tr>
                                <td>' . $index++ . '</td>
                                <td>' . $statistical[0] . '</td>
                                <td>' . $statistical[1] . '</td>
                                <td>' . $statistical[2] . '</td>
                                <td>' . $statistical[3] . '</td>
                                <td>' . $statistical[4] . '</td>
                            </tr>';
            }
            ?>
        </tbody>
    </table>
</div>