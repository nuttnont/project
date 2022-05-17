<?php
$menu = "profile";
$title = "ข้อมูลส่วนตัว";
include("header.php"); ?>
<?php 

//session_start();

// require_once "../connection.php";

// if (isset($_POST['submits'])) {
        
//     // $Month = $_POST['Month'];


//     $Fd_Benzene = $_POST['Fd_Benzene'];
//     $Fd_Diesel = $_POST['Fd_Diesel'];
//     $Fd_Lubricating_Oil = $_POST['Fd_Lubricating_Oil'];
//     $Fd_Electricity = $_POST['Fd_Electricity'];
//     // $Fuel_details_other = $_POST['Fuel_details_other'];

    
//     $E_Meterial = $_POST['E_Meterial'];
//     $E_Cap = $_POST['E_Cap'];
//     $E_Ammonia = $_POST['E_Ammonia'];
//     // $Explosive_other = $_POST['Explosive_other'];

//     $Amount_Employee = $_POST['Amount_Employee'];
//     $Amount_Day = $_POST['Amount_Day'];

//     // $Mineral_details_month = $_POST['Mineral_details_month'];
//     // $Mineral_details_sell_ore = $_POST['Mineral_details_sell_ore'];
//     // $Mineral_details_dress_ore = $_POST['Mineral_details_dress_ore'];
//     // $Mineral_details_production = $_POST['Mineral_details_production'];
//     // $Mineral_details_beginning_balance = $_POST['Mineral_details_beginning_balance'];
//     // $Mineral_details_balance = $_POST['Mineral_details_balance'];
            
//             // $Mine_Id = mysqli_query($conn, "SELECT * FROM mine order by Mine_Id asc");

//             // $mine_Id_Na = "SELECT * FROM mine order by Mine_Id asc";//LIMIT 1
//             // $result1 = mysqli_query($conn, $mine_Id_Na);

//             // $Mine_Id = "191" ;

//             // $query1 = "INSERT INTO minning (Mine_Id,Month, Fd_Benzene, Fd_Diesel,Fd_Lubricating_Oil,Fd_Electricity,E_Meterial,E_Cap,E_Ammonia,Amount_Employee,Amount_Day)
//             //             VALUE ('$Mine_Id','สิงหา', '$Fd_Benzene', '$Fd_Diesel', '$Fd_Lubricating_Oil','$Fd_Electricity','$E_Meterial','$E_Cap','$E_Ammonia','$Amount_Employee','$Amount_Day')";
//             // $result = mysqli_query($conn, $query1);

//             // $query2 = "INSERT INTO explosive_details (Explosive_fertilizer_monier, Explosive_cap,Explosive_meterial,Explosive_other)
//             //             VALUE ('$Explosive_fertilizer_monier', '$Explosive_cap', '$Explosive_meterial','$Explosive_other')";
//             // $result = mysqli_query($conn, $query2);

//             // $query3 = "INSERT INTO report (Report_number_of_employees, Report_workimg_days)
//             //             VALUE ('$Report_number_of_employees', '$Report_workimg_days')";
//             // $result = mysqli_query($conn, $query3);

//             // $query4 = "INSERT INTO mineral_details (Mineral_details_month, Mineral_details_sell_ore,Mineral_details_dress_ore,Mineral_details_production,Mineral_details_beginning_balance,Mineral_details_balance)
//             //             VALUE ('$Mineral_details_month', '$Mineral_details_sell_ore','$Mineral_details_dress_ore', '$Mineral_details_production','$Mineral_details_beginning_balance','$Mineral_details_balance')";
//             // $result = mysqli_query($conn, $query4);

