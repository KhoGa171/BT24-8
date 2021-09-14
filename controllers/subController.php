<?php
    class SubController extends Controller {
        protected $subjectModel;
        public function __construct(){
            $this->subjectModel = $this->model("subject");
        }
        public function subList(){
            $this->view("home",[
                "folder" => "subject",
                "page" => "subView",
                "subjects" => $this->subjectModel->getAllSubject()
            ]);
        }
        public function viewAddSub(){
            $this->view("home",[
                "folder" => "subject",
                "page" => "subAdd",
            ]);
        }
        public function addSubject(){
            if(isset($_POST['addSubject'])){
                $mamh = addslashes($_POST['txtMaMH']);
                $tenmh = addslashes($_POST['txtTenMH']);
                $sotc = addslashes($_POST['txtSoTC']);
                $result = $this->subjectModel->addSubject($mamh, $tenmh, $sotc);
                if($result){
                    echo '<script>alert("Thêm thành công!"); window.location="'.$this->url_base.'subController/subList";</script>';
                }else{
                    echo '<script>alert("Thêm không thành công!"); window.location="'.$this->url_base.'subController/subList";</script>';
                }
            }
        }
        public function showEdit(){
            if(isset($_GET['id'])){
                $this->view("home",[
                    "folder" => "subject",
                    "page" => "subEdit",
                    "sub_arr" => $this->subjectModel->getSubject($_GET['id'])
                ]);
            }
        }
        public function editSubject(){
                if(isset($_POST['editSubject'])){
                    $mamh = addslashes($_POST['txtMaMH']);
                    $tenmh = addslashes($_POST['txtTenMH']);
                    $sotc = addslashes($_POST['txtSoTC']);
                    $result = $this->subjectModel->editSubject($mamh, $tenmh, $sotc);
                    if($result){
                        echo '<script>alert("Cập nhật thành công!"); window.location="'.$this->url_base.'subController/subList";</script>';
                    }
                    else {
                        echo '<script>alert("Cập nhật không thành công!"); window.location="'.$this->url_base.'subController/subList";</script>';
                    }
                }
        }
        public function deleteSubject(){
            if (isset($_GET['id'])){
                $result = $this->subjectModel->deleteSubject($_GET['id']);
                if($result) echo '<script>alert("Xóa thành công!"); window.location="'.$this->url_base.'subController/subList";</script>';
                else echo '<script>alert("Xóa không thành công!"); window.location="'.$this->url_base.'subController/subList";</script>';
            }
        }
    }
?>