<?php
    class StuController extends Controller {
        protected $studentModel;
        public function __construct(){
            $this->studentModel = $this->model("student");
        }

        public function stuList(){
            $this->view("home",[
                "folder" => "student",
                "page" => "stuView",
                "students" => $this->studentModel->getAllStudent()
            ]);
        }
        public function viewAddStu(){
            $this->view("home",[
                "folder" => "student",
                "page" => "stuAdd"
            ]);
        }
        public function addStudent(){
            if(isset($_POST['addStudent'])){
                $masv = $_POST['txtMaSV'];
                $hoten = $_POST['txtHoTen'];
                $sodt = $_POST['txtSoDT'];
                $diachi = $_POST['txtDiaChi'];
                $result = $this->studentModel->addStudent($masv, $hoten, $sodt, $diachi);
                if($result){
                    echo '<script>alert("Thêm thành công!"); window.location="'.$this->url_base.'stuController/stuList";</script>';
                }else{
                    echo '<script>alert("Thêm không thành công!"); window.location="'.$this->url_base.'stuController/stuList";</script>';
                }
            }
        }
        public function showEdit(){
            if(isset($_GET['id'])){
                $this->view("home",[
                    "folder" => "student",
                    "page" => "stuEdit",
                    "stu_arr" => $this->studentModel->getStudent($_GET['id'])
                ]);
            }
        }
        public function editStudent(){
                if(isset($_POST['editStudent'])){
                    $masv = addslashes($_POST['txtMaSV']);
                    $hoten = addslashes($_POST['txtHoTen']);
                    $sodt = addslashes($_POST['txtSoDT']);
                    $diachi = addslashes($_POST['txtDiaChi']);
                    $result = $this->studentModel->editStudent($masv, $hoten, $sodt, $diachi);
                    if($result){
                        echo '<script>alert("Cập nhật thành công!"); window.location="'.$this->url_base.'stuController/stuList";</script>';
                    }
                    else {
                        echo '<script>alert("Cập nhật không thành công!"); window.location="'.$this->url_base.'stuController/stuList";</script>';
                    }
                }
        }
        public function deleteStudent(){
            if (isset($_GET['id'])){
                $result = $this->studentModel->deleteStudent($_GET['id']);
                if($result) echo '<script>alert("Xóa thành công!"); window.location="'.$this->url_base.'stuController/stuList";</script>';
                else echo '<script>alert("Xóa không thành công!"); window.location="'.$this->url_base.'stuController/stuList";</script>';
            }
        }
    }
?>