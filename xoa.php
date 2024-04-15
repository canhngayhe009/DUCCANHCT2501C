<?php
//lay du lieu tu id can xoa
$svid = $_GET['sid'];

//ket noi
require_once 'ketnoi.php';
//cau lenh sql
$xoa_sql = "DELETE FROM sinhvien WHERE id=$svid";

if (mysqli_query($conn, $xoa_sql))
    // In thông báo thành công
    //tro ve trang liet ke
header("Location: lietke.php");
