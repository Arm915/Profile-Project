<?php 

include('DataRegister.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="from.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <div class="container">
        <header>เรื่องศิลปะวัฒนะธรรม</header>
    <form action="DataRegister.php" method="POST">
        <div class="form first">
            <div class="details personal">
                <span class="title">รายระเอียดงาน</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>ชื่องาน</label>
                            <input type="text" placeholder="ชื่องาน" id="name1" name="name1" required>
                        </div>
                        <form action="DataRegister.php" method="POST" enctype="multipart/form-data">>
                            <div class="input-field">
                            <label>ไฟล์PDF</label>
                            <input type="file" placeholder="ไฟล์PDF" id="file1" name="file1" required>
                        </div>
                        </form>
                        <div class="input-field">
                            <label>รูปภาพ</label>
                            <input type="text" placeholder="รูปภาพในงาน" id="picture1" name="picture1" required>
                        </div>
                        <div class="input-field">
                            <label>วันที่</label>
                            <input type="date" placeholder="วันที่" id="day1" name="day1" required>
                        </div>
                        <div class="input-field">
                            <label>เวลาเริ่ม</label>
                            <input type="time" placeholder="เวลาที่ทำการจัดกี่โมงถึงกี่โมง" id="timestart1" name="timestart1" required>
                        </div>
                        <div class="input-field">
                            <label>เวลาจบ</label>
                            <input type="time" placeholder="เวลาที่ทำการจัดกี่โมงถึงกี่โมง" id="timeend1" name="timeend1" required>
                        </div>
                        <div class="input-field">
                            <label>คะแนน</label>
                            <input type="number" placeholder="คะแนน" id="score1" name="score1" required>
                        </div>
                        <button class="sumbit">
                            <input class="btnText" type="submit" name="submit1" value="ลงข้อมูล">
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
