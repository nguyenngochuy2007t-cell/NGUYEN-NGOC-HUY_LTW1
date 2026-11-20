<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1 - Test 2</title>
</head>

<body>
    <h2>Bài 2: Kiểu dữ liệu, toán tử và chuỗi</h2>
    <?php
    echo "1. <br>";
    //1. phép toán số học với 2 số nguyên 
    $a = 15;
    $b = 7;
    echo "Cộng: " . $a + $b . "<br>";
    echo "Trừ: " . $a - $b . "<br>";
    echo "Nhân: " . $a * $b . "<br>";
    echo "Chia: " . $a / $b . "<br>";
    echo "Chia lấy phần dư: " . $a % $b . "<br><br><hr>";
    //2. SO SÁNH BIẾN SỐ NGUYÊN VÀ CHUỖI.

    echo "2. <br>";
    $int = 10;
    $str = "10";
    echo "== : ";
    var_dump($int == $str);
    echo "<br>";
    echo "=== : ";
    var_dump($int === $str);
    echo "<br>";
    echo "!= : ";
    var_dump($int != $str);
    echo "<br>";
    echo "<> : ";
    var_dump($int <> $str);
    echo "<br>";
    echo "!== : ";
    var_dump($int !== $str);
    echo "<br><br><hr>";

    //3.PHÉP TĂNG TRƯỚC VÀ TĂNG SAU
    echo "3. <br>";
    $x1 = 8;
    echo "Tăng trước (++\$x1): " . (++$x1) . "<br>";

    $x2 = 8;
    echo "Tăng sau. (\$x2++): " . ($x2++) .  "&nbsp" . "(sau phép tính x2 = $x2) <br><br><hr>";
    
    //4
    echo "4. <br>";
    $str1 = "Lập trình ";
    $str2 = "Web PHP";
    echo "Toán tử . : " . ($str1 . $str2) . "<br>";

    $strTarget = "Lập trình ";
    $strTarget .= "Web PHP";
    echo "Toán tử .= : ". $strTarget . "<br><br><hr>";

    //5 ĐẾM SỐ LƯỢNG KÝ TỰ VỚI strlen() và mb_strlen()
    echo "5. <br>";
    $strnodau = "Hello world";
    $strcodau = "Lập trình Web";
    echo "strlen (Không dấu): ". strlen($strnodau) . "<br>";
    echo "strlen (có dấu): ".strlen($strcodau) . "bytes<br>";
    echo "mb_strlen (có dấu): ". mb_strlen($strcodau) . "ký tự<br><br><hr>";

    //6. CHUYỂN ĐỔI CHỮ HOA VÀ CHỮ THƯỜNG
    echo "6. <br>";
    $text = "Lập trình PHP";
    echo "strtouper: " . strtoupper("hello") . "<br>";
    echo "strtolower: ". strtolower("HELLO") . "<br>";
    echo "mb_strtoupper: ". mb_strtoupper($text) . "<br>";
    echo "mb_strtolower: ". mb_strtoLower($text) . "<br><br><hr>";

    //7 Ép kiểu chuỗi về int
    echo "7. <br>";
    $s1 = (int)"123 abcd";
    $s2 = (int)"abcd 123";
    echo 'Ép kiểu "123 abcd" :'; var_dump($s1); echo "<br>";
    echo 'Ép kiểu "abcd 123" :'; var_dump($s2); echo "<br><br><hr>";

    //8. Hiển thị kiểu dữ liệu bằng var_dump()
    echo "8. <br>";
    $varint = 50;
    $varfloat = 9.6;
    $varstring = "Hé nhô";
    $varBoll = true;

    var_dump($varint); echo "<br>";
    var_dump($varfloat); echo "<br>";
    var_dump($varstring); echo "<br>";  
    var_dump($varBoll); echo "<br>";

    ?>
</body>
</html>