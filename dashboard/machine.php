<?php
$menu = "machine";
$title = "ข้อมูลเครื่องจักร"; 
include("header.php"); 

$msg = "";
if (!empty($_GET['msg'])) {
    $msg = $_GET['msg'];
    $alert_msg = ($msg == "del") ? "<script>toastr.success('ลบข้อมูลเรียบร้อย');</script>" : (($msg == "cantdel") ? "<script>toastr.error('เครื่องจักรนี้กำลังถูกใช้งาน');</script>" : "<script>toastr.success('บันทึกข้อมูลเรียบร้อย');</script>");
} else {
    $alert_msg = "";
}

// if(isset($_GET['deletebtn'])){
//     $Machine_Id=$_GET['Machine_Id'];
//     $deletequery = "delete from machine where Machine_Id=$Machine_Id";
//     $query = mysqli_query($conn,$deletequery);

//     if($query){
//         echo '<script>alert("Deleted successfully")</script>';
//         // alert("Deleted successfully");
//         // header('location:machine.php');
//     }else{
//         echo '<script>alert("Not Deleted successfully")</script>';
//         // alert("Not Deleted successfully");
//         // header('location:machine.php');
//     }
//     // echo '<meta http-equiv="refresh" content="0.01;url=machine.php">';
// }

?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid col-md-11">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="nav-icon fas fa-cogs"></i> <?php echo $title; ?></h1>
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
                        <a href="new_machine.php">
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal"
                                data-target="#exampleModal"><i class="fa fa-pencil-square-o"></i>
                                เพิ่มเครื่องจักร</button></a>

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
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ลำดับ</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 18%;">ประเภทเครื่องจักร
                                        </th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 18%;">ยี่ห้อ</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 18%;">รุ่น</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 18%;">แรงม้า</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 18%;">การกระทำ</th>
                                        <!-- <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">-</th> -->

                                    </tr>




                                </thead>
                                <tbody>
                                    <?php
                            
                                // $sem = $_SESSION['User_id'];
                                // $query = "SELECT * FROM user WHERE User_id = '$sem'";
                                // $result = mysqli_query($conn,$query);
                                // $row = mysqli_fetch_array($result);
                                $queryr =  "SELECT * FROM machine WHERE Users_id = $sem ";
                                $result = mysqli_query($conn,$queryr);
                                $count = 1;
                                while ($row =  mysqli_fetch_array($result)){
                                
                                    // echo"<tr>";
  
                                    // echo"<td>$count</td>";
                                    // echo"<td>$row[Machine_Type]</td>";
                                    // echo"<td>$row[Machine_Brand]</td>";
                                    // echo"<td>$row[Machine_Model]</td>";
                                    // echo"<td>$row[Machine_Horsepower]</td>";
                                    // echo"<td><a class='btn btn-info btn-sm' href='update_machine.php?Machine_Id=$row['Machine_Id'];'> <i class='fas fa-pencil-alt'> </i> Edit </a> "
                                    // echo"<a class='btn btn-danger btn-sm' href='delete_machine.php?Machine_Id=$row['Machine_Id'];'> <i class='fas fa-trash'> </i> Delete </a></td>"
                                    // $count++;
                                    //  echo"</tr>";

                                    ?>
                                    <tr>
                                        <td><?php echo $count ?></td>
                                        <td><?php echo $row['Machine_Type'] ?></td>
                                        <td><?php echo $row['Machine_Brand'] ?></td>
                                        <td><?php echo $row['Machine_Model'] ?></td>
                                        <td><?php echo $row['Machine_Horsepower'] ?></td>
                                        <td><a style="margin-right: 10px;" class='btn btn-info btn-sm'
                                                href='update_machine.php?Machine_Id=<?php echo $row["Machine_Id"] ?>'>
                                                <i class='fas fa-pencil-alt'> </i> แก้ไข </a>
                                            <!-- <a class='btn btn-danger btn-sm'
                                                href='delete_machine.php?Machine_Id=<?php echo $row["Machine_Id"] ?>'>
                                                <i class='fas fa-trash'> </i> ลบ </a> -->
                                            <botton style="margin-right: 10px;" class="btn btn-danger btn-sm"
                                                data-toggle="modal"
                                                data-target="#modalShow<?php echo $row["Machine_Id"] ?>">
                                                <i class='fas fa-trash'> </i> ลบ
                                            </botton>
                                            <div class="modal fade" id="modalShow<?php echo $row["Machine_Id"] ?>"
                                                tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <!--Content-->
                                                    <div class="modal-content">
                                                        <!--Header-->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title w-100" id="myModalLabel">
                                                                ลบเครื่องจักร
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <!--Body-->
                                                        <div class="modal-body">
                                                            คุณต้องลบเครื่องจักรนี้หรือไม่
                                                        </div>
                                                        <!--Footer-->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">ปิด</button>
                                                            <a type="summit" class="btn btn-danger" name="deletebtn"
                                                                id="deletebtn"
                                                                href='delete_machine.php?Machine_Id=<?php echo $row["Machine_Id"] ?>'>ยืนยัน</a>
                                                        </div>
                                                    </div>
                                                    <!--/.Content-->
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php
                                    $count++;
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