<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
table {
    border-collapse: collapse;
    width:100%
}
th,td {
    padding:8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
.thumbnail{
    height : 60px;
    width : 100px;
    overflow: hidden;
    
}
.thumbnail img{  
    width : 100%
}
.thumbnail img {
    height : 100% 
}
</style>
<body>
    <table border = "0">
    <caption><h1>DANH SÁCH KHÁCH HÀNG</h1></caption>
    <tr>
    <th>STT</th>
    <th>Tên</th>
    <th>Ngày sinh</th>
    <th>Địa Chỉ</th>
    <th>Ảnh</th>
    </tr>
    
    <?php
    
    $customerlist = array(
        "1" => array ("ten" => "Mai Văn Hoàng",
                      "ngaysinh" => "1983-03-08",
                      "diachi" => "Hà Nội",
                      "anh" => "anh1.jpg"),
        "2" => array ("ten" => "Nguyễn Văn Nam",
                      "ngaysinh" => "1989-09-05",
                      "diachi" => "Nam Định",
                      "anh" => "anh2.jpg"),
        "3" => array ("ten" => "Nguyễn Thị Thái Hòa",
                      "ngaysinh" => "1992-09-12",
                      "diachi" => "Huế",
                      "anh" => "anh3.jpg"),
        "4" => array ("ten" => "Trần Đăng Khoa",
                      "ngaysinh" => "1991-03-18",
                      "diachi" =>"Hà Tây",
                      "anh" => "anh4.jpg"),
        "5" => array ("ten" => "Nguyễn Đình Thi",
                      "ngaysinh" => "1990-03-19",
                      "diachi" => " HÀ Nội",
                      "anh" => "anh5.jpg")                       
        );
        foreach($customerlist as $key =>$value){
            echo "<tr>";
            echo "<td>".$key."</td>";
            echo "<td>".$value["ten"]."</td>";
            echo "<td>".$value["ngaysinh"]."</td>";
            echo "<td>".$value['diachi']."</td>";
            echo "<td><div class='thumbnail'><image src = '".$value['anh']."'/></div></td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>