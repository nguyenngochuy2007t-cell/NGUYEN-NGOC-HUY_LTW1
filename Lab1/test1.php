<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lab 1 - bài 1</title>
</head>

<body>
        <h2>Bài 1: Khai báo biến và hằng số trong PHP</h2>
    <?php
    //1 In thông tin trực tiếp bằng echo
    echo "1. <br>";
    echo "Họ tên: Nguyễn Ngọc Huy <br>";
    echo "Ngày sinh: 2007-11-11 <br>";
    echo "Mã số sinh viên: 2125110083 <br>";

    //2. Khai báo biến và in giá trị tương ứng
    echo "2. <br> ";
    $ten = "Nguyễn Ngọc Huy";
    $ngsinh = "11-11-2007";
    $maso = "2125110083";
    $sdt = "0838xxxxxx";
    echo "Tên: $ten <br>";
    echo "ngaysinh:  $ngsinh <br>";
    echo "Mã số sinh viên:  $maso <br>";
<<<<<<< HEAD
    //3.
    echo "3. <br>";

    define("Host", "localhost");
    define("Database", "ql_sinhvien");
    define("Username", "root");
    define("Password", " ");

    echo "Host: "  . Host . "<br>";
    echo "Database: " . Database . "<br> ";
    echo "Username: " . Username . "<br> ";
    echo "Password: " . Password . "<br> <hr> ";
    // 4. Phân biệt nháy kép(" ") và nháy đơn(' ')
    /*
        Multi-line comment
        - Nháy kép: Cho phép in giá của biến kèm theo trong.
        - Nháy đơn: Cho mọi thứ bên trong là chuỗi văn bản thuần túy.
        */
        echo "Dấu nháy kép: Xin chào $ten <br>";
        echo 'Dấu nháy đơn: Xin chào $ten <br>'
    ?>
</body>

</html>
=======
//3.
echo "3. <br>";
define("Host: ","localhost"); 
define("Database: ","ql_sinhvien"); 
define("Username: ","root");
define("Password: "," "); 


echo "Host: "  . Host . "<br>";
echo "Database: " . Database . "<br> ";
echo "Username: " . Username . "<br> ";
echo "Password: " . password . "<br> <hr> "
?>
>>>>>>> da79e7d80e44d4801254b8b62ed2cf6e08a2566a
