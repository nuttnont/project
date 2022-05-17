<?php 

    session_start();

    require_once "connection.php";

    if (isset($_POST['submit'])) {

        $User_email = $_POST['User_email'];
        $User_password = $_POST['User_password'];
        // $User_password_2 = $_POST['User_password_2'];
            
            $email_check = "SELECT * FROM user WHERE User_email = '$User_email' LIMIT 1";
            $result2 = mysqli_query($conn, $email_check);
            $email = mysqli_fetch_assoc($result2);
            
           
            if ($email['User_email'] == $User_email) {
                echo "<script>alert('Email นี้ถูกใช้ไปแล้ว กรุณากรอกใหม่อีกครั้ง');</script>";
            } else {
                $passwordenc = md5($User_password);

            
    
                $query = "INSERT INTO user (User_email, User_password,User_type)
                            VALUE ('$User_email', '$passwordenc', 'm')";
                $result = mysqli_query($conn, $query);
    
                if ($result2) {
                    $_SESSION['success'] = "Insert user successfully";
                    header("Location: reg_confirm.php");
                } else {
                    $_SESSION['error'] = "Something went wrong";
                    header("Location: register.php");
                }
            }

        }
       
    
?>

<head>
    <!-- Required meta tags -->
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <form oction="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; transition: 770ms cubic-bezier(0.51, 0.04, 0.12, 0.99); overflow: hidden;"
            class="content">
            <div class="container">
                <div class="row">
                    <div style="text-align: center;" class="col-md-6 order-md-2">
                        
                    </div>
                    <div class="col-md-6 contents">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="shadow-lg p-3 mb-5 bg-body rounded">
                                    <form>
                                        <h2>
                                            <p style="color: #0f1176;" class="text-center">ลงทะเบียน</p>
                                        </h2>
                                        <div class="mb-3">
                                            <span class="input-icon">
                                                <i style="padding: .55rem .75rem; margin-right: -40px; z-index: 1; width: 40px;"
                                                    class="fa fa-envelope" aria-hidden="true"></i>
                                                <input
                                                    style="padding-left: 40px;background-color: #eeeeee;border: none;"
                                                    type="email" class="form-control" id="InputEmail" name="User_email"
                                                    aria-describedby="emailHelp" placeholder="อีเมล">
                                            </span>
                                        </div>
                                        <div class="mb-3">
                                            <span class="input-icon">
                                                <i style="padding: .6rem .9rem; margin-right: -40px; z-index: 1; width: 40px;"
                                                    class="fa fa-lock" aria-hidden="true"></i>
                                                <input
                                                    style="padding-left: 40px;background-color: #eeeeee;border: none;"
                                                    type="password" class="form-control" id="InputPassword"
                                                    name="User_password" placeholder="รหัสผ่าน">
                                            </span>
                                        </div>
                                        <div class="mb-3">
                                            <span class="input-icon">
                                                <i style="padding: .6rem .9rem; margin-right: -40px; z-index: 1; width: 40px;"
                                                    class="fa fa-lock" aria-hidden="true"></i>
                                                <input
                                                    style="padding-left: 40px;background-color: #eeeeee;border: none;"
                                                    type="password" class="form-control" id="InputPassword"
                                                    name="User_password_2" placeholder="ยืนยันรหัสผ่าน">
                                            </span>
                                        </div>
                                        <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
                                        <div class="d-grid gap-2">
                                            <button style="background: #409d28;border: none;" type="submit"
                                                name="submit"
                                                class="btn btn-primary btn-lg btn-block btn-success">ลงทะเบียน</button>
                                        </div>
                                    </form>
                                </div>
                                <h3>
                                    <p style="color: #0f1176;" for="reg" class="text-center">มีบัญชีอยู่แล้ว? <a
                                            style="color: #409d28;" href="index.php" class="login"
                                            role="button">เข้าสู่ระบบ</a>
                                    </p>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
</body>