//             if ($result) {
//                 echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
//                 //header("Location: index.php");
//             } else {
//                 echo "<script>alert('บันทึกข้อมูลผิดพลาด');</script>";
//                 //header("Location: index.php");
//             }
//         }
?>
<link rel="stylesheet" href="css/report.css">

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid col-md-11">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="nav-icon fas fa-user"></i> <?php echo $title; ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
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
            <form>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">รายละเอียดผู้ถือประทานบัตร</h3>
                    </div>
                    <br>
                    <div class="card-body px-3 p-1 pb-3">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <form role="form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>เลขที่ประทานบัตร</label>
                                                <select class="form-control" id="selectdata">
                                                    <?php
                                                        $query = mysqli_query($conn, "SELECT * FROM license,license_mineral,mineral,mine where license.License_id = license_mineral.License_id and license_mineral.Mineral_Id = mineral.Mineral_Id and mine.Mine_Id = license.Mine_Id and Users_id = $sem order by license_mineral.License_id asc") or die (mysqli_error($conn));
                                                        while ( $row=mysqli_fetch_assoc($query)) {
                                                        echo "<option value=' 'data-showdata=' ".$row['License_name']."
                                                        'data-showdata_2=' ".$row['License_District']."
                                                        'data-showdata_3=' ".$row['License_Sub_District']."
                                                        'data-showdata_4=' ".$row['License_Province']."
                                                        'data-showdata_5=' ".$row['License_Expired_Date']."
                                                        'data-showdata_6=' ".$row['Mineral_Name']."
                                                        'data-showdata_7=' ".$row['License_Inerhitor_Name']."
                                                        'data-showdata_8=' ".$row['Engineer_Name']."
                                                        'data-showdata_9=' ".$row['Professional_license']."
                                                        'data-showdata_10=' ".$row['License_Wa']."
                                                        'data-showdata_allowed=' ".$row['License_Allowed_Date']."
                                                        'data-showdata_rai=' ".$row['License_Rai']."
                                                        'data-showdata_ngan=' ".$row['License_Ngan']."
                                                        'data-showdata_wa=' ".$row['License_Wa']."
                                                        '>".$row['License_id']."</option>";
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>ชื่อผู้ถือประทานบัตร</label>
                                                <input type="text" class="form-control" placeholder="..." disabled=""
                                                    id="showdata">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>ตั้งอยู่ที่ จังหวัด</label>
                                                <input type="text" class="form-control" placeholder="..." disabled=""
                                                    id="showdata_2">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>อำเภอ</label>
                                                <input type="text" class="form-control" placeholder="..." disabled=""
                                                    id="showdata_3">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>ตำบล</label>
                                                <input type="text" class="form-control" placeholder="..." disabled=""
                                                    id="showdata_4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>ชนิดแร่</label>
                                                <input type="text" class="form-control" placeholder="..." disabled=""
                                                    id="showdata_6">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>วันที่อนุญาตประทานบัตร</label>
                                                <input type="text" class="form-control" placeholder="..." disabled=""
                                                    id="showdata_5">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>ประทานบัตรสิ้นอายุ</label>
                                                <input type="text" class="form-control" placeholder="..." disabled=""
                                                    id="showdata_allowed">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>ชื่อผู้รับช่วงการทำเหมือง</label>
                                                <input type="text" class="form-control" placeholder="..." disabled=""
                                                    id="showdata_7">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>ชื่อวิศวกรผู้ควบคุม</label>
                                                <input type="text" class="form-control" placeholder="..." disabled=""
                                                    id="showdata_8">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>เลขที่ใบอนุญาตประกอบวิชาชีพ</label>
                                                <input type="text" class="form-control" placeholder="..." disabled=""
                                                    id="showdata_9">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>พื้นที่(ไร่)</label>
                                                <input type="text" class="form-control" placeholder="..." disabled=""
                                                    id="showdata_rai">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>พื้นที่(งาน)</label>
                                                <input type="text" class="form-control" placeholder="..." disabled=""
                                                    id="showdata_ngan">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>พื้นที่(วา)</label>
                                                <input type="text" class="form-control" placeholder="..." disabled=""
                                                    id="showdata_wa">
                                            </div>
                                        </div>
                                    </div>


                                </form>
                            </div>



                        </div>

                    </div>

                </div>
                <!-- <div class="row justify-content-center mb-3">
                        <input type="button" name="submit" id="submit" class="btn btn-success"
                            value="แสดงตัวอย่างเอกสาร" />
                    </div> -->
            </form>
        </div>
        <!-- /.col -->
    </div>
</section>
<!-- /.content -->
<!-- /.content -->

<?php include('footer.php'); ?>

<script src="js/report.js"></script>

<script>
$(function() {
    $(".datatable").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // });
});
</script>

</body>

</html>