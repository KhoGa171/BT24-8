<?php
    require_once('db.php');
    class funcStu extends DBConnection{
        public function __construct(){
            parent::connect();
        }
        public function getAllStudent(){
            $sql = "SELECT * FROM sinhvien";
            $result = $this->conn->query($sql);
            $arr = array();
            while ($row = $result->fetch()){
                $arr[] = $row;
            }
            return $arr;
        }
        public function getStudent($masv){
            $sql = "SELECT * FROM sinhvien WHERE masv = '$masv'";
            $result = $this->conn->query($sql);
            $stu = [];
            while($row = $result->fetch()){
                $stu[] = $row;
            }
            return $stu;
        }
        public function addStudent($masv, $hoten, $sodt, $diachi){
            $sql = "INSERT INTO sinhvien (masv, hoten, sodt, diachi) values (?, ?, ?, ?)";
            $result = $this->conn->prepare($sql);
            $result->bindParam(1, $masv);
            $result->bindParam(2, $hoten);
            $result->bindParam(3, $sodt);
            $result->bindParam(4, $diachi);
            $result->execute();
            return $result;
        }
        public function editStudent($masv, $hoten, $sodt, $diachi){
            $sql = "UPDATE sinhvien SET hoten='$hoten', sodt='$sodt', diachi='$diachi' WHERE masv='$masv'";
            $result = $this->conn->query($sql);
            $result->execute();
            return $result;
        }
        public function deleteStudent($masv){
            $sql = "DELETE FROM sinhvien WHERE masv= '$masv'";
            $result = $this->conn->query($sql);
            $result->execute();
            return $result;
        }
    }
    class funcSub extends DBConnection{
        public function __construct(){
            parent::connect();
        }
        public function getAllSubject(){
            $sql = "SELECT * FROM monhoc";
            $result = $this->conn->query($sql);
            $arr = array();
            while ($row = $result->fetch()){
                $arr[] = $row;
            }
            return $arr;
        }
        public function getSubject($mamh){
            $sql = "SELECT * FROM monhoc WHERE `mamh` = '$mamh'";
            $result = $this->conn->query($sql);
            $stu = [];
            while($row = $result->fetch()){
                $stu[] = $row;
            }
            return $stu;
        }
        public function addSubject($mamh, $tenmh, $sotc){
            $sql = "INSERT INTO monhoc (mamh, tenmh, sotc) values (?, ?, ?)";
            $result = $this->conn->prepare($sql);
            $result->bindParam(1, $mamh);
            $result->bindParam(2, $tenmh);
            $result->bindParam(3, $sotc);
            $result->execute();
            return $result;
        }
        public function editSubject($mamh, $tenmh, $sotc){
            $sql = "UPDATE monhoc SET tenmh='$tenmh', sotc='$sotc' WHERE mamh='$mamh'";
            $result = $this->conn->query($sql);
            $result->execute();
            return $result;
        }
        public function deleteSubject($mamh){
            $sql = "DELETE FROM monhoc WHERE mamh= '$mamh'";
            $result = $this->conn->query($sql);
            $result->execute();
            return $result;
        }
    }
    class funcScores extends DBConnection{
        public function __construct(){
            parent::connect();
        }
        public function getAllScores(){
            $sql = "SELECT * FROM diemthi";
            $result = $this->conn->query($sql);
            $arr = array();
            while ($row = $result->fetch()){
                $arr[] = $row;
            }
            return $arr;
        }
        public function getScores($id){
            $sql = "SELECT * FROM diemthi WHERE `id` = '$id'";
            $result = $this->conn->query($sql);
            $stu = [];
            while($row = $result->fetch()){
                $stu[] = $row;
            }
            return $stu;
        }
        public function getScoresSV($masv){
            $sql = "SELECT * FROM diemthi WHERE `masv` = '$masv'";
            $result = $this->conn->query($sql);
            $stu = [];
            while($row = $result->fetch()){
                $stu[] = $row;
            }
            return $stu;
        }
        public function getScoresMH($mamh){
            $sql = "SELECT * FROM diemthi WHERE `mamh` = '$mamh'";
            $result = $this->conn->query($sql);
            $stu = [];
            while($row = $result->fetch()){
                $stu[] = $row;
            }
            return $stu;
        }
        public function addScores($masv, $mamh, $diemthi, $lanthi){
            $sql = "INSERT INTO diemthi (masv, mamh, diemthi, lanthi) values (?, ?, ?, ?)";
            $result = $this->conn->prepare($sql);
            $result->bindParam(1, $masv);
            $result->bindParam(2, $mamh);
            $result->bindParam(3, $diemthi);
            $result->bindParam(4, $lanthi);
            $result->execute();
            return $result;
        }
        public function editScores($id, $masv, $mamh, $diemthi, $lanthi){
            $sql = "UPDATE diemthi SET masv='$masv',mamh='$mamh', diemthi='$diemthi', lanthi='$lanthi' WHERE id='$id'";
            $result = $this->conn->query($sql);
            $result->execute();
            return $result;
        }
        public function deleteScores($id){
            $sql = "DELETE FROM diemthi WHERE id= '$id'";
            $result = $this->conn->query($sql);
            $result->execute();
            return $result;
        }
    }
    class statistical extends DBConnection{
        public function __construct(){
            parent::connect();
        }
        public function TKSVTL(){
            $sql = "SELECT diemthi.masv, hoten, tenmh, diemthi, lanthi FROM diemthi JOIN sinhvien ON diemthi.masv = sinhvien.masv 
            JOIN monhoc ON diemthi.mamh = monhoc.mamh WHERE lanthi > 1";
            $result = $this->conn->query($sql);
            $tk = [];
            while($row = $result->fetch()){
                $tk[] = $row;
            }
            return $tk;
        }
        public function TKSVG(){
            $sql = "SELECT diemthi.masv, hoten, tenmh, diemthi, lanthi FROM diemthi JOIN sinhvien ON diemthi.masv = sinhvien.masv 
            JOIN monhoc ON diemthi.mamh = monhoc.mamh WHERE diemthi >= 8 AND lanthi = 1";
            $result = $this->conn->query($sql);
            $tk = [];
            while($row = $result->fetch()){
                $tk[] = $row;
            }
            return $tk;
        }
        public function TKSVY(){
            $sql = "SELECT diemthi.masv, hoten, tenmh, diemthi, lanthi FROM diemthi JOIN sinhvien ON diemthi.masv = sinhvien.masv 
            JOIN monhoc ON diemthi.mamh = monhoc.mamh WHERE diemthi < 5";
            $result = $this->conn->query($sql);
            $tk = [];
            while($row = $result->fetch()){
                $tk[] = $row;
            }
            return $tk;
        }
        public function TKSVTB($masv, $mamh){
            $sql = "SELECT diemthi.masv, hoten, tenmh, AVG(CAST(diemthi AS float)) AS diemtb, diemthi.mamh
            FROM diemthi JOIN sinhvien ON diemthi.masv = sinhvien.masv 
                         JOIN monhoc ON diemthi.mamh = monhoc.mamh 
            WHERE diemthi.mamh='$mamh' AND diemthi.masv='$masv'";
            $result = $this->conn->query($sql);
            $tk = [];
            while($row = $result->fetch()){
                $tk[] = $row;
            }
            return $tk;
        }
    }
?>