<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table{
        border-collapse: collapse;
        width: 100%;
    }
    th, td{
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<body>
<table border="0">
    <caption><h1> Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerList = array(
            "1" => array("ten" => "Nguyễn Thị Mai", "ngaysinh" => "1993-08-20", "diachi" => "Hà Nội", "anh" => "image/anh1.jpg"),
            "2" => array("ten" => "Hoàng Gia Hân", "ngaysinh" => "1995-09-17", "diachi" => "Hà Nam", "anh" => "image/anh2.jpg"),
            "3" => array("ten" => "Phùng Mai Phương", "ngaysinh" => "1998-02-05", "diachi" => "Thái Nguyên", "anh" => "image/anh3.jpg"),
            "4" => array("ten" => "Đào Phương Anh", "ngaysinh" => "2000-06-12", "diachi" => "Lạng Sơn", "anh" => "image/anh4.jpg"),
            "5" => array("ten" => "Lê Thanh Huyền", "ngaysinh" => "2002-10-26", "diachi" => "Cao Bằng", "anh" => "image/anh5.jpg")
    );
    ?>
    <?php
    foreach($customerList as $key => $value){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$value['ten']."</td>";
        echo "<td>".$value['ngaysinh']."</td>";
        echo "<td>".$value['diachi']."</td>";
        echo "<td><image src ='".$value['anh']."' width = '100px' height = '100px'/></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
