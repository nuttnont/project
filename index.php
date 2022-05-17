<?php 

    session_start();
?>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!------ Include the above in your HEAD tag ---------->

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>


    <div style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; transition: 770ms cubic-bezier(0.51, 0.04, 0.12, 0.99); overflow: hidden;"
        class="content">
        <div class="container">
            <div class="row">
                <div style="text-align: center;" class="col-md-6 order-md-2">
                    <img style="width: 50%; margin-bottom: 30px;" src="img/bn_logo.png" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="shadow-lg p-3 mb-5 bg-body rounded">
                                <form action="login.php" method="POST">
                                    <h2>
                                        <p style="color: #0f1176;" class="text-center">เข้าสู่ระบบ</p>
                                    </h2>
                                    <div class="mb-3">
                                        <span class="input-icon">
                                            <i style="padding: .55rem .75rem; margin-right: -40px; z-index: 1; width: 40px;"
                                                class="fa fa-envelope" aria-hidden="true"></i>
                                            <input style="padding-left: 40px;background-color: #eeeeee;border: none;"
                                                type="email" class="form-control" id="InputEmail" name="User_email"
                                                aria-describedby="emailHelp" placeholder="อีเมล">
                                        </span>
                                    </div>
                                    <div class="mb-3">
                                        <span class="input-icon">
                                            <i style="padding: .6rem .9rem; margin-right: -40px; z-index: 1; width: 40px;"
                                                class="fa fa-lock" aria-hidden="true"></i>
                                            <input style="padding-left: 40px;background-color: #eeeeee;border: none;"
                                                type="password" class="form-control" id="InputPassword" name="User_password"
                                                placeholder="รหัสผ่าน">
                                        </span>
                                    </div>
                                    <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
                                    <div class="d-grid gap-2">
                                        <button style="background: #409d28;border: none;" type="submit"
                                            class="btn btn-primary btn-lg btn-block btn-success">เข้าสู่ระบบ</button>
                                    </div>
                                    <!-- <p for="forget-pw" class="text-end p-2"><a
                                            style="color:#ffa300; text-decoration: none;" href="forgotpassword.php"
                                            class="btn btn-link" role="button">ลืมรหัสผ่าน?</a></p> -->
                                </form>
                            </div>
                            <!-- <h3>
                                <p for="reg" class="text-center"><a style="color: #0f1176;" href="register.php"
                                        class="reg" role="button">ลงทะเบียน</a>
                                </p>
                            </h3> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

 <?php 

