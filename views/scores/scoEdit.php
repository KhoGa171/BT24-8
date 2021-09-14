<h4 class="text-center">SỬA ĐIỂM</h4>
<form action="<?php echo $url_base?>scoController/editScores&id=<?php echo $data['sco_arr'][0]['id']?>" method="post" enctype="multipart/form">
    <div class="body">
        <div class="md-form mb-3">
            <label>Mã sinh viên</label>
            <input type="text" class="form-control validate" name="txtMaSV" required value="<?php echo $data['sco_arr'][0]['masv'] ?>">
        </div>
        <div class="md-form mb-3">
            <label>Mã môn học</label>
            <input type="text" class="form-control validate" name="txtMaMH" required value="<?php echo $data['sco_arr'][0]['mamh'] ?>">
        </div>

        <div class="md-form mb-3">
            <label>Điểm thi</label>
            <input type="text" class="form-control validate" name="txtDiem" required value="<?php echo $data['sco_arr'][0]['diemthi'] ?>">
        </div>
        <div class="mb-3">
            <label>Lần thi</label>
            <input type="text" class="form-control validate" name="txtLanThi" required value="<?php echo $data['sco_arr'][0]['lanthi'] ?>">
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <input class="btn btn-success mx-1" type="submit" name="editScores" value="Sửa">
        <a class="btn btn-secondary" href="<?php echo $url_base?>scoController/scoList">Hủy</a>
    </div>
</form>