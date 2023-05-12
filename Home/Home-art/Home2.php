<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Home2.css" />
    <link rel="stylesheet" href="styles.css" >
    <script defer src="script.js"></script>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>
  <body>
  <?php 
    include('DataRegister.php'); 
    include('DataLoRe.php'); 
  ?>
    <nav class="sidebar closer toggle toggle1">
      <header1>
        <div class="logo">
          <span class="logo1">
            <img src="logo.png" alt="logo" />
          </span>
          <div class="tex_img">
            <span class="tex_name">CRU : มหาวิทยาลัยราชภัฏจันทรเกษม</span>
          </div>
        </div>
        <div class="arrow">
          <i class="bx bxs-chevrons-right right-arrow toggle2"></i>
        </div>
        <div class="manu">
          <span class="manu1">
            <li class="tex_tex1">
              <a href="">
                <i class="bx bx-home icon_manu"></i>
                <span class="tex1">หน้าแรก</span>
              </a>
            </li>
            <li class="tex_tex1">
              <a href="">
                <i class="bx bx-book icon_manu"></i>
                <span class="tex1">การเรียนการสอน</span>
              </a>
            </li>
            <li class="tex_tex1">
              <a href="">
                <i class="bx bx-child icon_manu"></i>
                <span class="tex1">วิจัย</span>
              </a>
            </li>
            <li class="tex_tex1">
              <a href="">
                <i class="bx bx-location-plus icon_manu"></i>
                <span class="tex1">บริการวิชาการ</span>
              </a>
            </li>
            <li class="tex_tex1">
              <a href="">
                <i class="bx bx-book-content icon_manu"></i>
                <span class="tex1">ศิลปะวัฒนะธรรม</span>
              </a>
            </li>
            <li class="tex_tex1">
              <a href="">
                <i class="bx bx-phone icon_manu"></i>
                <span class="tex1">ติดต่อเรา</span>
              </a>
            </li>
            <li class="tex_tex1 logout">
              <a href="logout.php" name="submit1">
                <i class='bx bx-log-out icon_manu' ></i>
                <span class="tex1">ออกจากระบบ</span>
              </a>
            </li>
          </span>
        </div>
      </header1>
    </nav>
    <nav class="content">
      <div class="top_bar">
        <div class="profile">
          <img src="" alt="profile" />
          <div>
            <h1 class="Name">นาย.จีรเดช วงษ์ขำ</h1>
            <h1 class="Branch">สาขา.วิทยาการคอมพิวเตอร์</h1>
          </div>
        </div>
      </div>
      <div class="art">
        <h4 class="art_section">เรื่องศิลปะวัฒนะธรรม</h4>
        <table class="art_table">
          <thead class="art_thead">
            <tr class="a-t-h">
              <th>ชื่องาน</th>
              <th>ไฟล์งาน</th>
              <th>ไฟล์รูปภาพ</th>
              <th>เวลาเริ่ม</th>.
              <th>เวลาเสร็จ</th>
              <th>เวลารวม</th>
              <th>วันที่</th>
              <th>คะแนน</th>
            </tr>
          </thead >
          <tbody class="art_tbody">
          <?php 
            if (isset($_SESSION['Id'])) {
              $Id = $_SESSION['Id'];
              $sql = "SELECT * FROM art WHERE Id_identity = '$Id'";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($result)){
          ?>
                <tr>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['file']; ?></td>
                  <td><?php echo $row['picture']; ?></td>
                  <td><?php echo $row['timestart']; ?></td>
                  <td><?php echo $row['timeend']; ?></td>
                  <td><?php echo $row['collect_alltime']; ?></td>
                  <td><?php echo $row['day']; ?></td>
                  <td><?php echo $row['score']; ?></td>
                </tr>
          <?php 
              }
            }
          ?>
          </tbody>
        </table>
        
        <div class="conbut1">
          <a href="from.php" class="button1">เพื่มข้อมูล</a>
        </div>
        
      </div>
    </nav>
    
    <script src="Home.js"></script>

  </body>
</html>
