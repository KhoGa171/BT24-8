<?php
    require_once('../config/db.php');
    class Statistical extends DBConnection{
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