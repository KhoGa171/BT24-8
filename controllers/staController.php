<?php
    class StaController {
        protected $statisticalModel;
        protected $studentModel;
        protected $subjectModel;
        public function __construct(){
            require_once('../models/statistical.php');
            require_once('../models/student.php');
            require_once('../models/subject.php');
            $statistical = new Statistical();
            $this->statisticalModel = $statistical;
            $this->studentModel = new Student();
            $this->subjectModel = new Subject();
        }
        public function showTKSVG(){
            $statisticals = $this->statisticalModel->TKSVG();
            require_once('../views/statistical/TKSVGView.php');
        }
        public function showTKSVTB(){
            $statisticals = [];
            foreach($this->subjectModel->getAllSubject() as $subject){
                foreach($this->studentModel->getAllStudent() as $student){
                    $statisticals[] = $this->statisticalModel->TKSVTB($student['masv'],$subject['mamh']);
                }
            }
            usort($statisticals, function ($a, $b) { 
                $n = count($a);
                for($c=0; $c < $n; $c++){
                    return $b[$c]['diemtb'] <=> $a[$c]['diemtb']; 
                }
            });
            require_once('../views/statistical/TKSVTBView.php');
        }
        public function showTKSVTL(){
            $statisticals = $this->statisticalModel->TKSVTL();
            require_once('../views/statistical/TKSVTLView.php');
        }
        public function showTKSVY(){
            $statisticals = $this->statisticalModel->TKSVY();
            require_once('../views/statistical/TKSVYView.php');
        }
    }
?>