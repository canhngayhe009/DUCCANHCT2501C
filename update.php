<?php
// Kiểm tra xem khóa 'hoten' có tồn tại trong mảng $_POST không
if (isset($_POST['hoten'])) {
    $ht = $_POST['hoten'];
} else {
    $ht = 'Lỗi';  // Đặt giá trị mặc định nếu khóa không được xác định
}

// Kiểm tra xem khóa 'masv' có tồn tại trong mảng $_POST không
if (isset($_POST['masv'])) {
    $masv = $_POST['masv'];
} else {
    $masv = 'Lỗi';  // Đặt giá trị mặc định nếu khóa không được xác định
}

// Kiểm tra xem khóa 'lop' có tồn tại trong mảng $_POST không
if (isset($_POST['lop'])) {
    $lop = $_POST['lop'];
} else {
    $lop = 'Lỗi';  // Đặt giá trị mặc định nếu khóa không được xác định
}
$id = $_POST['sid'];
// Kết nối đến cơ sở dữ liệu
require_once 'ketnoi.php';

// Viết lệnh SQL để chèn dữ liệu
$update_sql = "UPDATE sinhvien
SET masv='$masv', hoten='$ht', lop='$lop' WHERE id=$id";

// Thực thi lệnh SQL
if (mysqli_query($conn, $update_sql)) {
    // In thông báo thành công
    //tro ve trang liet ke
    header("Location: lietke.php");
}
?>