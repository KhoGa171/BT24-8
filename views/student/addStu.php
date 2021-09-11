<h4 class="text-center">THÊM SINH VIÊN</h4>
<form action="?action=stuAdd" method="POST" enctype="multipart/form">
    <div class="body">
        <div class="md-form mb-3">
            <label>Mã sinh viên</label>
            <input type="text" class="form-control validate" name="txtMaSV" required>
        </div>
        <div class="md-form mb-3">
            <label>Họ và tên</label>
            <input type="text" class="form-control validate" name="txtHoTen" required>
        </div>

        <div class="md-form mb-3">
            <label>Số điện thoại</label>
            <input type="text" class="form-control validate" name="txtSoDT" required>
        </div>
        <div class="mb-3">
            <label>Địa chỉ</label>
            <input type="text" class="form-control validate" name="txtDiaChi" required>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <input class="btn btn-success mx-1" type="submit" name="addStudent" value="Thêm">
        <a class="btn btn-secondary" href="?action=stuList">Hủy</a>
    </div>
</form>