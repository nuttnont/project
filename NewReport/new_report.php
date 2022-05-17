<?php
$menu = "new_report";
$title = "เพิ่มรายงานใหม่";
include("header.php"); ?>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname   = "urmoodco_project";
$db = mysqli_connect($host, $user, $pass, $dbname);
if(mysqli_connect_errno()){
echo "Failed to connect ".mysqli_connect_error();
} ?>

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

            <form>
                <div class="step step-1 active">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายงานการเหมืองประจำเดือน</h3>
                        </div>
                        <br>
                        <div class="card-body px-3 p-1 pb-3">
                            <div class="row justify-content-center">
                                <div class="col-sm-12">
                                    <div class="form">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="month" value="2021-01"
                                                        id="example-month-input">
                                                </div>
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
                                    <form role="form">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>เลขที่ประทานบัตร</label>
                                                    <select class="form-control" id="selectdata">
                                                        <?php
                                                        echo "<option>โปรดเลือก</option>";
                                                        $query = mysqli_query($db, "SELECT * FROM project WHERE User_id = 1 order by Project_id asc") or die (mysqli_error());
                                                        while ( $row=mysqli_fetch_assoc($query)) {
                                                        echo "<option value=' 'data-showdata=' ".$row['Project_name']."
                                                        'data-showdata_2=' ".$row['Project_province']."
                                                        'data-showdata_3=' ".$row['Project_district']."
                                                        'data-showdata_4=' ".$row['Project_sub_district']."
                                                        'data-showdata_5=' ".$row['Project_end_date']."
                                                        'data-showdata_6=' ".$row['Project_mineral_type']."
                                                        'data-showdata_7=' ".$row['Project_subcontract_name']."
                                                        'data-showdata_8=' ".$row['Project_rai']."
                                                        'data-showdata_9=' ".$row['Project_ngan']."
                                                        'data-showdata_10=' ".$row['Project_wa']."
                                                        '>".$row['Project_id']."</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>ชื่อผู้ถือประทานบัตร</label>
                                                    <input type="text" class="form-control" placeholder="..."
                                                        disabled="" id="showdata">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ตั้งอยู่ที่ จังหวัด</label>
                                                    <input type="text" class="form-control" placeholder="..."
                                                        disabled="" id="showdata_2">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>อำเภอ</label>
                                                    <input type="text" class="form-control" placeholder="..."
                                                        disabled="" id="showdata_3">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ตำบล</label>
                                                    <input type="text" class="form-control" placeholder="..."
                                                        disabled="" id="showdata_4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ประทานบัตรสิ้นอายุ</label>
                                                    <input type="text" class="form-control" placeholder="..."
                                                        disabled="" id="showdata_5">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ชนิดแร่</label>
                                                    <input type="text" class="form-control" placeholder="..."
                                                        disabled="" id="showdata_6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ชื่อผู้รับช่วงการทำเหมือง</label>
                                                    <input type="text" class="form-control" placeholder="..."
                                                        disabled="" id="showdata_7">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ชื่อวิศวกรผู้ควบคุม</label>
                                                    <input type="text" class="form-control" placeholder="..."
                                                        disabled="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>เลขที่ใบอนุญาตประกอบวิชาชีพ</label>
                                                    <input type="text" class="form-control" placeholder="..."
                                                        disabled="">
                                                </div>
                                            </div>
                                        </div>


                                    </form>
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
                                    <form role="form">
                                        <div class="row justify-content-center">
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-3 col-form-label">จำนวน</label>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" placeholder="1"
                                                        id="example-text-input" disabled="">
                                                </div>
                                                <label for="example-text-input"
                                                    class="col-3 col-form-label">แปลง</label>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-3 col-form-label">รวมเนื้อที่</label>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" placeholder="..."
                                                        disabled="" id="showdata_8">
                                                </div>
                                                <label for="example-text-input" class="col-3 col-form-label">ไร่</label>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input" class="col-3 col-form-label"></label>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" placeholder="..."
                                                        disabled="" id="showdata_9">
                                                </div>
                                                <label for="example-text-input" class="col-3 col-form-label">งาน</label>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input" class="col-3 col-form-label"></label>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" placeholder="..."
                                                        disabled="" id="showdata_10">
                                                </div>
                                                <label for="example-text-input"
                                                    class="col-3 col-form-label">ตารางวา</label>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">เนื้อที่ทำเหมืองในพื้นที่เดิม</label>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-3 col-form-label">จำนวน</label>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" id="example-text-input"
                                                        placeholder="...">
                                                </div>
                                                <label for="example-text-input" class="col-3 col-form-label">ไร่</label>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input" class="col-3 col-form-label"></label>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" id="example-text-input"
                                                        placeholder="...">
                                                </div>
                                                <label for="example-text-input" class="col-3 col-form-label">งาน</label>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input" class="col-3 col-form-label"></label>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" id="example-text-input"
                                                        placeholder="...">
                                                </div>
                                                <label for="example-text-input"
                                                    class="col-3 col-form-label">ตารางวา</label>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">เนื้อที่ทำเหมืองในพื้นที่ใหม่ในเดือนนี้</label>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-3 col-form-label">จำนวน</label>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" placeholder="..."
                                                        id="example-text-input">
                                                </div>
                                                <label for="example-text-input" class="col-3 col-form-label">ไร่</label>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input" class="col-3 col-form-label"></label>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" placeholder="..."
                                                        id="example-text-input">
                                                </div>
                                                <label for="example-text-input" class="col-3 col-form-label">งาน</label>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input" class="col-3 col-form-label"></label>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" placeholder="..."
                                                        id="example-text-input">
                                                </div>
                                                <label for="example-text-input"
                                                    class="col-3 col-form-label">ตารางวา</label>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">รวมเนื้อที่ทำเหมือง</label>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-3 col-form-label">จำนวน</label>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" value="..."
                                                        id="example-text-input" disabled="">
                                                </div>
                                                <label for="example-text-input" class="col-3 col-form-label">ไร่</label>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input" class="col-3 col-form-label"></label>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" value="..."
                                                        id="example-text-input" disabled="">
                                                </div>
                                                <label for="example-text-input" class="col-3 col-form-label">งาน</label>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input" class="col-3 col-form-label"></label>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" value="..."
                                                        id="example-text-input" disabled="">
                                                </div>
                                                <label for="example-text-input"
                                                    class="col-3 col-form-label">ตารางวา</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="next-btn">ถัดไป</button>
                </div>
            </form>

            <form>
                <div class="step step-2">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายละเอียดเครื่องจักรและอุปกรณ์ในการทำเหมือง</h3>
                        </div>
                        <br>
                        <div class="card-body px-3 p-1 pb-3">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <form role="form">
                                        <div class="row col-md-12 px-0 mx-0 mb-3 border-bottom">
                                            <label>1) รถแทรกเตอร์</label>
                                            <div class="row justify-content-center container-fluid px-0 mx-0"
                                                id="dynamic_field">
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">รุ่น</label>
                                                        <div class="col-6">
                                                            <select class="form-control name_list" name="tractor[]">
                                                                <option>option 1</option>
                                                                <option>option 2</option>
                                                                <option>option 3</option>
                                                                <option>option 4</option>
                                                                <option>option 5</option>
                                                            </select>
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label"></label>
                                                    </div>
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">จำนวน</label>
                                                        <div class="col-6">
                                                            <input class="form-control name_list" type="text"
                                                                placeholder="..." id="example-text-input"
                                                                name="tractor_value[]">
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">คัน</label>
                                                    </div>
                                                    <div class="form-group row col-sm-2 px-0 mx-0">
                                                        <div
                                                            class="d-grid gap-2 justify-content-center container-fluid">
                                                            <button class="btn btn-primary" type="button" name="add"
                                                                id="add" style="width: 100%;">เพิ่ม</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row container-fluid px-0 mx-0">
                                                <div class="form-group row col-sm-5 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้ารวม</label>
                                                    <div class="col-6">
                                                        <input class="form-control name_list" type="text"
                                                            placeholder="..." id="example-text-input" disabled="">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้า</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-md-12 px-0 mx-0 mb-3 border-bottom">
                                            <label>2) รถตัก</label>
                                            <div class="row justify-content-center container-fluid px-0 mx-0"
                                                id="dynamic_field_2">
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">รุ่น</label>
                                                        <div class="col-6">
                                                            <select class="form-control name_list" name="loader[]">
                                                                <option>option 1</option>
                                                                <option>option 2</option>
                                                                <option>option 3</option>
                                                                <option>option 4</option>
                                                                <option>option 5</option>
                                                            </select>
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label"></label>
                                                    </div>
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">จำนวน</label>
                                                        <div class="col-6">
                                                            <input class="form-control name_list" type="text"
                                                                placeholder="..." id="example-text-input"
                                                                name="loader_value[]">
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">คัน</label>
                                                    </div>
                                                    <div class="form-group row col-sm-2 px-0 mx-0">
                                                        <div
                                                            class="d-grid gap-2 justify-content-center container-fluid">
                                                            <button class="btn btn-primary" type="button" name="add"
                                                                id="add_2" style="width: 100%;">เพิ่ม</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row container-fluid px-0 mx-0">
                                                <div class="form-group row col-sm-5 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้ารวม</label>
                                                    <div class="col-6">
                                                        <input class="form-control name_list" type="text"
                                                            placeholder="..." id="example-text-input" disabled="">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้า</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-md-12 px-0 mx-0 mb-3 border-bottom">
                                            <label>3) รถขุด</label>
                                            <div class="row justify-content-center container-fluid px-0 mx-0"
                                                id="dynamic_field_3">
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">รุ่น</label>
                                                        <div class="col-6">
                                                            <select class="form-control name_list" name="excavator[]">
                                                                <option>option 1</option>
                                                                <option>option 2</option>
                                                                <option>option 3</option>
                                                                <option>option 4</option>
                                                                <option>option 5</option>
                                                            </select>
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label"></label>
                                                    </div>
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">จำนวน</label>
                                                        <div class="col-6">
                                                            <input class="form-control name_list" type="text"
                                                                placeholder="..." id="example-text-input"
                                                                name="excavator_value[]">
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">คัน</label>
                                                    </div>
                                                    <div class="form-group row col-sm-2 px-0 mx-0">
                                                        <div
                                                            class="d-grid gap-2 justify-content-center container-fluid">
                                                            <button class="btn btn-primary" type="button" name="add"
                                                                id="add_3" style="width: 100%;">เพิ่ม</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row container-fluid px-0 mx-0">
                                                <div class="form-group row col-sm-5 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้ารวม</label>
                                                    <div class="col-6">
                                                        <input class="form-control name_list" type="text"
                                                            placeholder="..." id="example-text-input" disabled="">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้า</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-md-12 px-0 mx-0 mb-3 border-bottom">
                                            <label>4) เครื่องอัดลม</label>
                                            <div class="row justify-content-center container-fluid px-0 mx-0"
                                                id="dynamic_field_4">
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">รุ่น</label>
                                                        <div class="col-6">
                                                            <select class="form-control name_list"
                                                                name="carbonatedmachine[]">
                                                                <option>option 1</option>
                                                                <option>option 2</option>
                                                                <option>option 3</option>
                                                                <option>option 4</option>
                                                                <option>option 5</option>
                                                            </select>
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label"></label>
                                                    </div>
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">จำนวน</label>
                                                        <div class="col-6">
                                                            <input class="form-control name_list" type="text"
                                                                placeholder="..." id="example-text-input"
                                                                name="carbonatedmachine_value[]">
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">คัน</label>
                                                    </div>
                                                    <div class="form-group row col-sm-2 px-0 mx-0">
                                                        <div
                                                            class="d-grid gap-2 justify-content-center container-fluid">
                                                            <button class="btn btn-primary" type="button" name="add"
                                                                id="add_4" style="width: 100%;">เพิ่ม</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row container-fluid px-0 mx-0">
                                                <div class="form-group row col-sm-5 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้ารวม</label>
                                                    <div class="col-6">
                                                        <input class="form-control name_list" type="text"
                                                            placeholder="..." id="example-text-input" disabled="">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้า</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-md-12 px-0 mx-0 mb-3 border-bottom">
                                            <label>5) เครื่องเจาะ</label>
                                            <div class="row justify-content-center container-fluid px-0 mx-0"
                                                id="dynamic_field_5">
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">รุ่น</label>
                                                        <div class="col-6">
                                                            <select class="form-control name_list" name="driller[]">
                                                                <option>option 1</option>
                                                                <option>option 2</option>
                                                                <option>option 3</option>
                                                                <option>option 4</option>
                                                                <option>option 5</option>
                                                            </select>
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label"></label>
                                                    </div>
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">จำนวน</label>
                                                        <div class="col-6">
                                                            <input class="form-control name_list" type="text"
                                                                placeholder="..." id="example-text-input"
                                                                name="driller_value[]">
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">คัน</label>
                                                    </div>
                                                    <div class="form-group row col-sm-2 px-0 mx-0">
                                                        <div
                                                            class="d-grid gap-2 justify-content-center container-fluid">
                                                            <button class="btn btn-primary" type="button" name="add"
                                                                id="add_5" style="width: 100%;">เพิ่ม</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row container-fluid px-0 mx-0">
                                                <div class="form-group row col-sm-5 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้ารวม</label>
                                                    <div class="col-6">
                                                        <input class="form-control name_list" type="text"
                                                            placeholder="..." id="example-text-input" disabled="">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้า</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-md-12 px-0 mx-0 mb-3 border-bottom">
                                            <label>6) เครื่องเจาะแจคแฮมเมอร์</label>
                                            <div class="row justify-content-center container-fluid px-0 mx-0"
                                                id="dynamic_field_6">
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">รุ่น</label>
                                                        <div class="col-6">
                                                            <select class="form-control name_list" name="jackhammer[]">
                                                                <option>option 1</option>
                                                                <option>option 2</option>
                                                                <option>option 3</option>
                                                                <option>option 4</option>
                                                                <option>option 5</option>
                                                            </select>
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label"></label>
                                                    </div>
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">จำนวน</label>
                                                        <div class="col-6">
                                                            <input class="form-control name_list" type="text"
                                                                placeholder="..." id="example-text-input"
                                                                name="jackhammer_value[]">
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">คัน</label>
                                                    </div>
                                                    <div class="form-group row col-sm-2 px-0 mx-0">
                                                        <div
                                                            class="d-grid gap-2 justify-content-center container-fluid">
                                                            <button class="btn btn-primary" type="button" name="add"
                                                                id="add_6" style="width: 100%;">เพิ่ม</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row container-fluid px-0 mx-0">
                                                <div class="form-group row col-sm-5 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้ารวม</label>
                                                    <div class="col-6">
                                                        <input class="form-control name_list" type="text"
                                                            placeholder="..." id="example-text-input" disabled="">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้า</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-md-12 px-0 mx-0 mb-3 border-bottom">
                                            <label>7) เครื่องสูบทราย</label>
                                            <div class="row justify-content-center container-fluid px-0 mx-0"
                                                id="dynamic_field_7">
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">รุ่น</label>
                                                        <div class="col-6">
                                                            <select class="form-control name_list" name="sandpump[]">
                                                                <option>option 1</option>
                                                                <option>option 2</option>
                                                                <option>option 3</option>
                                                                <option>option 4</option>
                                                                <option>option 5</option>
                                                            </select>
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label"></label>
                                                    </div>
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">จำนวน</label>
                                                        <div class="col-6">
                                                            <input class="form-control name_list" type="text"
                                                                placeholder="..." id="example-text-input"
                                                                name="sandpump_value[]">
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">คัน</label>
                                                    </div>
                                                    <div class="form-group row col-sm-2 px-0 mx-0">
                                                        <div
                                                            class="d-grid gap-2 justify-content-center container-fluid">
                                                            <button class="btn btn-primary" type="button" name="add"
                                                                id="add_7" style="width: 100%;">เพิ่ม</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row container-fluid px-0 mx-0">
                                                <div class="form-group row col-sm-5 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้ารวม</label>
                                                    <div class="col-6">
                                                        <input class="form-control name_list" type="text"
                                                            placeholder="..." id="example-text-input" disabled="">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้า</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-md-12 px-0 mx-0 mb-3 border-bottom">
                                            <label>8) เครื่องสูบน้ำ</label>
                                            <div class="row justify-content-center container-fluid px-0 mx-0"
                                                id="dynamic_field_8">
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">รุ่น</label>
                                                        <div class="col-6">
                                                            <select class="form-control name_list" name="waterpump[]">
                                                                <option>option 1</option>
                                                                <option>option 2</option>
                                                                <option>option 3</option>
                                                                <option>option 4</option>
                                                                <option>option 5</option>
                                                            </select>
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label"></label>
                                                    </div>
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">จำนวน</label>
                                                        <div class="col-6">
                                                            <input class="form-control name_list" type="text"
                                                                placeholder="..." id="example-text-input"
                                                                name="waterpump_value[]">
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">คัน</label>
                                                    </div>
                                                    <div class="form-group row col-sm-2 px-0 mx-0">
                                                        <div
                                                            class="d-grid gap-2 justify-content-center container-fluid">
                                                            <button class="btn btn-primary" type="button" name="add"
                                                                id="add_8" style="width: 100%;">เพิ่ม</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row container-fluid px-0 mx-0">
                                                <div class="form-group row col-sm-5 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้ารวม</label>
                                                    <div class="col-6">
                                                        <input class="form-control name_list" type="text"
                                                            placeholder="..." id="example-text-input" disabled="">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้า</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-md-12 px-0 mx-0 mb-3 border-bottom">
                                            <label>9) รถบรรทุกเทหลัง</label>
                                            <div class="row justify-content-center container-fluid px-0 mx-0"
                                                id="dynamic_field_9">
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">รุ่น</label>
                                                        <div class="col-6">
                                                            <select class="form-control name_list" name="dumpertruck[]">
                                                                <option>option 1</option>
                                                                <option>option 2</option>
                                                                <option>option 3</option>
                                                                <option>option 4</option>
                                                                <option>option 5</option>
                                                            </select>
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label"></label>
                                                    </div>
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">จำนวน</label>
                                                        <div class="col-6">
                                                            <input class="form-control name_list" type="text"
                                                                placeholder="..." id="example-text-input"
                                                                name="dumpertruck_value[]">
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">คัน</label>
                                                    </div>
                                                    <div class="form-group row col-sm-2 px-0 mx-0">
                                                        <div
                                                            class="d-grid gap-2 justify-content-center container-fluid">
                                                            <button class="btn btn-primary" type="button" name="add"
                                                                id="add_9" style="width: 100%;">เพิ่ม</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row container-fluid px-0 mx-0">
                                                <div class="form-group row col-sm-5 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้ารวม</label>
                                                    <div class="col-6">
                                                        <input class="form-control name_list" type="text"
                                                            placeholder="..." id="example-text-input" disabled="">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้า</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-md-12 px-0 mx-0 mb-3 border-bottom">
                                            <label>10) รถบรรทุกน้ำ</label>
                                            <div class="row justify-content-center container-fluid px-0 mx-0"
                                                id="dynamic_field_10">
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">รุ่น</label>
                                                        <div class="col-6">
                                                            <select class="form-control name_list" name="watertruck[]">
                                                                <option>option 1</option>
                                                                <option>option 2</option>
                                                                <option>option 3</option>
                                                                <option>option 4</option>
                                                                <option>option 5</option>
                                                            </select>
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label"></label>
                                                    </div>
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">จำนวน</label>
                                                        <div class="col-6">
                                                            <input class="form-control name_list" type="text"
                                                                placeholder="..." id="example-text-input"
                                                                name="watertruck_value[]">
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">คัน</label>
                                                    </div>
                                                    <div class="form-group row col-sm-2 px-0 mx-0">
                                                        <div
                                                            class="d-grid gap-2 justify-content-center container-fluid">
                                                            <button class="btn btn-primary" type="button" name="add"
                                                                id="add_10" style="width: 100%;">เพิ่ม</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row container-fluid px-0 mx-0">
                                                <div class="form-group row col-sm-5 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้ารวม</label>
                                                    <div class="col-6">
                                                        <input class="form-control name_list" type="text"
                                                            placeholder="..." id="example-text-input" disabled="">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้า</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-md-12 px-0 mx-0 mb-3 border-bottom">
                                            <label>11) สายพานลำเลียง</label>
                                            <div class="row justify-content-center container-fluid px-0 mx-0"
                                                id="dynamic_field_11">
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">รุ่น</label>
                                                        <div class="col-6">
                                                            <select class="form-control name_list"
                                                                name="conveyorbelt[]">
                                                                <option>option 1</option>
                                                                <option>option 2</option>
                                                                <option>option 3</option>
                                                                <option>option 4</option>
                                                                <option>option 5</option>
                                                            </select>
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label"></label>
                                                    </div>
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">จำนวน</label>
                                                        <div class="col-6">
                                                            <input class="form-control name_list" type="text"
                                                                placeholder="..." id="example-text-input"
                                                                name="conveyorbelt_value[]">
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">คัน</label>
                                                    </div>
                                                    <div class="form-group row col-sm-2 px-0 mx-0">
                                                        <div
                                                            class="d-grid gap-2 justify-content-center container-fluid">
                                                            <button class="btn btn-primary" type="button" name="add"
                                                                id="add_11" style="width: 100%;">เพิ่ม</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row container-fluid px-0 mx-0">
                                                <div class="form-group row col-sm-5 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้ารวม</label>
                                                    <div class="col-6">
                                                        <input class="form-control name_list" type="text"
                                                            placeholder="..." id="example-text-input" disabled="">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้า</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-md-12 px-0 mx-0 mb-3 border-bottom">
                                            <label>12) การขนส่งด้วยลวดสลิง</label>
                                            <div class="row justify-content-center container-fluid px-0 mx-0"
                                                id="dynamic_field_12">
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">รุ่น</label>
                                                        <div class="col-6">
                                                            <select class="form-control name_list"
                                                                name="wrstransport[]">
                                                                <option>option 1</option>
                                                                <option>option 2</option>
                                                                <option>option 3</option>
                                                                <option>option 4</option>
                                                                <option>option 5</option>
                                                            </select>
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label"></label>
                                                    </div>
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">จำนวน</label>
                                                        <div class="col-6">
                                                            <input class="form-control name_list" type="text"
                                                                placeholder="..." id="example-text-input"
                                                                name="wrstransport_value[]">
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">คัน</label>
                                                    </div>
                                                    <div class="form-group row col-sm-2 px-0 mx-0">
                                                        <div
                                                            class="d-grid gap-2 justify-content-center container-fluid">
                                                            <button class="btn btn-primary" type="button" name="add"
                                                                id="add_12" style="width: 100%;">เพิ่ม</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row container-fluid px-0 mx-0">
                                                <div class="form-group row col-sm-5 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้ารวม</label>
                                                    <div class="col-6">
                                                        <input class="form-control name_list" type="text"
                                                            placeholder="..." id="example-text-input" disabled="">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้า</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-md-12 px-0 mx-0 mb-3 border-bottom">
                                            <label>13) โรงแต่งแร่</label>
                                            <div class="row container-fluid px-0 mx-0">
                                                <div class="form-group row col-sm-5 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้ารวม</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้า</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-md-12 px-0 mx-0 mb-3 border-bottom">
                                            <label>14) เครื่องจักรและอุปกรณ์ผลิตกระแสไฟฟ้า</label>
                                            <div class="row container-fluid px-0 mx-0">
                                                <div class="form-group row col-sm-5 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้ารวม</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้า</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-md-12 px-0 mx-0">
                                            <label>15) อื่น ๆ</label>
                                            <div class="row justify-content-center container-fluid px-0 mx-0"
                                                id="dynamic_field_13">
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label"></label>
                                                        <div class="col-6">
                                                            <input class="form-control name_list" type="text"
                                                                placeholder="..." id="example-text-input"
                                                                name="other[]">
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label"></label>
                                                    </div>
                                                    <div class="form-group row col-sm-5 px-0 mx-0">
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">จำนวน</label>
                                                        <div class="col-6">
                                                            <input class="form-control name_list" type="text"
                                                                placeholder="..." id="example-text-input"
                                                                name="other_value[]">
                                                        </div>
                                                        <label for="example-text-input"
                                                            class="col-3 col-form-label">คัน</label>
                                                    </div>
                                                    <div class="form-group row col-sm-2 px-0 mx-0">
                                                        <div
                                                            class="d-grid gap-2 justify-content-center container-fluid">
                                                            <button class="btn btn-primary" type="button" name="add"
                                                                id="add_13" style="width: 100%;">เพิ่ม</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row container-fluid px-0 mx-0">
                                                <div class="form-group row col-sm-5 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้ารวม</label>
                                                    <div class="col-6">
                                                        <input class="form-control name_list" type="text"
                                                            placeholder="..." id="example-text-input" disabled="">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">แรงม้า</label>
                                                </div>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="previous-btn">หน้าก่อน</button>
                    <button type="button" class="next-btn">ถัดไป</button>
                </div>
            </form>

            <form>
                <div class="step step-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายละเอียดเชื้อเพลิงที่ใช้ในเดือนนี้</h3>
                        </div>
                        <br>
                        <div class="card-body px-3 p-1 pb-3">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <form role="form">
                                        <div class="row">
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">น้ำมันเบนซิน</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">ลิตร</label>
                                                </div>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">น้ำมันดีเซล</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">ลิตร</label>
                                                </div>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">น้ำมันหล่อลื่น</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">ลิตร</label>
                                                </div>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">ไฟฟ้า</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">ลิตร</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">เชื่อเพลิงอื่น
                                                    ๆ</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">ลิตร</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายละเอียดและปริมาณการใช้วัตถุระเบิดในเดือนนี้ (ถ้ามี)</h3>
                        </div>
                        <br>
                        <div class="card-body px-3 p-1 pb-3">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <form role="form">
                                        <div class="row">
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">วัตถุระเบิด</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                    <!-- <div class="col-3">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio1"
                                                                value="option1">
                                                            <label class="form-check-label"
                                                                for="inlineRadio1">นัด</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio2"
                                                                value="option2">
                                                            <label class="form-check-label"
                                                                for="inlineRadio2">กิโลกรัม</label>
                                                        </div>
                                                    </div> -->
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">นัด</label>
                                                </div>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">แก็ป</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">ดอก</label>
                                                </div>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">ปุ๋ยแอมโมเนีย</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">กิโลกรัม</label>
                                                </div>
                                            </div>
                                            <div class="form-group row col-sm-3 px-0 mx-0">
                                                <label for="example-text-input" class="col-12 col-form-label">อื่น ๆ
                                                    (ระบุ)</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label">ลิตร</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
                                    <form role="form">
                                        <div class="row">
                                            <div class="row container-fluid px-0 mx-0">
                                                <div class="form-group row col-sm-6 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-4 col-form-label">จำนวนพนักงานและคนงาน</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-2 col-form-label">คน</label>
                                                </div>
                                                <div class="form-group row col-sm-6 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-4 col-form-label">จำนวนวันทำงานในเดือนนี้</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-2 col-form-label">คน</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="previous-btn">หน้าก่อน</button>
                    <button type="button" class="next-btn">ถัดไป</button>
                </div>
            </form>

            <form>
                <div class="step step-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายละเอียดการผลิตแร่</h3>
                        </div>
                        <br>
                        <div class="card-body px-3 p-1 pb-3">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <form role="form">
                                        <div class="row">
                                            <div class="row container-fluid px-0 mx-0" id="dynamic_field_14">
                                                <div class="form-group row col-sm-6 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-12 col-form-label">ชนิดแร่</label>
                                                    <div class="row col-sm-12 px-0 mx-0">
                                                        <div class="form-group row col-sm-9 mx-0">
                                                            <input class="form-control" type="text" placeholder="..."
                                                                id="example-text-input" name="mineraltype[]">
                                                        </div>
                                                        <div class="form-group row col-sm-2 px-0 mx-0">
                                                            <div
                                                                class="d-grid gap-2 justify-content-center container-fluid">
                                                                <button class="btn btn-primary" type="button" name="add"
                                                                    id="add_14" style="width: 100%;">เพิ่ม</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group row col-sm-6 px-0 mx-0">
                                                <label for="example-text-input" class="col-12 col-form-label">แร่อื่น
                                                    ๆ</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group row col-sm-6 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">สภาพ/คุณลักษณะ</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row col-sm-6 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">ยอดยกมา</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group row col-sm-6 px-0 mx-0">
                                                <label for="example-text-input" class="col-12 col-form-label">ผลิตได้
                                                    (ตัน)</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row col-sm-6 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">ส่งไปแต่งแร่
                                                    (ตัน)</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group row col-sm-6 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">จำหน่ายแร่ออก
                                                    (ตัน)</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row col-sm-6 px-0 mx-0">
                                                <label for="example-text-input" class="col-12 col-form-label">ยอดคงเหลือ
                                                    ณ
                                                    สิ้นเดือน (ตัน)</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input" disabled="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายละเอียดจำหน่ายแร่</h3>
                        </div>
                        <br>
                        <div class="card-body px-3 p-1 pb-3">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <form role="form">
                                        <div class="row">
                                            <div class="row container-fluid px-0 mx-0" id="dynamic_field_15">
                                                <div class="form-group row col-sm-6 px-0 mx-0">
                                                    <label for="example-text-input"
                                                        class="col-12 col-form-label">ชนิดแร่</label>
                                                    <div class="row col-sm-12 px-0 mx-0">
                                                        <div class="form-group row col-sm-9 mx-0">
                                                            <input class="form-control" type="text" placeholder="..."
                                                                id="example-text-input" name="mineraltype_2[]">
                                                        </div>
                                                        <div class="form-group row col-sm-2 px-0 mx-0">
                                                            <div
                                                                class="d-grid gap-2 justify-content-center container-fluid">
                                                                <button class="btn btn-primary" type="button" name="add"
                                                                    id="add_15" style="width: 100%;">เพิ่ม</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group row col-sm-6 px-0 mx-0">
                                                <label for="example-text-input" class="col-12 col-form-label">แร่อื่น
                                                    ๆ</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                    <label for="example-text-input"
                                                        class="col-3 col-form-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group row col-sm-6 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">สภาพ/คุณลักษณะ</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row col-sm-6 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">ชื่อ/ทะเบียนของผู้ซื้อแร่หรือผู้ใช้แร่</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group row col-sm-6 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">เพื่อใช้ภายในประเทศ (ตัน)</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row col-sm-6 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">ประเภทอุตสาหกรรมที่นำแร่ไปใช้</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group row col-sm-6 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">เลขที่ใบเสร็จรับเงินค่าภาคหลวงแร่/ลงวันที่</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row col-sm-6 px-0 mx-0">
                                                <label for="example-text-input" class="col-12 col-form-label">ค่าภาคหลวง
                                                    (บาท)</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group row col-sm-6 px-0 mx-0">
                                                <label for="example-text-input"
                                                    class="col-12 col-form-label">เพื่อการส่งออกต่างประเทศ
                                                    (ตัน)/ด่านที่ส่งออก</label>
                                                <div class="row col-sm-12 px-0 mx-0">
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" placeholder="..."
                                                            id="example-text-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="previous-btn">หน้าก่อน</button>
                    <button type="submit" class="submit-btn">บันทึก</button>
                </div>
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