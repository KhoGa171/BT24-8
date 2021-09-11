<?php
    class ScoController {
        protected $scoresModel;
        public function __construct(){
            require_once('../models/scores.php');
            $scores = new Scores();
            $this->scoresModel = $scores;
        }
        public function showAllScores(){
            $scores = $this->scoresModel->getAllScores();
            require_once('../views/scores/scoView.php');
        }
        public function showAdd(){
            require_once('../views/scores/addSco.php');
        }
        public function addScores(){
            if(isset($_POST['addScores'])){
                $masv = addslashes($_POST['txtMaSV']);
                $mamh = addslashes($_POST['txtMaMH']);
                $diem = addslashes($_POST['txtDiem']);
                $lanthi = addslashes($_POST['txtLanThi']);
                $result = $this->scoresModel->addScores($masv, $mamh, $diem, $lanthi);
                if($result){
                    echo '<script>alert("Thêm thành công!"); window.location="?action=scoList";</script>';
                }else{
                    echo '<script>alert("Thêm không thành công!"); window.location="?action=scoList";</script>';
                }
            }
        }
        public function showEdit(){
            if(isset($_GET['id'])){
                $sco_arr = $this->scoresModel->getScores($_GET['id']);
                $id = $sco_arr[0]['id'];
                $masv = $sco_arr[0]['masv'];
                $mamh = $sco_arr[0]['mamh'];
                $diem = $sco_arr[0]['diemthi'];
                $lanthi = $sco_arr[0]['lanthi'];
                require_once('../views/scores/editSco.php');
            }
        }
        public function editScores(){
                if(isset($_POST['editScores'])){
                    $masv = addslashes($_POST['txtMaSV']);
                    $mamh = addslashes($_POST['txtMaMH']);
                    $diem = addslashes($_POST['txtDiem']);
                    $lanthi = addslashes($_POST['txtLanThi']);
                    $result = $this->scoresModel->editScores($_GET['id'], $masv, $mamh, $diem, $lanthi);
                    if($result){
                        echo '<script>alert("Cập nhật thành công!"); window.location="?action=scoList";</script>';
                    }
                    else {
                        echo '<script>alert("Cập nhật không thành công!"); window.location="?action=scoList";</script>';
                    }
                }
        }
        public function deleteScores(){
            if (isset($_GET['id'])){
                $result = $this->scoresModel->deleteScores($_GET['id']);
                if($result) echo '<script>alert("Xóa thành công!"); window.location="?action=scoList";</script>';
                else echo '<script>alert("Xóa không thành công!"); window.location="?action=scoList";</script>';
            }
        }
    }
?>