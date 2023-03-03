<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Home1.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>
  <body>
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
              <a href="">
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
          <img src="getstudentimage.jpg" alt="profile" />
          <div>
            <h1 class="Name">นาย.จีรเดช วงษ์ขำ</h1>
            <h1 class="Branch">สาขา.วิทยาการคอมพิวเตอร์</h1>
          </div>
        </div>
      </div>
      <div class="research">
      <body>
        <div class="container">
            <div class="row">
              <div class="col-md-1"></div>
                <div class="col-md-10"> <br>
                    <h3>PHP PDO Basic Upload PDF File</h3>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" name="doc_name" required class="form-control" placeholder="ชื่อเอกสาร"> <br>
                        <font color="red">*อัพโหลดได้เฉพาะ .pdf เท่านั้น </font>
                        <input type="file" name="doc_file" required   class="form-control" accept="application/pdf"> <br>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                    <h3>รายการเอกสาร </h3>
                    <table class="table table-striped  table-hover table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th width="5%">ลำดับ</th>
                                <th width="85%">ชื่อเอกสาร</th>
                                <th width="10%">เปิดดู</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //คิวรี่ข้อมูลมาแสดงในตาราง
                            require_once 'connect.php';
                            $stmt = $conn->prepare("SELECT* FROM tbl_pdf");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            foreach($result as $row) {
                            ?>
                            <tr>
                                <td><?= $row['no'];?></td>
                                <td><?= $row['doc_name'];?></td>
                                <td><a href="docs/<?php echo $row['doc_file'];?>" target="_blank" class="btn btn-info btn-sm"> เปิดดู </a></td>
                            <?php } ?>
                        </tbody>
                    </table>
                    <br>
                    <center>PHP PDO Basic Upload PDF file  by devbanban.com 2021
                    <br>
                      <a href="https://devbanban.com/?cat=250" target="_blank">คอร์สออนไลน์ คลิก</a>  ||  
                      <a href="https://devbanban.com/?p=3196" target="_blank">ระบบพร้อมใช้ คลิก</a>
                      </center>
                </div>
            </div>
        </div>
    </body>
      </div>
    </nav>
    <script src="Home.js"></script>
  </body>
</html>
