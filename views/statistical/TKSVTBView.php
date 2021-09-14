<h5 class="mb-2">Danh sách sinh viên</h5>
        <a class="btn btn-secondary mb-2" href="<?php echo $url_base?>stuController/stuList">Quay lại</a>
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
                    if (isset($data["statisticals"])) {
                        foreach ($data["statisticals"] as $statistical) {
                            $i=0;
                            if($statistical[$i]['diemtb']){
                                echo '
                                    <tr>
                                        <td>' . $index++ . '</td>
                                        <td>' . $statistical[$i][0] . '</td>
                                        <td>' . $statistical[$i][1] . '</td>
                                        <td>' . $statistical[$i][2] . '</td>
                                        <td>' . $statistical[$i][3] . '</td>
                                    </tr>';
                                }
                            $i++;
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>