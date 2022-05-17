<?php
@ini_set('display_errors', '0');
$menu = "edit_report";
$title = "แก้ไขรายงาน";
include("header.php");


if (isset($_GET['month'],$_GET['year'],$_GET['mineid'],$_REQUEST["license"],$_GET["version"])) {
    $month = $_GET['month'];
    $year = $_GET['year'];
    $mineid = $_GET['mineid'];
    $license = $_REQUEST["license"];
    $version = $_GET["version"];
}
// $items = strval($license);


// $varmineid = 1001;
// $varmonth = 11;
// $varyear = 2563;
?>
<script>
    var id1 = 1;
    var id2 = 1;
    var id3 = 1;
    var id4 = 1;
    var id5 = 1;
    var id6 = 1;
</script>
<?php 

//session_start();

require_once "../connection.php";

// if (isset($_POST['submitss'])) {
//     // if (isset($_POST['submit1'])){
//         $Month = $_POST['month'];
//         $Year = $_POST['year'];

//         $Mine_Id = $_POST['Mines_Id'];

//         $Wa_New = $_POST['Wa_New'];
//         $Wa_Sum = $_POST['Wa_Sum'];
    
//         $Fd_Benzene = $_POST['Fd_Benzene'];
//         $Fd_Diesel = $_POST['Fd_Diesel'];
//         $Fd_Lubricating_Oil = $_POST['Fd_Lubricating_Oil'];
//         $Fd_Electricity = $_POST['Fd_Electricity'];
//         $Fd_Other = $_POST['Fd_Other'];
    
//         $E_N = $_POST['explosiveRadioOptions'];
//         $E_Meterial = $_POST['E_Meterial'];
//         $E_Cap = $_POST['E_Cap'];
//         $E_Ammonia = $_POST['E_Ammonia'];
//         $E_Other = $_POST['E_Other'];
    
    
//         $Amount_Employee = $_POST['Amount_Employee'];
//         $Amount_Day = $_POST['Amount_Day'];
        
    

//         $Mp_Quantity = $_POST['Mp_Quantity'];
//         $Mp_Dressing = $_POST['Mp_Dressing'];
//         $Mp_sell = $_POST['Mp_sell'];
//         $Mp_balance = $_POST['Mp_balance'];

//         $Mineral = $_POST['Mineral'];
//         $sql111 = "SELECT * FROM mineral WHERE Mineral_Name = '$Mineral'";
//         $result111 = mysqli_query($conn, $sql111);
//         $row222 = mysqli_fetch_assoc($result111);
//         $Mineral_Id = $row222['Mineral_Id'];
        
//         $condition = $_POST['condition'];

//         $Ds_domestic = $_POST['Ds_domestic'];
//         $Ds_buyer = $_POST['Ds_buyer'];
//         $Ds_Industry = $_POST['Ds_Industry'];
//         $Ds_receipt = $_POST['Ds_receipt'];
//         $Ds_export = $_POST['Ds_export'];
//         $Ds_royalty = $_POST['Ds_royalty'];
        // $Mineral_Id = $_POST['Mineral_Id'];
                
                // $Mine_Id = mysqli_query($conn, "SELECT * FROM mine order by Mine_Id asc");
    
                // $mine_Id_Na = "SELECT * FROM mine order by Mine_Id asc";//LIMIT 1
                // $result1 = mysqli_query($conn, $mine_Id_Na);
    
                // $Mine_Id = "191";
                // $Month = "4";
                // $Year = "2011";
// $xxx1 = $row111[1];
    
    //             $query1 = "INSERT INTO minning (Mine_Id,Month,Year,Wa_New,Wa_Sum,Fd_Benzene,Fd_Diesel,Fd_Lubricating_Oil,Fd_Electricity,Fd_Other
    //             ,E_Meterial,E_Cap,E_Ammonia,E_Other,Amount_Employee,Amount_Day,E_N)
    //                         VALUE ('$Mine_Id','$Month','$Year','$Wa_New','$Wa_Sum','$Fd_Benzene','$Fd_Diesel','$Fd_Lubricating_Oil','$Fd_Electricity','$Fd_Other'
    //                         ,'$E_Meterial','$E_Cap','$E_Ammonia','$E_Other','$Amount_Employee','$Amount_Day','$E_N')";
    //             $result = mysqli_query($conn, $query1);
    
    //             $query2 = "INSERT INTO mineral_production (Mine_Id,Month,Year,Mp_condition, Mp_Quantity,Mp_Dressing,Mp_sell,Mp_balance,Mineral_Id,Users_id)
    //                         VALUE ('$Mine_Id','$Month','$Year', '$condition', '$Mp_Quantity', '$Mp_Dressing','$Mp_sell','$Mp_balance','$Mineral_Id',$sem)";
    //             $result = mysqli_query($conn, $query2);
    
    //             $query3 = "INSERT INTO details_sale (Mine_Id,Month,Year,Ds_Property, Ds_domestic,Ds_buyer,Ds_Industry,Ds_receipt,Ds_export,Ds_royalty,Mineral_Id)
    //                         VALUE ('$Mine_Id','$Month','$Year', '$condition', '$Ds_domestic', '$Ds_buyer','$Ds_Industry','$Ds_receipt','$Ds_export','$Ds_royalty','$Mineral_Id')";
    //             $result = mysqli_query($conn, $query3);
    //                             $query6 = "INSERT INTO report (Mine_Id,Month,Year)
    //             VALUE ('$Mine_Id','$Month','$Year')";
    // $result = mysqli_query($conn, $query6);
    
                // $query3 = "INSERT INTO report (Report_number_of_employees, Report_workimg_days)
                //             VALUE ('$Report_number_of_employees', '$Report_workimg_days')";
                // $result = mysqli_query($conn, $query3);
    
                // $query4 = "INSERT INTO mineral_details (Mineral_details_month, Mineral_details_sell_ore,Mineral_details_dress_ore,Mineral_details_production,Mineral_details_beginning_balance,Mineral_details_balance)
                //             VALUE ('$Mineral_details_month', '$Mineral_details_sell_ore','$Mineral_details_dress_ore', '$Mineral_details_production','$Mineral_details_beginning_balance','$Mineral_details_balance')";
                // $result = mysqli_query($conn, $query4);
    
    
                // echo $query1;
                // echo "<br>";
                // echo $query2;
                // echo "<br>";
                // echo $query3;
                // echo "<br>";
                // echo $Mineral;
                // echo "<br>";
                // echo $row111['Mineral_Id'];
                // echo "<br>";
                // echo $Mineral_Id;
        //         if ($result) {
        //             echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
        //             echo "<meta http-equiv='refresh' content='0.1;url=report.php'>";
        //         } else {
        //             echo "<script>alert('บันทึกข้อมูลผิดพลาด');</script>"; 
        //         //     //header("Location: index.php");
        //         //     if ($result111) {
        //         //         echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
        //         //         // echo "<meta http-equiv='refresh' content='0.1;url=report.php'>";
        //         //     } else {
        //         //         echo "<script>alert('บันทึกข้อมูลผิดพลาด');</script>"; 
        //         //         //header("Location: index.php");
                        
        //         //     // }
        //         // }
        //         // }
        //     }
        // }
