<?php
    require_once('../config/db.php');
    class Subject extends DBConnection{
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
?>