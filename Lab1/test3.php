<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1 - Test 3</title>
</head>

<body>
    <h2>Test 3 : Thao tác xử lý PHP</h2>
    <?php
    //1.Loại bỏ khoảng trắng ở đầu và cuối bằng trim()
    echo "1. <br>";
    $strspase = "   Lập Trình Web PHP   ";
    echo "Chuỗi ban đầu: [" . $strspase . "] <br><br>";
    echo "Chuỗi sau khi dùng trim: [" . trim($strspase) . " ] <br><br><hr>";

    //2. Loại bỏ khoảng trắng bên trái (ltrim) và bên phải (rtrim)
    echo "Dùng cho ltrim() (bên trái): [" . ltrim($strspase) . "] <br>";
    echo "Dùng cho rtrim() (bên phải): [" . rtrim($strspase) . "] <br><br><hr>";

    //3.Cắt chuỗi bằng substr()
    echo "3. <br>";
    $longtext = "Welcome to Web Programming Couser with PHP and MySQL!";
    echo "Chuỗi ban đầu (> 30 ký tự): " . $longtext . "<br>";
    echo "10 ký tự đầu tiên: " . substr($longtext, 0, 10) . "<br>";
    echo "Từ ký tự thứ 5 đến hết: " . substr($longtext, 4) . "<br><br><hr>";

    //4. Thay thế chuỗi bằng str_replace()
    echo "4. <br>";
    $newtext = str_replace("PHP and MySQL", "Python and HTML", $longtext);
    echo "Chuỗi sau khi dùng str_replace(): " . $newtext ."<br>";
    

    ?>
</body>

</html>