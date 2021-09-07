<?php
require_once '../../Model/function.php';
 
if (isset($_GET['id'])){
    $stu = new funcScores();
    $result = $stu->deleteScores($_GET['id']);
    if($result) echo '<script>alert("Xóa thành công!"); window.location="../../index.php";</script>';
    else echo '<script>alert("Xóa không thành công!"); window.location="../../index.php";</script>';
}
?>