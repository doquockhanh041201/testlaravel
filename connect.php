<?php
$con = mysqli_connect('localhost', 'root', '', 'testlaravel');
$sql="SELECT * FROM `thongtin` ORDER BY `id`";
//Chạy câu SQL
$result=mysqli_query($con,$sql);
//Gắn dữ liệu lấy được vào mảng $data
    while ($row=mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    $html = '';
    if(!empty($data)){
        foreach ($data as $value) {
            $html .= '
            <tr role="row">
                <td>'.$value['id'].'</td>
                <td>'.$value['name'].'</td>
                <td>'.$value['age'].'</td>
                <td>'.$value['national'].'</td>
                <td>'.$value['position'].'</td>
                <td>'.$value['salary'].' $</td>
                
            </tr>';
            }
    }
?>
