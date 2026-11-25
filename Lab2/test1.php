<?php
$menus = ["Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu"];
$subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>


    <style>
        /* internal */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav ul {
            display: flex;
            list-style-type: none;
        }

        nav li {
            flex: 1;
        }

        nav a {
            text-align: center;
            background-color: darkblue;
            color: white;

            display: block;
            padding: 10px;
            text-decoration: none;
            margin-top: 10px;
        }

        nav a:hover {
            background-color: #084298;
        }
    </style>
    <style>
        /*bai 2*/
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            padding: 20px;

        }
        .s1{
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0,0,0.15);
            margin-top: 20px;
        }
        .s1 h3{
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
            
        }
        .s1 ul{
            list-style: none;
        }
        .s1 li{
            padding: 12px;
            margin-bottom: 10px;
            background: #e7f1ff;
            border-left: 5px solid #0d6efe;
            border-radius: 5px;
            transition: 0.3s;
        }
        .s1 li:hover{
            background: #cfe2ff;
            transform: translateX(5px);
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <?php foreach ($menus as $item) { ?>
                <li>
                    <a href="#"><?= $item ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>
    <section class="s1">
        <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>
        <ul>
            <?php foreach($subjects as $items) {
            echo "<li>$items </li>";
            }
            ?>
        </ul>
        
    </section>
</body>

</html>