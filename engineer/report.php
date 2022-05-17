<?php
$menu = "report";
$title = "รายงานเหมืองประจำเดือน";
@ini_set('display_errors', '0');
include("header.php"); 
if(isset($_GET['varmonth'])){
    $varmonth = $_GET['varmonth'];
$varyear = $_GET['varyear'];
$varmineid = $_GET['varmineid'];
$status = $_GET['status'];
$e = $_GET['e'];

$ee = "";
if(isset($e)){

    if(isset($_POST['aa1'])){
     $var = $_POST['aaa'];
    $sql11 = "UPDATE report SET Result ='ไม่อนุมัติ',Comment = '$var' where Mine_Id = $varmineid AND Month = $varmonth AND Year = $varyear";
    $result = mysqli_query($conn, $sql11);
    // echo "<meta http-equiv='refresh' content='0.2;url=report.php'>";
    
    echo "<meta http-equiv='refresh' content='0.2;url=report.php'>";

    }else if(isset($_POST['aa2'])){
        echo "<meta http-equiv='refresh' content='0.2;url=report.php'>";

    }

?>
<?php
    // function prompt($prompt_msg){
    //     echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

    //     $answer = "<script type='text/javascript'> document.write(answer); </script>";
    //     return($answer);
    // }

    // //program
    // $prompt_msg = "Please type your name.";
    // $name = prompt($prompt_msg);
    // $output_msg = "ข้อความจากผู้ตรวจสอบ ".$name."!";
    // $e = $output_msg;
    // $sql11 = "UPDATE report SET Result ='DEACCEPT',Comment = '$e' where Mine_Id = $varmineid AND Month = $varmonth AND Year = $varyear";
    // $result = mysqli_query($conn, $sql11);
    // echo $sql11;
    // // echo "<meta http-equiv='refresh' content='0.2;url=report.php'>";

    // // echo "<meta http-equiv='refresh' content='0.2;url=report1.php?a=$sql11'>";
    // // echo "<meta http-equiv='refresh' content='0.2;url=reporat.php'>";
    // // $output_msg = "Hello there ".$name."!";
    // echo($output_msg);
}else{
        $sql = "UPDATE report SET Result = 'อนุมัติ' where Mine_Id = $varmineid AND Month = $varmonth AND Year = $varyear";
    $result = mysqli_query($conn, $sql);
    echo "<meta http-equiv='refresh' content='0.2;url=report.php'>";
}
}
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid col-md-11">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="nav-icon fas fa-newspaper-o"></i> <?php echo $title; ?></h1>
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

            <div class="card">
                <div class="card-header card-navy card-outline">
                    <!-- <div align="left">
                        <a href="new_report.php">
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal"
                                data-target="#exampleModal"><i class="fa fa-pencil-square-o"></i>
                                เพิ่มรายงาน</button></a>
                    </div> -->
                </div>
                <br>
                <div class="card-body p-1">
                    <div class="row">
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-12 table-wrapper-scroll-y my-custom-scrollbar" style="overflow-x:auto;">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                                aria-describedby="info">
                                <thead>
                                    <tr role="row" class="info info text-truncate">
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 25%;">เลขที่ประทานบัตร
                                        </th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 7.5%;">จังหวัด</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 7.5%;">เดือน</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 7.5%;">ปี</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 7.5%;">เวอร์ชั่น</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 22.5%;">สถานะ</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 22.5%;">การกระทำ</th>
                                        <!-- <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">ที่อยู่</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">-</th> -->

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // $varmonth = ;
                                    // $varyear = ;
                                    $eng = $_SESSION['ide'];

                                    $queryr =  "SELECT * FROM license,report,area_engineering WHERE license.Mine_Id = report.Mine_Id AND license.Area_id = area_engineering.Area_id AND area_engineering.Area_id = $eng";
                                    $result = mysqli_query($conn, $queryr);
                                    while ($row =  mysqli_fetch_array($result)) {
                                        $test = $row["Month"];
                                        if ($test == "1") {
                                            $test = "มกราคม";
                                        } else if ($test == "2") {
                                            $test = "กุมภาพันธ์";
                                        } else if ($test == "3") {
                                            $test = "มีนาคม";
                                        } else if ($test == "4") {
                                            $test = "เมษายน";
                                        } else if ($test == "5") {
                                            $test = "พฤษภาคม";
                                        } else if ($test == "6") {
                                            $test = "มิถุนายน";
                                        } else if ($test == "7") {
                                            $test = "กรกฎาคม";
                                        } else if ($test == "8") {
                                            $test = "สิงหาคม";
                                        } else if ($test == "9") {
                                            $test = "กันยายน";
                                        } else if ($test == "10") {
                                            $test = "ตุลาคม";
                                        } else if ($test == "11") {
                                            $test = "พฤศจิกายน";
                                        } else if ($test == "12") {
                                            $test = "ธันวาคม";
                                        }
                                    ?>
                                    <tr>
                                        <td><?php echo $row['License_id'] ?></td>
                                        <td><?php echo $row['License_Province'] ?></td>
                                        <td><?php echo $test ?></td>
                                        <td><?php echo $row['Year'] ?></td>
                                        <td><?php echo $row['Version'] ?></td>
                                        <td><?php echo $row['Result'] ?></td>
                                        

                                        <td>
                                            <a style="margin-right: 10px;" class="btn btn-info btn-sm"
                                                href='../PDF/index.php?varmonth=<?php echo $row["Month"] ?>&varyear=<?php echo $row["Year"] ?>&varmineid=<?php echo $row["Mine_Id"] ?> &varversion=<?php echo $row["Version"] ?>'
                                                target="_blank">
                                                <i class='fas fa-file-pdf '></i> รายงาน </a>

                                            <?php

                                                if ($row['Result'] == "อนุมัติ" || $row['Result'] == "ไม่อนุมัติ") {
                                                    if ($row['Result'] == "ไม่อนุมัติ") {
                                                        ?>
                                            
                                            <botton style="margin-right: 10px;" class="btn btn-primary btn-sm"
                                                data-toggle="modal"
                                                data-target="#modalShowC<?php echo $row['Comment']; ?>">
                                                <i class='fas fas fa-comment'>
                                                </i>
                                                ความคิดเห็น
                                            </botton>
                                            <div class="modal fade" id="modalShowC<?php echo $row['Comment']; ?>"
                                                tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <!--Content-->
                                                    <div class="modal-content">
                                                        <!--Header-->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title w-100" id="myModalLabel">
                                                                ข้อความจากผู้ตรวจสอบ
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <!--Body-->
                                                        <div class="modal-body">
                                                            <?php echo $row['Comment']; ?>
                                                        </div>
                                                        <!--Footer-->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">ปิด</button>
                                                        </div>
                                                    </div>
                                                    <!--/.Content-->
                                                </div>
                                            </div>
                                            <?php
                                                            }
                                                } else {

                                                    ?>

                                            <botton style="margin-right: 10px;" class="btn btn-success btn-sm"
                                                data-toggle="modal"
                                                data-target="#modalShow<?php echo $row['Mine_Id']; ?>">
                                                <i class='fas fa-check-circle'>
                                                </i>
                                                อนุมัติ
                                            </botton>
                                            <div class="modal fade" id="modalShow<?php echo $row['Mine_Id']; ?>"
                                                tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <!--Content-->
                                                    <div class="modal-content">
                                                        <!--Header-->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title w-100" id="myModalLabel">อนุมัติ
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <!--Body-->
                                                        <div class="modal-body">
                                                            คุณต้องการปรับสถานะเหมืองให้เป็นอนุมัติหรือไม่
                                                        </div>
                                                        <!--Footer-->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">ปิด</button>
                                                            <a type="button" class="btn btn-primary"
                                                                href='?varmonth=<?php echo $row["Month"] ?>&varyear=<?php echo $row["Year"] ?>&varmineid=<?php echo $row["Mine_Id"] ?>&status=a'>อนุมัติ</a>
                                                        </div>
                                                    </div>
                                                    <!--/.Content-->
                                                </div>
                                            </div>
                                            <botton class='btn btn-danger btn-sm' data-toggle="modal"
                                                data-target="#modalShow2<?php echo $row['Mine_Id']; ?>">
                                                <i class='fas fa-times-circle'>
                                                </i>
                                                ไม่อนุมัติ
                                            </botton>
                                            <form method="post"
                                            action="?varmonth=<?php echo $row["Month"] ?>&varyear=<?php echo $row["Year"] ?>&varmineid=<?php echo $row["Mine_Id"] ?>&status=c&e=e">
                                                <div class="modal fade" id="modalShow2<?php echo $row['Mine_Id']; ?>"
                                                    tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content"
                                                            style=" position: fixed; z-index: 1050; max-width: 500px; ">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    ไม่อนุมัติ</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <label for="message-text"
                                                                            class="col-form-label">ความคิดเห็น:</label>
                                                                        <textarea class="form-control" name="aaa"
                                                                            id="message-text"></textarea>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">ปิด</button>
                                                                <button type="submit" name="aa1"
                                                                    class="btn btn-primary">ส่ง</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <?php } ?>

                                        </td>
                                    </tr>

                                    <?php

                                    }
                                    // mysql_close($conn);
                                    ?>
                                </tbody>
                            </table>

                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<!-- /.content -->
<?php include('footer.php'); ?>

<script>

</script>
</body>

</html>