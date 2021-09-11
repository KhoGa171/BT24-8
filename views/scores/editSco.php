<h4 class="text-center">SỬA ĐIỂM</h4>
<form action="?action=scoEdit&id=<?php echo $id?>" method="post" enctype="multipart/form">
    <div class="body">
        <div class="md-form mb-3">
            <label>Mã sinh viên</label>
            <input type="text" class="form-control validate" name="txtMaSV" required value="<?php echo $masv ?>">
        </div>
        <div class="md-form mb-3">
            <label>Mã môn học</label>
            <input type="text" class="form-control validate" name="txtMaMH" required value="<?php echo $mamh ?>">
        </div>

        <div class="md-form mb-3">
            <label>Điểm thi</label>
            <input type="text" class="form-control validate" name="txtDiem" required value="<?php echo $diem ?>">
        </div>
        <div class="mb-3">
            <label>Lần thi</label>
            <input type="text" class="form-control validate" name="txtLanThi" required value="<?php echo $lanthi ?>">
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <input class="btn btn-success mx-1" type="submit" name="editScores" value="Sửa">
        <a class="btn btn-secondary" href="?action=scoList">Hủy</a>
    </div>
</form>