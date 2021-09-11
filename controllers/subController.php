<?php
    class SubController {
        protected $subjectModel;
        public function __construct(){
            require_once('../models/subject.php');
            $subject = new Subject();
            $this->subjectModel = $subject;
        }
        public function showAllSubject(){
            $subjects = $this->subjectModel->getAllSubject();
            require_once('../views/subject/subView.php');
        }
        public function showAdd(){
            require_once('../views/subject/addSub.php');
        }
        public function addSubject(){
            if(isset($_POST['addSubject'])){
                $mamh = addslashes($_POST['txtMaMH']);
                $tenmh = addslashes($_POST['txtTenMH']);
                $sotc = addslashes($_POST['txtSoTC']);
                $result = $this->subjectModel->addSubject($mamh, $tenmh, $sotc);
                if($result){
                    echo '<script>alert("Thêm thành công!"); window.location="?action=subList";</script>';
                }else{
                    echo '<script>alert("Thêm không thành công!"); window.location="?action=subList";</script>';
                }
            }
        }
        public function showEdit(){
            if(isset($_GET['id'])){
                $sub_arr = $this->subjectModel->getSubject($_GET['id']);
                $mamh = $sub_arr[0]['mamh'];
                $tenmh = $sub_arr[0]['tenmh'];
                $sotc = $sub_arr[0]['sotc'];
                require_once('../views/subject/editSub.php');
            }
        }
        public function editSubject(){
                if(isset($_POST['editSubject'])){
                    $mamh = addslashes($_POST['txtMaMH']);
                    $tenmh = addslashes($_POST['txtTenMH']);
                    $sotc = addslashes($_POST['txtSoTC']);
                    $result = $this->subjectModel->editSubject($mamh, $tenmh, $sotc);
                    if($result){
                        echo '<script>alert("Cập nhật thành công!"); window.location="?action=subList";</script>';
                    }
                    else {
                        echo '<script>alert("Cập nhật không thành công!"); window.location="?action=subList";</script>';
                    }
                }
        }
        public function deleteSubject(){
            if (isset($_GET['id'])){
                $result = $this->subjectModel->deleteSubject($_GET['id']);
                if($result) echo '<script>alert("Xóa thành công!"); window.location="?action=subList";</script>';
                else echo '<script>alert("Xóa không thành công!"); window.location="?action=subList";</script>';
            }
        }
    }
?>