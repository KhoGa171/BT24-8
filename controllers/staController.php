<?php
    class StaController extends Controller{
        protected $statisticalModel;
        protected $studentModel;
        protected $subjectModel;
        public function __construct(){
            $this->studentModel = $this->model("student");
            $this->subjectModel = $this->model("subject");
            $this->statisticalModel = $this->model("statistical");
        }
        public function showTKSVG(){
            $this->view("home",[
                "folder" => "statistical",
                "page" => "TKSVGView",
                "statisticals" => $this->statisticalModel->TKSVG()
            ]);
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
            $this->view("home",[
                "folder" => "statistical",
                "page" => "TKSVTBView",
                "statisticals" => $statisticals
            ]);
        }
        public function showTKSVTL(){
            $this->view("home",[
                "folder" => "statistical",
                "page" => "TKSVTLView",
                "statisticals" => $this->statisticalModel->TKSVTL()
            ]);
        }
        public function showTKSVY(){
            $this->view("home",[
                "folder" => "statistical",
                "page" => "TKSVYView",
                "statisticals" => $this->statisticalModel->TKSVY()
            ]);
        }
    }
?>