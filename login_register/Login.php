<?php 

include('DataRegister.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                    
</head>
<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <div class="logo">
                    <img src="a/logo.png" alt="">
                </div>
                <header class="h-txt">ลงชื่อเข้าใช้</header>
                <form action="#" method="POST">
                <div class="error"> <?php echo $error2; ?></div>
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input" name="email">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password" name="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="form-link">
                        <a href="#" class="forgot-pass">ลืมรหัสผ่าน</a>
                    </div>

                    <div class="field">
                    <input class="button-field" type="submit" value="เข้าสู่ระบบ" name="login"> 
                    </div>
                </form>
                <div class="form-link">
                    <span>ไม่มีรหัสผ่าน <a href="#" class="link signup-link">คลิก</a></span>
                </div>
            </div>
        </div>
        
        <div class="form signup">
            <div class="form-content">
                <div class="logo">
                    <img src="a/logo.png" alt="">
                </div>
                <header class="h-txt">สมัคสมาชิค</header>
                <form action="#" method="POST">
                <div class="error"> <?php echo $error; ?></div>
                    <div class="field input-field">
                        <input type="username" placeholder="username" class="input" name="name">
                    </div>
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input" name="email">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Create password" class="password" name="password">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Confirm password" class="password" name="Cpassword">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field">
                        <input class="button-field" type="submit" name="Register" value="ลงชื่อ">
                    </div>
                </form>

                <div class="form-link">
                    <span>เข้าสู่ระบบ <a href="#" class="link login-link">คลิก</a></span>
                </div>
            </div>
        </div>
    </section>

    <script src="Home1.js"></script>

</body>
</html>

