<?php
include "connect.php";
   
$data = $_POST;  
// Code PHP xử lý validate
$error = array();

if (!empty($_POST))
{
    // Lấy dữ liệu
    $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['age'] = isset($_POST['age']) ? $_POST['age'] : '';
    $data['national'] = isset($_POST['national']) ? $_POST['national'] : '';
    $data['position'] = isset($_POST['position']) ? $_POST['position'] : '';
    $data['salary'] = isset($_POST['salary']) ? $_POST['salary'] : '';

    // Lưu dữ liệu
    if (empty($error)){
        $sql = "INSERT INTO `thongtin` 
        (`name`, `age`, `national`, `position`, `salary`) 
        VALUES ('".$data['name']."', '".$data['age']."',
        '".$data['national']."', '".$data['position']."', '".$data['salary']."');";
    //Chạy câu SQL
    if ($result = mysqli_query($con,$sql)) {
    header("Location: index.php");
    exit(); // Dừng việc thực thi kịch bản tiếp theo sau khi chuyển hướng
    }else{
    echo "<h1>Có lỗi xảy ra Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
}        
    }
    else{
        echo 'Dữ liệu bị lỗi, không thể lưu trữ hoặc thiếu  ';
        
    }
}
             
    
?>