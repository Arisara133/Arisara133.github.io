<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติส่วนตัว - นางสาวอริสรา กุญชรน้อย</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        img {
            width: 150px;
            height: 150px;
            margin: 0 auto 20px auto;
            display: block;
            border: 2px solid #333;
        }

        h1 {
            text-align: center;
            color: #444;
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .section-title {
            margin-top: 20px;
            font-size: 1.2rem;
            color: #555;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        ul {
            list-style-type: square;
            padding-left: 20px;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $name = "นางสาวอริสรา กุญชรน้อย";
        $dob = "21 เมษายน 2545";
        $age = 22;
        $education = "สาขาวิทยาการจัดการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ คณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฏอุดรธานี";
        $project = "ระบบแจ้งซ่อมอุปกรณ์บนเว็บแอพพลิเคชัน กรณีศึกษาคณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฏอุดรธานี";
        $software = [
            "โปรแกรมจัดการฐานข้อมูล MySQL",
            "Visual Studio Code",
            "HTML5, CSS, PHP",
            "Apache Web Server"
        ];
        $hardware = [
            "CPU: Intel Core i7-14700K",
            "RAM: 24 GB",
            "SSD: 512 GB"
        ];
        ?>

        <img src="http://localhost/img/Arisara.jpg" alt="รูปโปรไฟล์">
        <h1><?php echo $name; ?></h1>
        <p><strong>วันเกิด:</strong> <?php echo $dob; ?></p>
        <p><strong>อายุ:</strong> <?php echo $age; ?> ปี</p>
        <p><strong>การศึกษา:</strong> <?php echo $education; ?></p>

        <h2 class="section-title">โครงงานปัจจุบัน</h2>
        <p><?php echo $project; ?></p>

        <h2 class="section-title">เครื่องมือที่ใช้ในการพัฒนา</h2>
        <p><strong>ซอฟต์แวร์:</strong></p>
        <ul>
            <?php foreach ($software as $item) {
                echo "<li>$item</li>";
            } ?>
        </ul>

        <p><strong>ฮาร์ดแวร์:</strong></p>
        <ul>
            <?php foreach ($hardware as $item) {
                echo "<li>$item</li>";
            } ?>
        </ul>
    </div>

    <footer>
        &copy; 2024 นางสาวอริสรา กุญชรน้อย. All rights reserved.
    </footer>
</body>
</html>