?>
<script language="javascript">
function fncCal() {

    // $wa = $rs['Wa_Sum'];
    // $fields =floor($wa/400);
    // $jobs =floor(($wa%400)/100);
    // $sqrMeters=floor(($wa%400)%100);

    $ww = parseInt(document.form1.Wa_a.value)
    document.form1.Rai_O.value = $ww / 400 | 0
    document.form1.Ngan_O.value = ($ww % 400) / 100 | 0
    document.form1.Wa_O.value = ($ww % 400) % 100 | 0





    document.form1.Sum_Rai.value = parseInt(document.form1.Rai_O.value) + parseInt(document.form1.Rai_N.value)
    document.form1.Sum_Ngan.value = parseInt(document.form1.Ngan_O.value) + parseInt(document.form1.Ngan_N.value)
    document.form1.Sum_Wa.value = parseInt(document.form1.Wa_O.value) + parseInt(document.form1.Wa_N.value)

    $SSR = parseInt(document.form1.Rai_O.value) + parseInt(document.form1.Rai_N.value)
    $SSN = parseInt(document.form1.Ngan_O.value) + parseInt(document.form1.Ngan_N.value)
    $SSW = parseInt(document.form1.Wa_O.value) + parseInt(document.form1.Wa_N.value)

    $rn = parseInt(document.form1.Rai_N.value) * 400
    $nn = parseInt(document.form1.Ngan_N.value) * 100
    document.form1.Wa_New.value = parseInt(document.form1.Wa_N.value) + $rn + $nn | 0

    $rs = parseInt(document.form1.Sum_Rai.value) * 400
    $ns = parseInt(document.form1.Sum_Ngan.value) * 100
    document.form1.Wa_Sum.value = parseInt(document.form1.Sum_Wa.value) + $rs + $ns | 0

    if ($SSW > 99) {
        $SW = $SSW / 100
        $SW_M = $SSW % 100
        document.form1.Sum_Wa.value = $SW_M
        $WSW = $SSN + $SW
        document.form1.Sum_Ngan.value = $WSW | 0
    }
    if (document.form1.Sum_Ngan.value > 3) {
        $SN = document.form1.Sum_Ngan.value / 4
        $SN_M = document.form1.Sum_Ngan.value % 4
        document.form1.Sum_Ngan.value = $SN_M
        $NSN = $SSR + $SN
        document.form1.Sum_Rai.value = $NSN | 0
    }



    // $Rai_O_Wa = parseInt(document.form1.Rai_O.value) * 400;
    // $Ngan_O_Wa = parseInt(document.form1.Ngan_O.value)*100;
    // $Wa_O_Wa = parseInt(document.form1.Wa_O.value)

    // $Rai_Wa = parseInt(document.form1.Rai_N.value) * 400 ;
    // $Ngan_Wa = parseInt(document.form1.Ngan_N.value) * 100 ;
    // $Wa_Wa = parseInt(document.form1.Wa_N.value) + $Rai_Wa + $Ngan_Wa + $Rai_O_Wa + $Ngan_O_Wa + $Wa_O_Wa

    // document.form1.Sum_Rai.value = $Wa_Wa/400
    // document.form1.Sum_Ngan.value = ($Wa_Wa%400)/100
    // document.form1.Sum_Wa.value= ($Wa_Wa%400)%100

    // $rs = document.form1.Rai.value
    if (document.form1.Rai.value - document.form1.Sum_Rai.value < 0) {
        // alert('เกิน')
        document.form1.Sum_Rai.value = "ข้อมูลไม่ถูกต้อง"
        document.form1.Sum_Ngan.value = "ข้อมูลไม่ถูกต้อง"
        document.form1.Sum_Wa.value = "ข้อมูลไม่ถูกต้อง"
    }

    if (document.form1.Sum_Rai.value - document.form1.Rai.value == 0) {
        // alert('เกิน')
        if (document.form1.Ngan.value - document.form1.Sum_Ngan.value < 0) {
            // alert('เกิน')
            document.form1.Sum_Ngan.value = "ข้อมูลไม่ถูกต้อง"
        }
        if (document.form1.Wa.value - document.form1.Sum_Wa.value < 0) {
            // alert('เกิน')
            document.form1.Sum_Wa.value = "ข้อมูลไม่ถูกต้อง"
        }
    }



}
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script>
$(document).ready(function() {
    $('#Tb_Machine_Brand').on('change', function() {
        var MachineID = $(this).val();
        if (MachineID) {
            $.ajax({
                type: 'POST',
                url: 'ajaxData.php',
                data: 'Machine_brand_Id=' + MachineID,
                success: function(html) {
                    $('#Machine_Model').html(html);
                }
            });
        } else {
            $('#Machine_Model').html('<option value="">โปรดเลือก.....</option>');
        }
    });
});
</script> -->
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
                    <li class="breadcrumb-item"><a href="report.php">รายงานเหมืองประจำเดือน</a></li>
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
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form" name="form1" id="form1">
                <div class="step step-1 active">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายงานการเหมืองประจำเดือน</h3>
                        </div>
                        <br>
                        <div class="card-body px-3 p-1 pb-3">
                            <div class="row justify-content-center">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                            <select class="form-control"  id="month" name="month" disabled>
                            <!-- <option value=''>เดือน</option> -->
                            <?php
                                if($month != ""){
                                $nameMonth = $month;
                                    if ($nameMonth == "1") {
                                        $nameMonth = "มกราคม";
                                    } else if ($nameMonth == "2") {
                                        $nameMonth = "กุมภาพันธ์";
                                    } else if ($nameMonth == "3") {
                                        $nameMonth = "มีนาคม";
                                    } else if ($nameMonth == "4") {
                                        $nameMonth = "เมษายน";
                                    } else if ($nameMonth == "5") {
                                        $nameMonth = "พฤษภาคม";
                                    } else if ($nameMonth == "6") {
                                        $nameMonth = "มิถุนายน";
                                    } else if ($nameMonth == "7") {
                                        $nameMonth = "กรกฎาคม";
                                    } else if ($nameMonth == "8") {
                                        $nameMonth = "สิงหาคม";
                                    } else if ($nameMonth == "9") {
                                        $nameMonth = "กันยายน";
                                    } else if ($nameMonth == "10") {
                                        $nameMonth = "ตุลาคม";
                                    } else if ($nameMonth == "11") {
                                        $nameMonth = "พฤศจิกายน";
                                    } else if ($nameMonth == "12") {
                                        $nameMonth = "ธันวาคม";
                                    }
                            echo '<option  value="' . $month . '" selected>' . $nameMonth . '</option>';
                            }
                            ?>
                        </select>
                                                <!-- <select class="form-control" name="month" id="month" method="post">
                                                    <option value=" ">เดือน</option>
                                                    <option value="1">มกราคม</option>
                                                    <option value="2">กุมภาพันธ์</option>
                                                    <option value="3">มีนาคม</option>
                                                    <option value="4">เมษายน</option>
                                                    <option value="5">พฤษภาคม</option>
                                                    <option value="6">มิถุนายน</option>
                                                    <option value="7">กรกฎาคม</option>
                                                    <option value="8">สิงหาคม</option>
                                                    <option value="9">กันยายน</option>
                                                    <option value="10">ตุลาคม</option>
                                                    <option value="11">พฤศจิกายน</option>
                                                    <option value="12">ธันวาคม</option>
                                                </select> -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                            <select class="form-control" id="year" name="year" disabled>
                                                <?php
                                                echo '<option  value="' . $year . '" selected>' . $year . '</option>';     
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายละเอียดผู้ถือประทานบัตร</h3>
                        </div>
                        <br>
                        <div class="card-body px-3 p-1 pb-3">
                            <div class="row justify-content-center">
                                <div class="col-md-12">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>เลขที่ประทานบัตร</label>
                                                <select class="form-control" id="selectdata">
                                                    <?php
                                                        // echo "<option>โปรดเลือก</option>";
                                                        
                                                        // $varmonth = $_POST['month'];
                                                        
                                                        $sql = "SELECT * FROM minning,license  where minning.Mine_Id = license.Mine_Id and license.Users_id = $sem  Order BY Month DESC";
                                                        $resultupdate2 = mysqli_query($conn, $sql);
                                                        $row1 = mysqli_fetch_assoc($resultupdate2);
                                                        $Month_N = $row1['Month'];


                                                        $sql = "SELECT * FROM mineral_production,license  where mineral_production.Mine_Id = license.Mine_Id and license.Users_id = $sem  Order BY Month DESC";
                                                        $resultupdate3 = mysqli_query($conn, $sql);
                                                        $row2 = mysqli_fetch_assoc($resultupdate3);
                                                        $M_balance = $row2['Month'];
                                                        // $query = mysqli_query($conn, "SELECT * FROM license,license_mineral,mineral,mine,minning where minning.month ");

                                                        // $varlastmonth = $varmonth - 1;
                                                        // $varmineid = 1002;
                                                        // $mineral_SQL = "SELECT * FROM mineral";
                                                        // $result = mysqli_query($conn, $mineral_SQL);
                                                        // $rs =  mysqli_fetch_assoc($result);
                                                        $query = mysqli_query($conn, "SELECT * FROM license,license_mineral,mineral,mine,minning,mineral_production where license.License_id = license_mineral.License_id and mine.Mine_Id = license.Mine_Id and  license_mineral.Mineral_Id = mineral.Mineral_Id and minning.Mine_Id = license.Mine_Id and minning.Month = $Month_N and mineral_production.Mine_Id = license.Mine_Id and mineral_production.Month = $M_balance And license.Users_id = $sem and minning.Version = $version order by license.License_id asc") or die (mysqli_error($conn));                                                        
                                                        
                                                        
                                                        // $sql5_2 = "SELECT * FROM minning,license WHERE minning.Mine_Id = license.Mine_Id AND license.License_id = $license AND minning.Month = $month AND minning.Year = $year and minning.Version = $version And license.Users_id = $sem";
                                                        // $result5_2 = mysqli_query($conn,$sql5_2);
                                                        // $row2 = mysqli_fetch_assoc($result5_2);
                                                        // //คำนวน wa to  ไร่ งาน วา ของ พื้นที่เดิม
                                                        // $wanew2 = $row2['Wa_New'];
                                                        // echo "<script>alert(".$wanew2.")</script>";
                                                        //  echo "<script>alert(".$wanew2.")</script>";
                                                        // $fieldssum2 = floor($wanew2 / 400); //ไร่
                                                        // $jobssum2 = floor(($wanew2 % 400) / 100); //งาน
                                                        // $sqrMeterssum2 = floor(($wanew2 % 400) % 100); //วา
                                                        // // $minning_SQL = "SELECT * FROM minning";
                                                        // // $result = mysqli_query($conn, $minning_SQL);
                                                        // // $rs =  mysqli_fetch_assoc($result);
                                                        // // $wa = $rs['Wa_Sum'];
                                                        // // $fields =floor($wa/400);
                                                        // // $jobs =floor(($wa%400)/100);
                                                        // // $sqrMeters=floor(($wa%400)%100);
                                                        
                                                        while ($row=mysqli_fetch_assoc($query)) {
                                                           
                                                            echo "<option value=' 'data-showdata=' ".$row['License_name']."'data-showdata_2=' ".$row['License_District']."'data-showdata_3=' ".$row['License_Sub_District']."'data-showdata_4=' ".$row['License_Province']."'data-showdata_5=' ".$row['License_Expired_Date']."'data-showdata_6=' ".$row['Mineral_Name']."'data-showdata_7=' ".$row['License_Inerhitor_Name']."'data-showdata_8=' ".$row['Engineer_Name']."'data-showdata_9=' ".$row['Professional_license']."'data-showdata_10=' ".$row['License_Rai']."'data-showdata_11=' ".$row['License_Ngan']."'data-showdata_12=' ".$row['License_Wa']."'data-showdata_14=' ".$row['Mp_balance']."'data-showdata_15=' ".$row['Wa_Sum']."'data-showdata_mineral='".$row['Mineral_Name']."'data-showdata_mineral2='".$row['Mineral_Name']."'data-showdata_16='".$row['Mine_Id']."'>".$row['License_id']."</option>";
                                                        }
                                                        // 'data-showdata_13=' ".$fields."
                                                        // 'data-showdata_14=' ".$Month_N."
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
                                                <label>ประทานบัตรสิ้นอายุ</label>
                                                <input type="text" class="form-control" placeholder="..." disabled=""
                                                    id="showdata_5">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>ชนิดแร่</label>
                                                <input type="text" class="form-control" placeholder="..." disabled=""
                                                    id="showdata_6">
                                            </div>
                                        </div>
                                        <div class="col-sm-4" style="display: none;">
                                            <div class="form-group">
                                                <label>รหัสเหมือง</label>
                                                <input type="text" class="form-control" name="Mines_Id"
                                                    id="showdata_16">

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
                                                <input type="text" class="form-control" name="Engineer_Name"
                                                    placeholder="..." disabled="" id="showdata_8">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>เลขที่ใบอนุญาตประกอบวิชาชีพ</label>
                                                <input type="text" class="form-control" name="Professional_license"
                                                    placeholder="..." disabled="" id="showdata_9">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">เนื้อที่ที่ได้รับประทานบัตร</h3>


                        </div>
                        <br>
                        <div class="card-body px-3 p-1 pb-3">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="row justify-content-center">
                                        <div class="form-group row col-sm-3 px-0 mx-0">
                                            <label for="example-text-input" class="col-3 col-form-label">จำนวน</label>
                                            <div class="col-6">
                                                <input class="form-control" type="text" placeholder="1"
                                                    id="example-text-input" disabled="">
                                            </div>
                                            <label for="example-text-input" class="col-3 col-form-label">แปลง</label>
                                        </div>
                                        <div class="form-group row col-sm-3 px-0 mx-0">
                                            <label for="example-text-input"
                                                class="col-3 col-form-label">รวมเนื้อที่</label>
                                            <div class="col-6">
                                                <input class="form-control" type="text" placeholder="..." name="Rai"
                                                    disabled="" id="showdata_10" readonly>
                                            </div>
                                            <label for="example-text-input" class="col-3 col-form-label">ไร่</label>
                                        </div>
                                        <div class="form-group row col-sm-3 px-0 mx-0">
                                            <label for="example-text-input" class="col-3 col-form-label"></label>
                                            <div class="col-6">
                                                <input class="form-control" type="text" placeholder="..." name="Ngan"
                                                    disabled="" id="showdata_11" readonly>
                                            </div>
                                            <label for="example-text-input" class="col-3 col-form-label">งาน</label>
                                        </div>
                                        <div class="form-group row col-sm-3 px-0 mx-0">
                                            <label for="example-text-input" class="col-3 col-form-label"></label>
                                            <div class="col-6">
                                                <input class="form-control" type="text" placeholder="..." name="Wa"
                                                    disabled="" id="showdata_12" readonly>
                                            </div>
                                            <label for="example-text-input" class="col-3 col-form-label">ตารางวา</label>
                                        </div>
                                    </div>
                                    <input class="form-control" type="text" name="Wa_a" disabled=""
                                        style="display: none;" placeholder="..." id="showdata_15" readonly>
                                    <div class="row justify-content-center">
                                        <div class="form-group row col-sm-3 px-0 mx-0">
                                            <label for="example-text-input"
                                                class="col-12 col-form-label">เนื้อที่ทำเหมืองในพื้นที่เดิม</label>
                                        </div>
                                        <div class="form-group row col-sm-3 px-0 mx-0">
                                            <label for="example-text-input" class="col-3 col-form-label">จำนวน</label>
                                            <div class="col-6" class="form-group">
                                                <input class="form-control" type="text" name="Rai_O" disabled=""
                                                    value="0" placeholder="..." id="example-text-input" readonly>
                                            </div>
                                            <label for="example-text-input" class="col-3 col-form-label">ไร่</label>
                                        </div>
                                        <div class="form-group row col-sm-3 px-0 mx-0">
                                            <label for="example-text-input" class="col-3 col-form-label"></label>
                                            <div class="col-6" class="form-group">
                                                <input class="form-control" type="text" name="Ngan_O" disabled=""
                                                    value="0" placeholder="..." id="example-text-input" readonly>
                                            </div>
                                            <label for="example-text-input" class="col-3 col-form-label">งาน</label>
                                        </div>
                                        <div class="form-group row col-sm-3 px-0 mx-0">
                                            <label for="example-text-input" class="col-3 col-form-label"></label>
                                            <div class="col-6" class="form-group">
                                                <input class="form-control" type="text" name="Wa_O" disabled=""
                                                    value="0" placeholder="..." id="example-text-input" readonly>
                                            </div>
                                            <label for="example-text-input" class="col-3 col-form-label">ตารางวา</label>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="form-group row col-sm-3 px-0 mx-0">
                                            <label for="example-text-input"
                                                class="col-12 col-form-label">เนื้อที่ทำเหมืองในพื้นที่ใหม่ในเดือนนี้</label>
                                        </div>
                                        <input class="form-control" type="text" placeholder="..." id="Wa_New"
                                            style="display: none;" name="Wa_New" readonly>
                                        <div class="form-group row col-sm-3 px-0 mx-0">
                                            <label for="example-text-input" class="col-3 col-form-label">จำนวน</label>
                                            <div class="col-6" class="form-group">
                                                <input class="form-control" type="text" placeholder="..." name="Rai_N"
                                                    value="0" id="example-text-input" min="0" OnKeyUp="fncCal();">
                                            </div>
                                            <label for="example-text-input" class="col-3 col-form-label">ไร่</label>
                                        </div>
                                        <div class="form-group row col-sm-3 px-0 mx-0">
                                            <label for="example-text-input" class="col-3 col-form-label"></label>
                                            <div class="col-6" class="form-group">
                                                <input class="form-control" type="text" placeholder="..." min="0"
                                                    name="Ngan_N" value="0" id="example-text-input" max="5"
                                                    maxlength="1" OnKeyUp="fncCal();">
                                            </div>
                                            <label for="example-text-input" class="col-3 col-form-label">งาน</label>
                                        </div>
                                        <div class="form-group row col-sm-3 px-0 mx-0">
                                            <label for="example-text-input" class="col-3 col-form-label"></label>
                                            <div class="col-6" class="form-group">
                                                <input class="form-control" type="text" placeholder="..." min="0"
                                                    maxlength="2" name="Wa_N" value="0" id="example-text-input"
                                                    OnKeyUp="fncCal();">
                                            </div>
                                            <label for="example-text-input" class="col-3 col-form-label">ตารางวา</label>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="form-group row col-sm-3 px-0 mx-0">
                                            <label for="example-text-input"
                                                class="col-12 col-form-label">รวมเนื้อที่ทำเหมือง</label>
                                        </div>
                                        <input class="form-control" type="text" placeholder="..." id="Wa_Sum"
                                            style="display: none;" name="Wa_Sum" readonly>
                                        <div class="form-group row col-sm-3 px-0 mx-0">
                                            <label for="example-text-input" class="col-3 col-form-label">จำนวน</label>
                                            <div class="col-6">
                                                <input class="form-control" type="text" placeholder="..." id="result"
                                                    disabled="" name="Sum_Rai" readonly>
                                            </div>
                                            <label for="example-text-input" class="col-3 col-form-label">ไร่</label>
                                        </div>
                                        <div class="form-group row col-sm-3 px-0 mx-0">
                                            <label for="example-text-input" class="col-3 col-form-label"></label>
                                            <div class="col-6">
                                                <input class="form-control" type="text" placeholder="..."
                                                    id="example-text-input" disabled="" name="Sum_Ngan" readonly>
                                            </div>
                                            <label for="example-text-input" class="col-3 col-form-label">งาน</label>
                                        </div>
                                        <div class="form-group row col-sm-3 px-0 mx-0">
                                            <label for="example-text-input" class="col-3 col-form-label"></label>
                                            <div class="col-6">
                                                <input class="form-control" type="text" placeholder="..."
                                                    id="example-text-input" disabled="" name="Sum_Wa" readonly>
                                            </div>
                                            <label for="example-text-input" class="col-3 col-form-label">ตารางวา</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="next-btn">ถัดไป</button>

                </div>

                <div class="step step-2 ">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายละเอียดเครื่องจักรและอุปกรณ์ในการทำเหมือง</h3>
                        </div>
                        <br>
                        <div class="card-body px-3 p-1 pb-3">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="row col-md-12 px-0 mx-0 mb-3 border-bottom">
                                        <!-- <div class="row justify-content-center container-fluid px-0 mx-0"id="dynamic_field"> -->
                                        <div class="row justify-content-center container-fluid px-0 mx-0">
                                            <div class="row col-sm-12 px-0 mx-0">
                                                <div class="form-group row col-sm-3 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">ประเภท</label>
                                                    <div class="col-7">
                                                        <?php
                                                        $query1 = "SELECT DISTINCT Machine_Type FROM machine GROUP BY Machine_Type";
                                                        $result = mysqli_query($conn, $query1);
                                                        ?>


                                                        <select class="form-control" name="machine_type"
                                                            id="machine_type">
                                                            <option value="">โปรดเลือก</option>
                                                            <?php

                                                            while ($row =  mysqli_fetch_assoc($result)) {
                                                                echo '<option value="' . $row['Machine_Type'] . '">' . $row['Machine_Type'] . '</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-2 col-form-label"></label>
                                                </div>
                                                <div class="form-group row col-sm-3 px-0 mx-0" id="show_brand">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">ยี่ห้อ</label>
                                                    <div class="col-7">
                                                        <div id="changee">
                                                            <?php include('selectData.php'); ?>
                                                        </div>
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-2 col-form-label"></label>
                                                </div>
                                                <div class="form-group row col-sm-3 px-0 mx-0" id="show_model">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">รุ่น</label>
                                                    <div class="col-7">
                                                        <!-- <select class="form-control" id="Machine_Model">
                                                            <option value="">โปรดเลือก</option>
                                                        </select> -->
                                                        <div id="changee2">
                                                            <?php include('selectData2.php'); ?>
                                                        </div>
                                                    </div>

                                                    <label for="example-text-input"
                                                        class="col-2 col-form-label"></label>
                                                </div>
                                                <div class="form-group row col-sm-3 px-0 mx-0" id="show_val">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">จำนวน</label>
                                                    <div class="col-7">
                                                        <input class="form-control name_list" type="number"
                                                            placeholder="..." id="Machine_number" min="0"
                                                            name="Machine_number">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-2 col-form-label">คัน</label>
                                                </div>
                                            </div>
                                            <div class="row col-sm-12 justify-content-center">
                                                <div class="form-group row col-sm-2">
                                                    <button class="btn btn-primary" type="button" name="add"
                                                        value="add data" id="butsendM"
                                                        style="width: 100%;">เพิ่ม</button>
                                                </div>
                                            </div>
                                            <div class="table-wrapper-scroll-y my-custom-scrollbar"
                                                style="overflow-x:auto; width: 100%;">
                                                <table id="tableM" name="tableM"
                                                    class="table table-bordered table-striped dataTable" role="grid">
                                                    <thead>
                                                        <tr role="row" class="info text-truncate">
                                                            <!-- <th>ลำดับ</th> -->
                                                            <th>ประเภทเครื่องจักร์</th>
                                                            <th>ยี่ห้อ</th>
                                                            <th>รุ่น</th>
                                                            <th>จำนวน</th>
                                                            <th style="display: none;">ID</th>
                                                            <th>การกระทำ</th>
                                                            
                                                        <tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- <div class="row container-fluid px-0 mx-0">
                                            <div class="form-group row col-sm-4 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-3 col-form-label">แรงม้ารวม</label>
                                                <div class="col-7">
                                                    <input class="form-control name_list" type="text" placeholder="..."
                                                        id="showdata_model" readonly>
                                                </div>
                                                <label for="example-text-input"
                                                    class="col-2 col-form-label">แรงม้า</label>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div class="row col-md-12 px-0 mx-0 mb-3 border-bottom">
                                        <div class="row container-fluid px-0 mx-0">
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input" id="M_dressing" name="M_dressing"
                                                    class="col-4 col-form-label">โรงแต่งแร่</label>
                                                <label for="example-text-input" class="col-2 col-form-label"> </label>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-4 col-form-label">แรงม้ารวม</label>
                                                <div class="col-5">
                                                    <input class="form-control" type="number" placeholder="..."
                                                        name="dressing_HP" id="dressing_HP" min="0">
                                                </div>
                                                <label for="example-text-input"
                                                    class="col-3 col-form-label">แรงม้า</label>
                                            </div>
                                            <div class="form-group row col-sm-1 px-0 mx-0">
                                                <div class="d-grid gap-2 justify-content-center container-fluid">
                                                    <button class="btn btn-primary" type="button" name="add"
                                                        value="add data" id="butsendMD"
                                                        style="width: 100%;">เพิ่ม</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row col-md-12 px-0 mx-0 mb-3 border-bottom">
                                        <div class="row container-fluid px-0 mx-0">
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input" id="P_generation"
                                                    class="col-11 col-form-label">เครื่องจักรและอุปกรณ์ผลิตกระแสไฟฟ้า</label>
                                                <label for="example-text-input" class="col-1 col-form-label"> </label>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-4 col-form-label">แรงม้ารวม</label>
                                                <div class="col-5">
                                                    <input class="form-control" type="number" placeholder="..."
                                                        name="generation_HP" id="generation_HP" min="0">
                                                </div>
                                                <label for="example-text-input"
                                                    class="col-3 col-form-label">แรงม้า</label>
                                            </div>
                                            <div class="form-group row col-sm-1 px-0 mx-0">
                                                <div class="d-grid gap-2 justify-content-center container-fluid">
                                                    <button class="btn btn-primary" type="button" name="add"
                                                        value="add data" id="butsendMG"
                                                        style="width: 100%;">เพิ่ม</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row col-md-12 px-0 mx-0">
                                        <div class="row justify-content-center container-fluid px-0 mx-0"
                                            id="dynamic_field_13">
                                            <div class="row col-sm-12 px-0 mx-0">
                                                <div class="form-group row col-sm-3 px-0 mx-0">
                                                    <label for="example-text-input" class="col-11 col-form-label">อื่น
                                                        ๆ</label>
                                                    <label for="example-text-input" class="col-1 col-form-label">
                                                    </label>
                                                </div>
                                                <div class="form-group row col-sm-4 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">ชื่อ</label>
                                                    <div class="col-7">
                                                        <input class="form-control name_list" type="text"
                                                            placeholder="..." id="other_name" name="other_name">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-2 col-form-label"></label>
                                                </div>
                                                <div class="form-group row col-sm-4 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้า</label>
                                                    <div class="col-7">
                                                        <input class="form-control name_list" type="number"
                                                            placeholder="..." id="other_value" min="0"
                                                            name="other_value">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-2 col-form-label"></label>
                                                </div>
                                                <div class="form-group row col-sm-1 px-0 mx-0">
                                                    <div class="d-grid gap-2 justify-content-center container-fluid">
                                                        <button class="btn btn-primary" type="button" name="add"
                                                            value="add data" id="butsendMO"
                                                            style="width: 100%;">เพิ่ม</button>
                                                    </div>
                                                </div>
                                                <div class="table-wrapper-scroll-y my-custom-scrollbar"
                                                    style="overflow-x:auto; width: 100%;">
                                                    <table id="tableMS" name="tableMS"
                                                        class="table table-bordered table-striped dataTable"
                                                        role="grid">
                                                        <thead>
                                                            <tr role="row" class="info text-truncate">
                                                                <!-- <th>ลำดับ</th> -->
                                                                <th>ประเภทเครื่องจักร์</th>
                                                                <th>แรงม้า</th>
                                                                <th>การกระทำ</th>
                                                            <tr>
                                                        </thead>
                                                        <tbody>
                                                
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="row container-fluid px-0 mx-0">
                                            <div class="form-group row col-sm-4 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-3 col-form-label">แรงม้ารวม</label>
                                                <div class="col-7">
                                                    <input class="form-control name_list" type="number"
                                                        placeholder="..." id="example-text-input" disabled="" min="0">
                                                </div>
                                                <label for="example-text-input"
                                                    class="col-2 col-form-label">แรงม้า</label>
                                            </div>
                                        </div> -->
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายละเอียดเชื้อเพลิงที่ใช้ในเดือนนี้</h3>
                        </div>
                        <br>
                        <div class="card-body px-3 p-1 pb-3">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="row">
                                        <!-- <div class="row container-fluid p-0 m-0" id="dynamic_field_fuel"> -->
                                        <div class="row container-fluid p-0 m-0">
                                            <div class="form-group row col-sm-4 mx-0">
                                                <select class="form-control" name="fuel" id="fuel"
                                                    onchange="fuelSelectChangeValue(this)">
                                                    <option value=" ">โปรดเลือก</option>
                                                    <option value="Fd_Benzene">น้ำมันเบนซิน</option>
                                                    <option value="Fd_Diesel">น้ำมันดีเซล</option>
                                                    <option value="Fd_Lubricating_Oil">น้ำมันหล่อลื่น</option>
                                                    <option value="Fd_Electricity">ไฟฟ้า</option>
                                                    <option value="Fd_Other">เชื้อเพลิงอื่นๆ</option>
                                                </select>
                                            </div>
                                            <div class="form-group row col-sm-5 mx-0 px-0">
                                                <div class="form-group row col mx-0">
                                                    <input class="form-control" type="text" placeholder="..."
                                                        id="fuel-input" name="fuel">
                                                </div>
                                                <label class="col-3 col-form-label" id="fuelunit"
                                                    style="display: none;"></label>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <div class="d-grid gap-2 justify-content-center container-fluid">
                                                    <button class="btn btn-primary" type="button" name="send"
                                                        value="add data" id="butsend"
                                                        style="width: 100%;">เพิ่ม</button>
                                                    <!-- <button class="btn btn-primary" type="button" name="add"
                                                        id="add_fuel" style="width: 100%;">เพิ่ม</button> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-wrapper-scroll-y my-custom-scrollbar"
                                            style="overflow-x:auto; width: 100%;">
                                            <table id="table1" name="table1"
                                                class="table table-bordered table-striped dataTable" role="grid">
                                                <thead>
                                                    <tr role="row" class="info text-truncate">
                                                        <!-- <th>ลำดับ</th> -->
                                                        <th>ชื่อเชื้อเพลิง</th>
                                                        <th>ปริมาณ/ข้อความ</th>
                                                        <th>การกระทำ</th>
                                                    <tr>
                                                </thead>
                                                <tbody>         
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายละเอียดและปริมาณการใช้วัตถุระเบิดในเดือนนี้</h3>
                        </div>
                        <br>
                        <div class="card-body px-3 p-1 pb-3">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="row">
                                        <!-- <div class="row container-fluid p-0 m-0" id="dynamic_field_explosive"> -->
                                        <div class="row container-fluid p-0 m-0">
                                            <div class="form-group row col-sm-4 mx-0">
                                                <select class="form-control" name="explosive" id="explosive"
                                                    onchange="explosiveSelectChangeValue(this)">
                                                    <option value=" ">โปรดเลือก</option>
                                                    <option value="E_Meterial">วัตถุระเบิด</option>
                                                    <option value="E_Cap">แก็ป</option>
                                                    <option value="E_Ammonia">ปุ๋ยแอมโมเนีย</option>
                                                    <option value="E_Other">อื่น ๆ</option>
                                                </select>
                                            </div>
                                            <div class="form-group row col-sm-5 mx-0 px-0">
                                                <div class="form-group row col mx-0">
                                                    <input class="form-control" type="text" placeholder="..."
                                                        id="explosive-input" name="explosive">
                                                </div>
                                                <label class="col-3 col-form-label" id="explosiveunit"
                                                    style="display: none;"></label>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <div class="d-grid gap-2 justify-content-center container-fluid">
                                                    <button class="btn btn-primary" type="button" name="add"
                                                        value="add data" id="butsend1"
                                                        style="width: 100%;">เพิ่ม</button>
                                                    <!-- <button class="btn btn-primary" type="button" name="add"
                                                        id="add_explosive" style="width: 100%;">เพิ่ม</button> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-wrapper-scroll-y my-custom-scrollbar"
                                            style="overflow-x:auto; width: 100%;">
                                            <table id="table2" name="table2"
                                                class="table table-bordered table-striped dataTable" role="grid">
                                                <thead>
                                                    <tr role="row" class="info text-truncate">
                                                        <!-- <th>ลำดับ</th> -->
                                                        <th>ชื่อวัตถุระเบิด</th>
                                                        <th>ปริมาณ/รายละเอียด</th>
                                                        <th style="display: none;">หน่วย</th>
                                                        <th>การกระทำ</th>
                                                    <tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">ข้อมูลพนักงานและคนงาน</h3>
                        </div>
                        <br>
                        <div class="card-body px-3 p-1 pb-3">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="row container-fluid px-0 mx-0">
                                            <div class="form-group row col-sm-6 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-4 col-form-label">จำนวนพนักงานและคนงาน</label>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" placeholder="..."
                                                        id="Amount_Employee" name="Amount_Employee">
                                                </div>
                                                <label for="example-text-input" class="col-2 col-form-label">คน</label>
                                            </div>
                                            <div class="form-group row col-sm-6 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-4 col-form-label">จำนวนวันทำงานในเดือนนี้</label>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" placeholder="..."
                                                        id="Amount_Day" name="Amount_Day">
                                                </div>
                                                <label for="example-text-input" class="col-2 col-form-label">วัน</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="previous-btn">หน้าก่อน</button>
                    <button type="button" class="next-btn">ถัดไป</button>
                </div>

                <!-- action="report_details.php" -->


                <div class="step step-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายละเอียดการผลิตแร่</h3>
                        </div>
                        <br>
                        <div class="card-body px-3 p-1 pb-3">
                            <div class="row justify-content-center">
                                <!-- <div class="col-md-12" id="dynamic_field_mineral"> -->
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group row col-sm-6 px-0 mx-0">
                                            <label for="example-text-input"
                                                class="col-12 col-form-label">ชนิดแร่</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" placeholder="..." name="Mineral"
                                                    id="showdata_mineral">
                                            </div>
                                        </div>
                                        <div class="form-group row col-sm-6 px-0 mx-0">
                                            <label for="example-text-input"
                                                class="col-12 col-form-label">สภาพ/คุณลักษณะ</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" placeholder="..." id="condition"
                                                    name="condition">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row col-sm-6 px-0 mx-0">
                                            <label for="example-text-input"
                                                class="col-12 col-form-label">ยอดยกมา</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" placeholder="..."
                                                    id="showdata_14" value="0" name="Md_beginning_balance">
                                            </div>
                                        </div>
                                        <div class="form-group row col-sm-6 px-0 mx-0">
                                            <label for="example-text-input" class="col-12 col-form-label">ผลิตได้
                                                (ตัน)</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" placeholder="..." value="0"
                                                    id="Mp_Quantity" name="Mp_Quantity" OnKeyUp="fncCal();">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="form-group row col-sm-2">
                                            <button class="btn btn-primary" type="button" name="add" value="add data"
                                                id="butsend2" style="width: 100%;">เพิ่ม</button>
                                            <!-- <button class="btn btn-primary" type="button" name="add" id="add_mineral"
                                                style="width: 100%;">เพิ่ม</button> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="table-wrapper-scroll-y my-custom-scrollbar"
                                    style="overflow-x:auto; width: 100%;">
                                    <table id="table3" name="table3"
                                        class="table table-bordered table-striped dataTable" role="grid">
                                        <thead>
                                            <tr role="row" class="info text-truncate">
                                                <!-- <th>ลำดับ</th> -->
                                                <th>ชนิดแร่</th>
                                                <!-- <th style="display: none;">Name</th> -->
                                                <th>สภาพ/คุณลักษณะ</th>
                                                <th>ยอดยกมา</th>
                                                <th>ผลิตได้</th>
                                                <th>การกระทำ</th>
                                            <tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายละเอียดการจำหน่ายแร่</h3>
                        </div>
                        <br>
                        <div class="card-body px-3 p-1 pb-3">
                            <div class="row justify-content-center">
                                <!-- <div class="col-md-12" id="dynamic_field_mineral"> -->
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group row col-sm-6 px-0 mx-0">
                                            <label for="example-text-input"
                                                class="col-12 col-form-label">ชนิดแร่</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" placeholder="..." name="Mineral"
                                                    id="showdata_mineral2">
                                            </div>
                                        </div>
                                        <div class="form-group row col-sm-6 px-0 mx-0">
                                            <label for="example-text-input" class="col-12 col-form-label">ส่งไปแต่งแร่
                                                (ตัน)</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" placeholder="..." value="0"
                                                    id="Mp_Dressing" name="Mp_Dressing">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row col-sm-6 px-0 mx-0">
                                            <label for="example-text-input"
                                                class="col-12 col-form-label">ชื่อ/ทะเบียนของผู้ซื้อแร่หรือผู้ใช้แร่</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" placeholder="..."
                                                    name="Ds_buyer" id="Ds_buyer">
                                            </div>
                                        </div>
                                        <div class="form-group row col-sm-6 px-0 mx-0">
                                            <label for="example-text-input"
                                                class="col-12 col-form-label">เพื่อใช้ภายในประเทศ
                                                (ตัน)</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" placeholder="..." value="0"
                                                    name="Ds_domestic" id="Ds_domestic" OnKeyUp="fncCal();">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row col-sm-6 px-0 mx-0">
                                            <label for="example-text-input"
                                                class="col-12 col-form-label">ประเภทอุตสาหกรรมที่นำแร่ไปใช้</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" placeholder="..."
                                                    name="Ds_Industry" id="Ds_Industry">
                                            </div>
                                        </div>
                                        <div class="form-group row col-sm-6 px-0 mx-0">
                                            <label for="example-text-input"
                                                class="col-12 col-form-label">เลขที่ใบเสร็จรับเงินค่าภาคหลวงแร่/ลงวันที่</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" placeholder="..."
                                                    name="Ds_receipt" id="Ds_receipt">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row col-sm-6 px-0 mx-0">
                                            <label for="example-text-input" class="col-12 col-form-label">ค่าภาคหลวง
                                                (บาท)</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" placeholder="..." value="0"
                                                    name="Ds_royalty" id="Ds_royalty">
                                            </div>
                                        </div>
                                        <div class="form-group row col-sm-6 px-0 mx-0">
                                            <label for="example-text-input"
                                                class="col-12 col-form-label">เพื่อการส่งออกต่างประเทศ
                                                (ตัน)/ด่านที่ส่งออก</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" placeholder="..." value="0"
                                                    name="Ds_export" id="Ds_export" OnKeyUp="fncCal();">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row col-sm-6 px-0 mx-0">
                                            <label for="example-text-input" class="col-12 col-form-label">จำหน่ายแร่ออก
                                                (ตัน)</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" placeholder="..." value="0"
                                                    id="Mp_sell" name="Mp_sell">
                                            </div>
                                        </div>
                                        <div class="form-group row col-sm-6 px-0 mx-0">
                                            <label for="example-text-input" class="col-12 col-form-label">ยอดคงเหลือ
                                                ณ
                                                สิ้นเดือน (ตัน)</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" placeholder="..." value="0"
                                                    id="Mp_balance" name="Mp_balance">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="form-group row col-sm-2">
                                            <button class="btn btn-primary" type="button" name="add" value="add data"
                                                id="butsend4" style="width: 100%;">เพิ่ม</button>
                                            <!-- <button class="btn btn-primary" type="button" name="add" id="add_mineral"
                                                style="width: 100%;">เพิ่ม</button> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="table-wrapper-scroll-y my-custom-scrollbar" style="overflow-x:auto;">
                                    <table id="table4" name="table4"
                                        class="table table-bordered table-striped dataTable" role="grid">
                                        <thead>
                                            <tr role="row" class="info text-truncate">
                                                <th>ชนิดแร่</th>
                                                <th>ส่งไปแต่งแร่</th>
                                                <th>ชื่อ/ทะเบียนของผู้ซื้อแร่หรือผู้ใช้แร่
                                                </th>
                                                <th>เพื่อใช้ภายในประเทศ</th>
                                                <th>ประเภทอุตสาหกรรมที่นำแร่ไปใช้</th>
                                                <th>
                                                    เลขที่ใบเสร็จรับเงินค่าภาคหลวงแร่</th>
                                                <th>ค่าภาคหลวง</th>
                                                <th>เพื่อการส่งออกต่างประเทศ</th>
                                                <th>จำหน่ายแร่ออก</th>
                                                <th>ยอดคงเหลือ ณ สิ้นเดือน</th>
                                                <th>การกระทำ</th>
                                            <tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="previous-btn">หน้าก่อน</button>
                    <button type="submit" class="submit-btn" name="submits" id="butsave">บันทึก</button>
            </form>

            <!-- <div class="row justify-content-center mb-3">
                <input type="button" name="submit" id="submit" class="btn btn-success" value="แสดงตัวอย่างเอกสาร" />
            </div> -->

        </div>
        <!-- /.col -->
    </div>

</section>
<!-- /.content -->

<?php include('footer.php'); ?>

<script src="js/report.js"></script>

<script>
$(document).ready(function() {
    var id1 = 1;
    var id2 = 1;
    var id3 = 1;
    var id4 = 1;
    var id5 = <?php echo $count ?>;
    var id6 = 1;



    /* Assigning id and class for tr and td tags for separation. */

    $("#butsend").click(function() {
        var newid = id1++;
        $("#table1").append('<tr valign="top" id="' + newid + '">\n\
                                                    <td class="fuel' + newid + '">' + $(
                "#fuel option:selected").text() + '</td>\n\
                                                    <td class="fuel_input' + newid + '">' + $("#fuel-input")
            .val() + '</td>\n\
                                                    <td><button type="button" href="javascript:void(0);" class="remCF btn btn-danger">ลบ</button></td>\n\
                                                </tr>');

    });

    $("#butsend1").click(function() {
        var newid = id2++;
        $("#table2").append('<tr valign="top" id="' + newid + '">\n\
                                                    <td class="explosiveselected' + newid + '">' + $(
                "#explosive option:selected").text() + '</td>\n\
                                                    <td class="explosive_input' + newid + '">' + $(
                "#explosive-input").val() + '</td>\n\
                                                    <td style="display: none;" class="explosiveRadio' + newid + '">' +
            $(
                "input[type='radio'][name='explosiveRadioOptions']:checked"
            )
            .val() + '</td>\n\
                                                    <td><button type="button" href="javascript:void(0);" class="remCF btn btn-danger">ลบ</button></td>\n\
                                                </tr>');

    });

    $("#butsend2").click(function() {
        var newid = id3++;
        $("#table3").append('<tr valign="top" id="' + newid + '">\n\
                                                    <td class="mineral' + newid + '">' + $(
                "#showdata_mineral").val() + '</td>\n\
                                                    <td class="condition' + newid + '">' + $("#condition")
            .val() + '</td>\n\
                                                    <td class="produce' + newid + '">' + $("#showdata_14")
            .val() + '</td>\n\
                                                    <td class="quantity' + newid + '">' + $("#Mp_Quantity")
            .val() + '</td>\n\
                                                    <td><button type="button" href="javascript:void(0);" class="remCF btn btn-danger">ลบ</button></td>\n\
                                                </tr>');

    });

    $("#butsend4").click(function() {
        var newid = id4++;
        $("#table4").append('<tr valign="top" id="' + newid + '">\n\
                                                    <td  class="minerals' + newid + '">' + $("#showdata_mineral2")
            .val() + '</td>\n\
                                                    <td  class="dressing' + newid + '">' + $("#Mp_Dressing")
            .val() + '</td>\n\
                                                    <td  class="buyer' + newid + '">' + $("#Ds_buyer")
            .val() + '</td>\n\
                                                    <td  class="domestic' + newid + '">' + $("#Ds_domestic")
            .val() + '</td>\n\
                                                    <td  class="industry' + newid + '">' + $("#Ds_Industry")
            .val() + '</td>\n\
                                                    <td  class="receipt' + newid + '">' + $("#Ds_receipt")
            .val() + '</td>\n\
                                                    <td  class="royalty' + newid + '">' + $("#Ds_royalty")
            .val() + '</td>\n\
                                                    <td  class="Ds_export' + newid + '">' + $("#Ds_export")
            .val() + '</td>\n\
                                                    <td  class="sell' + newid + '">' + $("#Mp_sell")
            .val() + '</td>\n\
                                                    <td  class="balance' + newid + '">' + $("#Mp_balance")
            .val() + '</td>\n\
                                                    <td ><button type="button" href="javascript:void(0);" class="remCF btn btn-danger">ลบ</button></td>\n\
                                                </tr>');

    });

    $("#butsendM").click(function() {
        var newid = id5++;
        $("#tableM").append('<tr valign="top" id="' +newid + '">\n\
            <td class="machine_type' + newid + '">' + $("#machine_type option:selected").text() + '</td>\n\
            <td class="machine_brand' + newid + '">' + $("#machine_brand option:selected").text() + '</td>\n\
            <td class="machine_model' + newid + '">' + $("#machine_model option:selected").text() + '</td>\n\
            <td class="Machine_number' + newid + '">' + $("#Machine_number").val() + '</td>\n\
            <td style="display: none;" class="machine_id' + newid + '">' + $("#machine_model option:selected").val() + '</td>\n\
            <td><button type="button" href="javascript:void(0);" class="remCF btn btn-danger">ลบ</button></td>\n\</tr>');

    });

    $("#butsendMD").click(function() {
        var newid = id6++;
        $("#tableMS").append('<tr valign="top" id="' +
            newid + '">\n\
                                                    <td class="other_name' + newid + '">' + $("#M_dressing").text() + '</td>\n\
                                                    <td class="other_value' + newid + '">' + $("#dressing_HP").val() + '</td>\n\
                                                    <td><button type="button" href="javascript:void(0);" class="remCF btn btn-danger">ลบ</button></td>\n\
                                                </tr>');

    });

    $("#butsendMG").click(function() {
        var newid = id6++;
        $("#tableMS").append('<tr valign="top" id="' +
            newid + '">\n\
                                                    <td class="other_name' + newid + '">' + $("#P_generation")
            .text() + '</td>\n\
                                                    <td class="other_value' + newid + '">' + $("#generation_HP")
            .val() + '</td>\n\
                                                    <td><button type="button" href="javascript:void(0);" class="remCF btn btn-danger">ลบ</button></td>\n\
                                                </tr>');

    });

    $("#butsendMO").click(function() {
        var newid = id6++;
        $("#tableMS").append('<tr valign="top" id="' +
            newid + '">\n\
                                                    <td class="other_name' + newid + '">' + $("#other_name").val() + '</td>\n\
                                                    <td class="other_value' + newid + '">' + $("#other_value").val() + '</td>\n\
                                                    <td><button type="button" href="javascript:void(0);" class="remCF btn btn-danger">ลบ</button></td>\n\
                                                </tr>');

    });

    var serializedData = $('#form1').serialize();

    $.ajax({
        url: "edit_save.php",
        type: "post",
        data: serializedData
    });

    $("#table1").on('click', '.remCF', function() {
        $(this).parent().parent().remove();
    });

    $("#table2").on('click', '.remCF', function() {
        $(this).parent().parent().remove();
    });

    $("#table3").on('click', '.remCF', function() {
        $(this).parent().parent().remove();
    });

    $("#table4").on('click', '.remCF', function() {
        $(this).parent().parent().remove();
    });

    $("#tableM").on('click', '.remCF', function() {
        $(this).parent().parent().remove();
    });

    $("#tableMS").on('click', '.remCF', function() {
        $(this).parent().parent().remove();
    });

    /* crating new click event for save button*/

    $("#butsave").click(function() {
        var lastRowId1 = $('#table1 tr:last').attr("id"); /* finds id of the last row inside table */
        var lastRowId2 = $('#table2 tr:last').attr("id");
        var lastRowId5 = $('#tableM tr:last').attr("id");
        var lastRowId3 = $('#table3 tr:last').attr("id");
        var lastRowId4 = $('#table4 tr:last').attr("id");
        var lastRowId6 = $('#tableMS tr:last').attr("id");
        

        var fuel = new Array();
        var fuel_input = new Array();
        var explosiveselected = new Array();
        var explosive_input = new Array();
        var explosiveRadio = new Array();
        var machine_id = new Array();
        var Machine_number = new Array();
        var mineral = new Array();
        var condition = new Array();
        var quantity = new Array();
        var minerals = new Array();
        var dressing = new Array();
        var buyer = new Array();
        var domestic = new Array();
        var industry = new Array();
        var receipt = new Array();
        var royalty = new Array();
        var Ds_export = new Array();
        var sell = new Array();
        var balance = new Array();

        // var M_dressing = new Array();
        // var dressing_HP = new Array();
        // var P_generation = new Array();
        // var generation_HP = new Array();
        var other_name = new Array();
        var other_value = new Array();

        var month = $('#month').val();
        var year = $('#year').val();
        var mine_id = $('#showdata_16').val();

        var Wa_New = $('#Wa_New').val();
        var Wa_Sum = $('#Wa_Sum').val();

        var Amount_Employee = $('#Amount_Employee').val();
        var Amount_Day = $('#Amount_Day').val();
        // alert(month);


            for (var i = 1; i <= lastRowId1; i++) {
                fuel.push($(".fuel" + i).html()); /* pushing all the names listed in the table */
                fuel_input.push($(".fuel_input" + i).html()); /* pushing all the ages listed in the table */
            }   

            for (var i = 1; i <= lastRowId2; i++) {
                explosiveselected.push($(".explosiveselected" + i).html()); /* pushing all the names listed in the table */
                explosive_input.push($(".explosive_input" + i).html() );
                explosiveRadio.push($(".explosiveRadio" + i).html());  /* pushing all the ages listed in the table */
             }

            for (var i = 1; i <= lastRowId5; i++) {
                Machine_number.push($(".Machine_number"+i).html()); /* pushing all the ages listed in the table */
                machine_id.push($(".machine_id"+i).html()); /* pushing all the names listed in the table */
            } 

        for (var i = 1; i <= lastRowId3; i++) {
            mineral.push($(".mineral" + i).html()); /* pushing all the names listed in the table */
            condition.push($(".condition" + i).html());
            quantity.push($(".quantity" + i).html());  /* pushing all the ages listed in the table */
        }

        for (var i = 1; i <= lastRowId4; i++) {
            minerals.push($(".minerals" + i).html()); /* pushing all the names listed in the table */
            dressing.push($(".dressing" + i).html());
            buyer.push($(".buyer" + i).html());  /* pushing all the ages listed in the table */
            domestic.push($(".domestic" + i).html()); /* pushing all the names listed in the table */
            industry.push($(".industry" + i).html());
            receipt.push($(".receipt" + i).html());  /* pushing all the ages listed in the table */
            royalty.push($(".royalty" + i).html()); /* pushing all the names listed in the table */
            Ds_export.push($(".Ds_export" + i).html());
            sell.push($(".sell" + i).html());  /* pushing all the ages listed in the table */
            balance.push($(".balance" + i).html()); /* pushing all the names listed in the table */
        }

        for (var i = 1; i <= lastRowId6; i++) {
            // M_dressing.push($(".M_dressing" + i).html()); /* pushing all the names listed in the table */
            // dressing_HP.push($(".dressing_HP" + i).html());
            // P_generation.push($(".P_generation" + i).html());  /* pushing all the ages listed in the table */
            // generation_HP.push($(".generation_HP" + i).html()); /* pushing all the names listed in the table */
            other_name.push($(".other_name" + i).html());
            other_value.push($(".other_value" + i).html());  /* pushing all the ages listed in the table */
        }
        
        
        var sendfuel = JSON.stringify(fuel);
        var sendfuel_inputr = JSON.stringify(fuel_input);
        var sendexplosiveselected = JSON.stringify(explosiveselected);
        var sendexplosive_input = JSON.stringify(explosive_input);
        var sendexplosiveRadio = JSON.stringify(explosiveRadio);
        var sendMachine_number = JSON.stringify(Machine_number);
        var sendmachine_id = JSON.stringify(machine_id);
        var sendmineral = JSON.stringify(mineral);
        var sendcondition = JSON.stringify(condition);
        var sendquantity = JSON.stringify(quantity);
        var sendminerals = JSON.stringify(minerals);
        var senddressing = JSON.stringify(dressing);
        var sendbuyer = JSON.stringify(buyer);
        var senddomestic = JSON.stringify(domestic);
        var sendindustry = JSON.stringify(industry);
        var sendreceipt = JSON.stringify(receipt);
        var sendroyalty = JSON.stringify(royalty);
        var sendDs_export = JSON.stringify(Ds_export);
        var sendsell = JSON.stringify(sell);
        var sendbalance = JSON.stringify(balance);

        // var sendM_dressing = JSON.stringify(M_dressing);
        // var senddressing_HP = JSON.stringify(dressing_HP);
        // var sendP_generation = JSON.stringify(P_generation);
        // var sendgeneration_HP = JSON.stringify(generation_HP);
        var sendother_name = JSON.stringify(other_name);
        var sendother_value = JSON.stringify(other_value);

        $.ajax({
            url: "edit_save.php",
            type: "post",
            data: {
                month: month,
                year: year,
                mine_id: mine_id,
                fuel: sendfuel,
                fuel_inputr: sendfuel_inputr,
                explosiveselected: sendexplosiveselected,
                explosive_input: sendexplosive_input,
                explosiveRadio: sendexplosiveRadio,
                Machine_number: sendMachine_number,
                machine_id: sendmachine_id,
                mineral: sendmineral,
                condition: sendcondition,
                quantity: sendquantity,
                Wa_New: Wa_New,
                Wa_Sum: Wa_Sum,
                Amount_Employee: Amount_Employee,
                Amount_Day: Amount_Day,
                minerals: sendminerals,
                dressing: senddressing,
                buyer: sendbuyer,
                domestic: senddomestic,
                industry: sendindustry,
                receipt: sendreceipt,
                royalty: sendroyalty,
                Ds_export: sendDs_export,
                sell: sendsell,
                balance: sendbalance,
                // M_dressing: sendM_dressing,
                // dressing_HP: senddressing_HP,
                // P_generation: sendP_generation,
                // generation_HP: sendgeneration_HP,
                other_name: sendother_name,
                other_value: sendother_value

            },
            success: function(data) {
                alert(data); /* alerts the response from php. */
                window.location="report.php";

            }
        });
    });
});


// function change(){
//     $.ajax({
//             url : 'test2.php',
//             type : 'get',
//             success: function() {
//              $('#changee').html('test2.php');
//             },
//             error: function() {
//              $('#changee').text('An error occurred');
//             }
//         });
// }
$(document).ready(function() {

    // $('#sel_users').select2();

    $('#user_selected').change(function() {
        var value = $(this).val();
        $.ajax({
            url: 'selectData.php?brand=' + value,
            type: 'get',
            success: function(data) {
                $('#changee').html(data);
            },
            error: function() {
                $('#changee').text('An error occurred');
            }
        });

        // $('#sel_users').val(value);
        //   $('#sel_users').select2().trigger('change');

    });
});

// function fuelSelectChangeValue() {

//     var selObj = document.getElementById('fuel');
//     var selValue = selObj.options[selObj.selectedIndex].value;

//     document.getElementById('fuelunit').innerHTML = selValue;
// }

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