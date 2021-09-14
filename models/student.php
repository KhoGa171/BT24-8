<?php 
    require_once('./config/db.php');
    class Student extends DBConnection{
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
?>