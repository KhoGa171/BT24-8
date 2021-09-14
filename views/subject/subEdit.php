<h4 class="text-center">SỬA MÔN HỌC</h4>
<form action="<?php echo $url_base?>subController/editSubject" method="post" enctype="multipart/form">
    <div class="body">
        <div class="md-form mb-3">
            <label>Mã môn học</label>
            <input type="text" class="form-control validate" name="txtMaMH" required value="<?php echo $data['sub_arr'][0]['mamh'] ?>">
        </div>
        <div class="md-form mb-3">
            <label>Tên môn học</label>
            <input type="text" class="form-control validate" name="txtTenMH" required value="<?php echo $data['sub_arr'][0]['tenmh'] ?>">
        </div>

        <div class="md-form mb-3">
            <label>Số tín chỉ</label>
            <input type="number" class="form-control validate" name="txtSoTC" required value="<?php echo $data['sub_arr'][0]['sotc'] ?>">
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <input class="btn btn-success mx-1" type="submit" name="editSubject" value="Sửa">
        <a class="btn btn-secondary" href="<?php echo $url_base?>subController/subList">Hủy</a>
    </div>
</form>