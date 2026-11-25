<?php
$menus = ["Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu"];
$subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];
$students = [
    [
        "id" => "SV001",
        "name" => "Nguyễn Văn An",
        "gender" => "Nam",
        "class" => "CNTT1"
    ],
    [
        "id" => "SV002",
        "name" => "Trần Thị Bình",
        "gender" => "Nữ",
        "class" => "CNTT2"
    ],
    [
        "id" => "SV003",
        "name" => "Lê Văn Cường",
        "gender" => "Nam",
        "class" => "CNTT1"
    ],
    [
        "id" => "SV004",
        "name" => "Phạm Thị Dung",
        "gender" => "Nữ",
        "class" => "CNTT3"
    ],
];

$faculties = [
    "Công nghệ thông tin",
    "Quản trị kinh doanh",
    "Kế toán",
    "Ngôn ngữ Anh"
];

$classes = [
    "Công nghệ thông tin" => ["CNTT1", "CNTT2", "CNTT3", "CNTT4"],
    "Quản trị kinh doanh" => ["QTKD1", "QTKD2", "QTKD3"],
    "Kế toán" => ["KT1", "KT2", "KT3"],
    "Ngôn ngữ Anh" => ["NNA1", "NNA2", "NNA3"]
];

$genders = ["Nam", "Nữ", "Khác"];

$hobbies = [
    "LT" => "Lập trình",
    "DS" => "Đọc sách",
    "AN" => "Âm nhạc",
    "DL" => "Du lịch",
    "TT" => "Thể thao"
];
$faculty = $_POST['faculty'] ?? $faculties[0];
$classList = $classes[$faculty] ?? [];
$selectedClass  = $_POST['class'] ?? '';
$found = false;
foreach ($classList as $c)
    {
        if ($selectedClass == $c)
            {
                $found = true;
            }
    }
if (!$found){
    $selectedClass = $classList[0] ?? '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>

    <!-- Bài 1 -->
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
    <!-- Bài 2 -->
    <style>
        /*bai 2*/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            padding: 20px;

        }

        .s1 {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            margin-top: 20px;
        }

        .s1 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;

        }

        .s1 ul {
            list-style: none;
        }

        .s1 li {
            padding: 12px;
            margin-bottom: 10px;
            background: #e7f1ff;
            border-left: 5px solid #0d6efe;
            border-radius: 5px;
            transition: 0.3s;
        }

        .s1 li:hover {
            background: #cfe2ff;
            transform: translateX(5px);
        }
    </style>
    <!-- Bài 3 -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .s2 table {
            width: 100%;
            border-collapse: collapse;
        }

        .s2 th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        .s2 th {
            background-color: #0d6efd;
            color: white;
        }

        .s2 tbody tr:nth-child(odd) {
            background-color: #f5f6f7;
        }

        .s2 tbody tr:hover {
            background-color: #d9e7fa;
        }

        .s2 h3 {
            margin-top: 20px;
        }
    </style>
    <!-- Bài 4 -->
    <style>

    </style>
</head>

<body>
    <!-- Bài 1 -->
    <nav>
        <ul>
            <?php foreach ($menus as $item) { ?>
                <li>
                    <a href="#"><?= $item ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>
    <!-- Bài 2 -->
    <section class="s1">
        <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>
        <ul>
            <?php foreach ($subjects as $items) {
                echo "<li>$items </li>";
            }
            ?>
        </ul>


    </section>
    <!-- Bài 3 -->
    <section class="s2">
        <h3>Danh sách sinh viên</h3>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã sinh viên</th>
                    <th>Họ và tên</th>
                    <th>Giới tính</th>
                    <th>Lớp</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $index => $students) { ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $students["id"] ?></td>
                        <td><?= $students["name"] ?></td>
                        <td><?= $students["gender"] ?></td>
                        <td><?= $students["class"] ?></td>
                    </tr>

                <?php  } ?>
            </tbody>

        </table>
    </section>
    <!-- Bài 4 -->
    <section class="s3">
        <h3>ĐĂNG KÝ THÔNG TIN SINH VIÊN</h3>
        <form action="#" method="post">
            <div>
                <label>Họ và tên</label>
                <input type="text">
            </div>

            <div>
                <label>Khoa</label>
                <select name="faculty">
                    <?php foreach ($faculties as $f) { ?>
                        <option value="<?= $f ?>"><?= $faculty==$f ? 'selected' : '' ?>><?= $f ?></option>
                    <?php } ?>
                </select>
                <button type="submit" name="chon_khoa">Chọn Khoa</button>
            </div>

            <div>
                <label>Lớp</label>
                <select name="class" id="">
                    <?php foreach ($classList as $c => $class) { ?>
                        <option value="<?= $c ?>"><?= $selectedClass ==$c ? 'selected' : '' ?>><?= $c ?></option>
                    <?php } ?>
                </select>
            </div>

            <div>
                <label>Giới tính</label>
                <?php foreach ($genders as $gender) { ?>
                    <label>
                        <input type="radio" name="gender"
                            value="<?= $gender ?>"><?= $gender ?>
                    </label>
                <?php } ?>
            </div>

            <div>
                <label>Sở thích</label>
                <?php foreach ($hobbies as $key => $hobby) { ?>
                    <label>
                        <input type="checkbox" name="hobbies[]"
                            value="<?= $key ?>"><?= $hobby ?>
                    </label>
                <?php } ?>
            </div>

            <div>
                <button type="submit" name="dangky">
                    Đăng Ký
                </button>
                <button type="reset">
                    Làm mới
                </button>
            </div>
        </form>
    </section>
</body>

</html>