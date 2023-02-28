<?php 
session_start();
$error = "";
if (array_key_exists("Register", $_POST)) {

include('DataLoRe.php');  

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn,  $_POST['password']); 
$Cpassword = mysqli_real_escape_string($conn, $_POST['Cpassword']); 

    if (!$name) {
    $error .= "ไม่ได้ใส่ยูสเซอ <br>";
    }
    if (!$email) {
    $error .= "ไม่ได้ใส่อีเมล <br>";
    }
    if (!$password) {
    $error .= "ไม่ใส่รหัสผ่าน <br>";
    } 
    if ($password !== $Cpassword) {
    $error .= "รหัสผ่านไม่ตรงกัน <br>";
    }
    if ($error) {
    $error = "<br> ไม่สามารถสมัคได้เนื่องจาก <br>".$error;
    }  else {
    
        $query = "SELECT id FROM regis WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $error .="<p>มีอีเมลนี้ในระบบแล้ว</p>";
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 
            $query = "INSERT INTO regis (username, email, Pass) VALUES ('$name', '$email', '$hashedPassword')";
            if (!mysqli_query($conn, $query)){
                $error ="<p>ไม่สามารถลงทะเบียนได้โปรดลองอีกครั้ง</p>";
                } else {
                $_SESSION['id'] = mysqli_insert_id($conn);  
                $_SESSION['name'] = $name;
                if ($_POST['stayLoggedIn'] == '1') {
                setcookie('id', mysqli_insert_id($conn), time() + 60*60*365);
                }
                header("Location: Login.php");  
                }
            }
        }  
    }


    $error2 = "";
    if (array_key_exists("login", $_POST)) {

        include('DataLoRe.php');  
        
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn,  $_POST['password']); 
            
            if (!$email) {
                $error2 .= "ต้องใส่อีเมล <br>";
            }
            if (!$password) {
                $error2 .= "ต้องใส่พาสเวิส <br>";
            } 
            if ($error2) {
                $error2 = "<b>ไม่สามารถเข้าได้เนื้องจาก<br>".$error2;
            }
            
            else {        
                
                $query = "SELECT * FROM regis WHERE email='$email'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);
                
                if (isset($row)) {
                        
                    if (password_verify($password, $row['Pass'])) {
        
                        $_SESSION['id'] = $row['id'];  
        
                        if ($_POST['stayLoggedIn'] == '1') {
                        setcookie('id', $row['id'], time() + 60*60*24);
                        }
        
                        header("Location: Home/Home1.php");
        
                    } else {
                        $error2 = "อีเมลหรือรหัสผ่านไม่ถูกต้อง";
                            }
        
                }  else {
                    $error2 = "อีเมลหรือรหัสผ่านไม่ถูกต้อง";
                        }
            }
    }
?>