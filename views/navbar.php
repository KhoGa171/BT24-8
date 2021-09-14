<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo $url_base?>stuController/stuList">QUẢN LÝ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $url_base?>stuController/stuList">Sinh viên</a>
        <!-- <span class="sr-only">(current)</span> -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $url_base?>subController/subList">Môn học</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $url_base?>scoController/scoList">Điểm thi</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Thống kê
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo $url_base?>staController/showTKSVG">Sinh viên giỏi</a>
          <a class="dropdown-item" href="<?php echo $url_base?>staController/showTKSVTB">Điểm trung bình</a>
          <a class="dropdown-item" href="<?php echo $url_base?>staController/showTKSVTL">Sinh viên thi lại</a>
          <a class="dropdown-item" href="<?php echo $url_base?>staController/showTKSVY">Sinh viên dưới 5đ</a>
        </div>
      </li>
    </ul>
  </div>
</nav>