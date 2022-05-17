<?php 

    session_start();

    if(isset($_POST['User_email'])) {

        include('connection.php');

        $User_email = $_POST['User_email'];
        $User_password = $_POST['User_password'];
        // $passwordenc = ($User_password);

        $query = "SELECT * FROM user WHERE User_email = '$User_email' AND User_password = '$User_password' ";

        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['User_email'] = $row['User_email'];

            $_SESSION['ids'] = $row['Users_id'];
            $_SESSION['User_type'] = $row['User_type'];
            if($row['User_type'] = 'e'){
                $id = $row['Users_id'];
                $query1 = "SELECT * FROM user,area_engineering WHERE user.Users_id = area_engineering.Users_id AND user.Users_id = $id ";

                $result1 = mysqli_query($conn, $query1);
                echo $id;
                $row1 = mysqli_fetch_array($result1);
                echo "1";
                echo $row1['Area_id'];
                $_SESSION['ide'] = $row1['Area_id'];
                echo  $_SESSION['ide'];
            }
            echo $row['User_type'];
            if ($_SESSION['User_type'] == 'e') {
                header("Location: engineer/index.php");
            }
            if ($_SESSION['User_type'] == 'm') {
                header("Location: dashboard/index.php");
            }
        } else {
            echo "<script>alert('Email หรือ Password ไม่ถูกต้อง');</script>";
            echo "<meta http-equiv='refresh' content='0.2;url=index.php'>";
            
            // echo "<script>alert('Email หรือ Password ไม่ถูกต้อง');</script>";
            // header("Location: index.php");

        }
    } 

?>