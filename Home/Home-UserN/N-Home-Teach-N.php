<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="N-Home-ALL-H&N.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"rel="stylesheet"
    />
    <title>Document</title>
  </head>
  <body>
  <?php 
    include('DataRegister.php'); 
    include('DataLoRe.php'); 
    ?>
    <?php include('N-topbar.php'); ?>
    <?php include('N-sidebar.php'); ?>
      <div class="art">
      <h4 class="art_section">ตารางสอน</h4>
      <div class="timetable">
        <body>
          <div class="container">
            <div class="table-container">
              <table>
                <thead>
                <tr>
                    <th class="large1">จันทร์</th>
                    <th class="large1">อังคาร</th>
                    <th class="large1">พุธ</th>
                    <th class="large1">พฤหัสบดี</th>
                    <th class="large1">ศุกร์</th>
                    <th class="large1">เสาร์</th>
                    <th class="large1">อาทิตย์</th>
                </tr>
                </thead>
            <tbody>
                <tr>
                <?php
                if (isset($_SESSION['Id'])) {
                    $Id = $_SESSION['Id'];
                    $sql = "SELECT * FROM teach WHERE Id_identity = '$Id' ORDER BY day";
                    $result = mysqli_query($conn, $sql);
                    $days = array('mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun');
                    $data_by_day = array();
                    while ($row = mysqli_fetch_array($result)) {
                        $data_by_day[$row['day']][] = $row;
                    }
                    // แสดงข้อมูลตามวัน
                    // หาจำนวนแถวสูงสุด
                    $maxRows = 0;
                    foreach ($days as $day) {
                        if (isset($data_by_day[$day])) {
                            $numRows = count($data_by_day[$day]);
                            if ($numRows > $maxRows) {
                                $maxRows = $numRows;
                            }
                        }
                    }
                    // สร้างแถวและแสดงข้อมูล
                    for ($i = 0; $i < $maxRows; $i++) {
                        echo '<tr>';
                        foreach ($days as $day) {
                            if (isset($data_by_day[$day][$i])) {
                                $data = $data_by_day[$day][$i];
                                echo '<td><a href="N-from-Teach-edit.php?day=' . $day . '&id=' . $data['id'] . '" class="buttonT"><span>' . $data['subject_name'] . '</span></a></td>';
                            } else {
                                echo '<td></td>';
                            }
                        }
                        echo '</tr>';
                    }
                }
                ?>
          </tr>
            </tbody>
                    <tr>
                      <td><a href="N-from-Teach.php?day=mon" class="buttonT"></a></td>
                      <td><a href="N-from-Teach.php?day=tue" class="buttonT"></a></td>
                      <td><a href="N-from-Teach.php?day=wed" class="buttonT"></a></td>
                      <td><a href="N-from-Teach.php?day=thu" class="buttonT"></a></td>
                      <td><a href="N-from-Teach.php?day=fri" class="buttonT"></a></td>
                      <td><a href="N-from-Teach.php?day=sat" class="buttonT"></a></td>
                      <td><a href="N-from-Teach.php?day=sun" class="buttonT"></a></td>
                    </tr>
                  </tbody>
                </table>
            </div>
          </div>
        </body>
      </div>
        <h4 class="art_section">ผลงานทั้งหมด
        <div class="box1">
            <form name="search">
              <input type="search" class="input" name="txt" placeholder="ค้นหา..." onmouseout="this.value = ''; this.blur();">
              <a href="from.php" class="button1"><i class="bx bxs-chevrons-right right-arrow toggle2"></i></a>
            </form>
          </div>
        </h4>
        <table class="art_table">
          <thead class="art_thead">
            <tr class="a-t-h">
              <th>ชื่องาน</th>
              <th>รายละเอียด</th>
            </tr>
          </thead >
          <tbody class="art_tbody">
          <?php 
            if (isset($_SESSION['Id'])) {
              $Id = $_SESSION['Id'];
              $sql = "SELECT * FROM art_service WHERE Id_identity = '$Id'";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($result)){
          ?>
                <tr>
                  <td><?php echo $row['name_art']; ?></td>
                  <td><?php echo $row['performance_art']; ?></td>
                </tr>
          <?php 
              }
            }
          ?>
          </tbody>
        </table>
      </div>
    </nav>
    
    <script src="Admin-Home.js"></script>

  </body>
</html>
