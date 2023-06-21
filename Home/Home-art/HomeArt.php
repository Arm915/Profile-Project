<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Home5.css" />
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
    <?php include('topbar.php'); ?>
    <?php include('sidebar.php'); ?>
    <nav class="content">
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
  </body>
</html>
