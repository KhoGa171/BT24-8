<?php
    class ScoController extends Controller {
        protected $scoresModel;
        public function __construct(){
            $this->scoresModel = $this->model("scores");
        }
        public function scoList(){
            $this->view("home",[
                "folder" => "scores",
                "page" => "scoView",
                "scores" => $this->scoresModel->getAllScores()
            ]);
        }
        public function viewAddSco(){
            $this->view("home",[
                "folder" => "scores",
                "page" => "scoAdd"
            ]);
        }
        public function addScores(){
            if(isset($_POST['addScores'])){
                $masv = addslashes($_POST['txtMaSV']);
                $mamh = addslashes($_POST['txtMaMH']);
                $diem = addslashes($_POST['txtDiem']);
                $lanthi = addslashes($_POST['txtLanThi']);
                $result = $this->scoresModel->addScores($masv, $mamh, $diem, $lanthi);
                if($result){
                    echo '<script>alert("Thêm thành công!"); window.location="'.$this->url_base.'scoController/scoList";</script>';
                }else{
                    echo '<script>alert("Thêm không thành công!"); window.location="'.$this->url_base.'scoController/scoList";</script>';
                }
            }
        }
        public function showEdit(){
            if(isset($_GET['id'])){
                $this->view("home",[
                    "folder" => "scores",
                    "page" => "scoEdit",
                    "sco_arr" => $this->scoresModel->getScores($_GET['id'])
                ]);
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
                        echo '<script>alert("Cập nhật thành công!"); window.location="'.$this->url_base.'scoController/scoList";</script>';
                    }
                    else {
                        echo '<script>alert("Cập nhật không thành công!"); window.location="'.$this->url_base.'scoController/scoList";</script>';
                    }
                }
        }
        public function deleteScores(){
            if (isset($_GET['id'])){
                $result = $this->scoresModel->deleteScores($_GET['id']);
                if($result) echo '<script>alert("Xóa thành công!"); window.location="'.$this->url_base.'scoController/scoList";</script>';
                else echo '<script>alert("Xóa không thành công!"); window.location="'.$this->url_base.'scoController/scoList";</script>';
            }
        }
    }
?>