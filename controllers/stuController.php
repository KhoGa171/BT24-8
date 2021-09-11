<?php
    class StuController {
        protected $studentModel;
        public function __construct(){
            require_once('../models/student.php');
            $student = new Student();
            $this->studentModel = $student;
            //$this->studentModel = $this->model("student");
        }
        public function showAllStudent(){
            //return $this->studentModel->getAllStudent();
            $students = $this->studentModel->getAllStudent();
            require_once('../views/student/stuView.php');
            //$this->view("index",["students" => $this->studentModel->getAllStudent()]);
        }
        public function showAdd(){
            require_once('../views/student/addStu.php');
        }
        public function addStudent(){
            if(isset($_POST['addStudent'])){
                $masv = $_POST['txtMaSV'];
                $hoten = $_POST['txtHoTen'];
                $sodt = $_POST['txtSoDT'];
                $diachi = $_POST['txtDiaChi'];
                $result = $this->studentModel->addStudent($masv, $hoten, $sodt, $diachi);
                if($result){
                    echo '<script>alert("Thêm thành công!"); window.location="?action=stuList";</script>';
                }else{
                    echo '<script>alert("Thêm không thành công!"); window.location="?action=stuList";</script>';
                }
            }
        }
        public function showEdit(){
            if(isset($_GET['id'])){
                $stu_arr = $this->studentModel->getStudent($_GET['id']);
                $masv = $stu_arr[0]['masv'];
                $hoten = $stu_arr[0]['hoten'];
                $sodt = $stu_arr[0]['sodt'];
                $diachi = $stu_arr[0]['diachi'];
                require_once('../views/student/editStu.php');
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
                        echo '<script>alert("Cập nhật thành công!"); window.location="?action=stuList";</script>';
                    }
                    else {
                        echo '<script>alert("Cập nhật không thành công!"); window.location="?action=stuList";</script>';
                    }
                }
        }
        public function deleteStudent(){
            if (isset($_GET['id'])){
                $result = $this->studentModel->deleteStudent($_GET['id']);
                if($result) echo '<script>alert("Xóa thành công!"); window.location="?action=stuList";</script>';
                else echo '<script>alert("Xóa không thành công!"); window.location="?action=stuList";</script>';
            }
        }
    }
?>