<?php
include "connect.php";

// Kiểm tra xem dữ liệu đã được gửi từ form hay không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra xem các trường dữ liệu đã được điền hay chưa
    if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['national']) && isset($_POST['position']) && isset($_POST['salary'])) {
        // Lưu dữ liệu vào biến hoặc mảng để hiển thị trong bảng
        // Ví dụ:
        $name = $_POST['name'];
        $age = $_POST['age'];
        $national = $_POST['national'];
        $position = $_POST['position'];
        $salary = $_POST['salary'];

        // Tạo HTML cho các dòng của bảng
        $html = "<tr>";
        $html .= "<td>$id</td>";
        $html .= "<td>$name</td>";
        $html .= "<td>$age</td>";
        $html .= "<td>$national</td>";
        $html .= "<td>$position</td>";
        $html .= "<td>$salary</td>";
        $html .= "</tr>";
    } else {
        // Nếu không có dữ liệu, hiển thị thông báo hoặc xử lý khác
        echo "<p>Điền vào tất cả các trường!</p>";
    }
}
?>