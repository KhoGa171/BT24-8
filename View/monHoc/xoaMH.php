<?php
require '../../Model/function.php';
 
if (isset($_GET['id'])){
    $stu = new funcSub();
    $result = $stu->deleteSubject($_GET['id']);
    if($result) echo '<script>alert("Xóa thành công!"); window.location="../../index.php";</script>';
    else echo '<script>alert("Xóa không thành công!"); window.location="../../index.php";</script>';
}
?>