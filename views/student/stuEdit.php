<h4 class="text-center">SỬA SINH VIÊN</h4>
<form action="<?php echo $url_base?>stuController/editStudent" method="post" enctype="multipart/form">
    <div class="body">
        <div class="md-form mb-3">
            <label>Mã sinh viên</label>
            <input type="text" class="form-control validate" name="txtMaSV" required value="<?php echo $data['stu_arr'][0]['masv'] ?>">
        </div>
        <div class="md-form mb-3">
            <label>Họ và tên</label>
            <input type="text" class="form-control validate" name="txtHoTen" required value="<?php echo $data['stu_arr'][0]['hoten'] ?>">
        </div>

        <div class="md-form mb-3">
            <label>Số điện thoại</label>
            <input type="text" class="form-control validate" name="txtSoDT" required value="<?php echo $data['stu_arr'][0]['sodt'] ?>">
        </div>
        <div class="mb-3">
            <label>Địa chỉ</label>
            <input type="text" class="form-control validate" name="txtDiaChi" required value="<?php echo $data['stu_arr'][0]['diachi'] ?>">
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <input class="btn btn-success mx-1" type="submit" name="editStudent" value="Sửa">
        <a class="btn btn-secondary" href="<?php echo $url_base?>stuController/stuList">Hủy</a>
    </div>
</form>