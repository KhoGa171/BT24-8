<?php
    require_once('../config/db.php');
    class Scores extends DBConnection{
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
?>