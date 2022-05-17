<?php
@ini_set('display_errors', '0');
$menu = "report";
$title = "รายงานเหมืองประจำเดือน";
include("header.php"); 

$msg = "";
if (!empty($_GET['msg'])) {
    $msg = $_GET['msg'];
    $alert_msg = ($msg == "add") ? "<script>toastr.success('บันทึกข้อมูลเรียบร้อย');</script>" : (($msg == "cantadd") ? "<script>toastr.error('บันทึกข้อมูลล้มเหลว');</script>" : "<script>toastr.success('บันทึกข้อมูลเรียบร้อย');</script>");
} else {
    $alert_msg = "";
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
            <?php if (!empty($alert_msg)) {?>
            <?php echo $alert_msg; ?>
            <?php }?>
            <div class="card">
                <div class="card-header card-navy card-outline">


                    <div align="left">
                        <a href="new_report.php">
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal"
                                data-target="#exampleModal"><i class="fa fa-pencil-square-o"></i>
                                เพิ่มรายงาน</button></a>

                    </div>
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

                                <?php
                                // $varmonth = ;
                                // $varyear = ;
                                $queryr =  "SELECT * FROM license,report WHERE license.Mine_Id = report.Mine_Id AND license.Users_id = $sem";
                                $result = mysqli_query($conn,$queryr);
                                while ($row =  mysqli_fetch_array($result)){
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
                                    <td><a style="margin-right: 10px;" class='btn btn-info btn-sm'
                                            href='../PDF/index.php?varmonth=<?php echo $row["Month"] ?>&varyear=<?php echo $row["Year"] ?>&varmineid=<?php echo $row["Mine_Id"] ?> &varversion=<?php echo $row["Version"] ?>'
                                            target="_blank"> <i class='fas fa-file-pdf-o'></i> รายงาน </a>
                                        <!-- <a style="margin-right: 10px;" class='btn btn-info btn-sm'
                                            href='edit_report.php?month=<?php echo $row["Month"] ?>&year=<?php echo $row["Year"] ?>&mineid=<?php echo $row["Mine_Id"] ?>&license=<?php echo $row["License_id"]?> &version=<?php echo $row["Version"] ?>'>
                                            <i class='fas fa-file-pdf-o'></i> แก้ไข </a> -->

                                        <?php 
                                    if($row['Result'] == "กำลังตรวจสอบ" || $row['Result'] == "อนุมัติ"){
                                        
                                    ?>
                                    </td>
                                    <?php
                                    }else{ ?>
                                    <a style="margin-right: 10px;" class='btn btn-info btn-sm'
                                            href='edit_report.php?month=<?php echo $row["Month"] ?>&year=<?php echo $row["Year"] ?>&mineid=<?php echo $row["Mine_Id"] ?>&license=<?php echo $row["License_id"]?> &version=<?php echo $row["Version"] ?>'>
                                            <i class='fas fa-file-pdf-o'></i> แก้ไข </a>
                                    <!-- <a style="margin-right: 10px;color:white;" class='btn btn-danger btn-sm'
                                        onclick="return alert('ข้อความจากผู้ตรวจสอบ : <?php echo $row['Comment']; ?>')">
                                        <i class='fas fa-comment'> </i> ความคิดเห็น </a> </td> -->
                                    <botton style="margin-right: 10px;" class="btn btn-primary btn-sm"
                                        data-toggle="modal" data-target="#modalShowC<?php echo $row['Comment']; ?>">
                                        <i class='fas fas fa-comment'>
                                        </i>
                                        ความคิดเห็น
                                    </botton>
                                    <div class="modal fade" id="modalShowC<?php echo $row['Comment']; ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                    ?>








                                    </td>
                                </tr>

                                <?php

                                }

                                // mysql_close($conn);
                                ?>



                            </table>

                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    </div>
    <!-- /.col -->
    </div>
</section>
<!-- /.content -->
<?php include('footer.php'); ?>
<script>
$(function() {
    $(".datatable").DataTable();
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
    });
});
</script>
</body>

</html>