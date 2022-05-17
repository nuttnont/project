<?php
@ini_set('display_errors', '0');
$menu = "new_machine";
$title = "เพิ่มเครื่องจักรใหม่";
include("header.php"); ?>
<?php

// session_start();



if (isset($_POST['submits'])) {
    $Machine_Horsepower = $_POST['Machine_Horsepower'];
    $Machine_Brand = $_POST['Machine_Brand'];
    $Machine_Model = $_POST['Machine_Model'];
    $Machine_Type = $_POST['Machine_Type'];
    $sql = "SELECT * FROM machine Order BY Machine_Id DESC";
    // $sqll = "SELECT COUNT('Machine_Id') FROM machine WHERE Users_id = $sem ";
    // $resultupdate2 = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_row($resultupdate2);
    $sta = mysqli_query($conn, $sql);
    // $stal = mysqli_query($conn, $sqll);

    // $rowl = mysqli_fetch_row($stal);
    $status1 = "0";

    while ($row = mysqli_fetch_array($sta)) {
        $aa1 = $row['Machine_Type'];
        $aa2 = $row['Machine_Brand'];
        $aa3 = $row['Machine_Model'];
        if ($aa1 == $Machine_Type) {
            if ($aa2 == $Machine_Brand) {
                if ($aa3 == $Machine_Model) {
                    $status1 = "1";
                }
            }
        }
    }
    if($status1 == "1"){
        // echo "<script>alert('เครื่องจักรนี้มีอยู่แล้วนะจ๊ะ');</script>";
        echo "<script>toastr.error('เครื่องจักรนี้มีอยู่แล้ว');</script>";
    }else{
        $sql = "SELECT * FROM machine Order BY Machine_Id DESC LIMIT 1";
        $resultupdate2 = mysqli_query($conn, $sql);
        $row = mysqli_fetch_row($resultupdate2);
        $id111 = $row[0] + 1;
            $query1 = "INSERT INTO machine (Machine_id,Machine_Type, Machine_Horsepower, Machine_Brand,Machine_Model,Users_id)
                            VALUE ('$id111','$Machine_Type','$Machine_Horsepower','$Machine_Brand','$Machine_Model','$sem')";
            $result = mysqli_query($conn, $query1);
            // echo $query1;
            // echo $row[0]+1;
            if ($result) {
                // echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
                // header('location:machine.php?msg=add');
                echo "<meta http-equiv='refresh' content='0.01;url=machine.php?msg=add'>";
                // echo "<meta http-equiv='refresh' content='0.2;url=machine.php'>";
                // echo "<script>toastr.success('บันทึกข้อมูลเรียบร้อย');</script>";
            } else {
                echo "<script>alert('บันทึกข้อมูลผิดพลาด');</script>";
                // header("Location: dashboard/machine.php");
            }
    }
    
//     echo $row['Machine_Type'] . " = " . $Machine_Type;
// echo "<br>";
//     echo $row['Machine_Brand'] . " = " . $Machine_Brand;
//     echo "<br>";
//     echo $row['Machine_Model'] . " = " . $Machine_Model;
//     echo "<br>";
    // echo $status1;


    // if ($row[3] == $Machine_Model) {
    //     echo "<script>alert('รุ่นนี้ถูกใช้ไปแล้ว กรุณากรอกใหม่อีกครั้ง');</script>";
    // } else {

    //     // if (isset(['row'])) {
    //     $id111 = $row[0] + 1;
    //     $query1 = "INSERT INTO machine (Machine_id,Machine_Type, Machine_Horsepower, Machine_Brand,Machine_Model,Users_id)
    //                     VALUE ('$id111','$Machine_Type','$Machine_Horsepower','$Machine_Brand','$Machine_Model','$sem')";
    //     $result = mysqli_query($conn, $query1);
    //     // echo $query1;
    //     // echo $row[0]+1;
    //     if ($result) {
    //         echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    //         echo "<meta http-equiv='refresh' content='0.2;url=machine.php'>";
    //     } else {
    //         echo "<script>alert('บันทึกข้อมูลผิดพลาด');</script>";
    //         // header("Location: dashboard/machine.php");
    //     }
    // }
}
?>

<link rel="stylesheet" href="css/report.css">

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid col-md-11">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="nav-icon fas fa-pencil-square-o"></i> <?php echo $title; ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
                    <li class="breadcrumb-item"><a href="machine.php">ข้อมูลเครื่องจักร</a></li>
                    <li class="breadcrumb-item"><?php echo $title; ?></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">


    <div class="row justify-content-center">
        <div class="col-md-11">
            <form oction="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">ข้อมูลเครื่องจักร</h3>
                    </div>
                    <br>
                    <div class="card-body px-3 p-1 pb-3">
                        <div class="row justify-content-center">
                            <div class="col-md-12">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ประเภทเครื่องจักร</label>
                                            <select class="form-control" name="Machine_Type" required>
                                                <option>รถแทรกเตอร์</option>
                                                <option>รถตัก</option>
                                                <option>รถขุด</option>
                                                <option>เครื่องอัดลม</option>
                                                <option>เครื่องเจาะ</option>
                                                <option>เครื่องเจาะแจคแฮมเมอร์</option>
                                                <option>เครื่องสูบทราย</option>
                                                <option>เครื่องสูบน้ำ</option>
                                                <option>รถบรรทุกเทหลัง</option>
                                                <option>รถบรรทุกน้ำ</option>
                                                <option>สายพานลำเลียง</option>
                                                <option>การขนส่งด้วยลวดสลิง</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>แรงม้า</label>
                                            <input type="text" class="form-control" placeholder="..." id="showdata"
                                                name="Machine_Horsepower" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ยี่ห้อ</label>
                                            <input type="text" class="form-control" placeholder="..." id="showdata"
                                                name="Machine_Brand" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>รุ่น</label>
                                            <input type="text" class="form-control" placeholder="..." id="showdata"
                                                name="Machine_Model" required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <button type="submit" class="submit-btn" name="submits">บันทึก</button>
                </div>
            </form>
        </div>
        <!-- /.col -->
    </div>
</section>
<!-- /.content -->

<?php include('footer.php'); ?>

<!-- <script src="js/report.js"></script> -->

</body>

</html>