<h4 class="text-center">THÊM ĐIỂM</h4>
<form action="?action=scoAdd" method="post" enctype="multipart/form">
    <div class="body">
        <div class="md-form mb-3">
            <label>Mã sinh viên</label>
            <input type="text" class="form-control validate" name="txtMaSV" required>
        </div>
        <div class="md-form mb-3">
            <label>Mã môn học</label>
            <input type="text" class="form-control validate" name="txtMaMH" required>
        </div>

        <div class="md-form mb-3">
            <label>Điểm thi</label>
            <input type="number" class="form-control validate" name="txtDiem" required>
        </div>
        <div class="mb-3">
            <label>Lần thi</label>
            <input type="number" class="form-control validate" name="txtLanThi" required>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <input class="btn btn-success mx-1" type="submit" name="addScores" value="Thêm">
        <a class="btn btn-secondary" href="?action=scoList">Hủy</a>
    </div>
</form>