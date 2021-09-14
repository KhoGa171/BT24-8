<h4 class="text-center">THÊM MÔN HỌC</h4>
<form action="<?php echo $url_base?>subController/addSubject" method="post" enctype="multipart/form">
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
        <a class="btn btn-secondary" href="<?php echo $url_base?>subController/subList">Hủy</a>
    </div>
</form>