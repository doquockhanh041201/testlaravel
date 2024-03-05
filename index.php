<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="jumbotron text-center">
    <h1>Thông tin liên hệ</h1>
    <p>Vui lòng điền thông tin lệ vào biểu mẫu dưới đây!</p> 
    </div>
        <div class="container-fluid">
        <div class="col-sm-4">
        <form action="process.php" method="POST">
            <div class="form-group">
                <input type="text" name="name"><span>Họ và tên: </span>
                <?php echo isset($error['name']) ? $error['name'] : ''; ?>
            </div>
            <div class="form-group">
                <input type="text" name="age"><span>Tuổi: </span>
            </div>
            <div class="form-group">
                <input type="text" name="national"><span>Quốc tịch: </span>
            </div>
            <div class="form-group">
                <input type="text" name="position"><span>Nghề nghiệp: </span>
            </div>
            <div class="form-group">
                <input type="text" name="salary"><span>Mức lương: </span>
            </div>
            <div class="form-group">
                <button type="submit">Thêm</button>
                <button type="reset">Reset</button>
                
            </div>
        </form>
        </div>
        <div class="col-sm-8">
        <table class="table table-striped table-hover table-bordered table-sm" style="border: 2px solid ;max-width:700px;margin-left:150px;">
            
            <thead>
                <tr role="row">
                    <th class="text-center">ID</th>
                    <th class="text-center">Họ và tên</th>
                    <th class="text-center">Tuổi</th>
                    <th class="text-center">Quốc tịch</th>
                    <th class="text-center">Nghề nghiệp</th>
                    <th class="text-center">Mức lương</th>
                    
                </tr>
            </thead>
                <tbody>
    <?php  
        echo $html;
    ?>
</tbody>
           
        </table>
        </div>
        </div>

    </body>
</html>