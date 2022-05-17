<?php
$menu = "index";
$title = "แดชบอร์ด";
include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid col-md-11">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="nav-icon fas fa-home"></i> <?php echo $title; ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
                    <li class="breadcrumb-item"><?php echo $title; ?></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <!-- <div id="chart-container">
                    <canvas id="graphCanvas"></canvas>
                </div> -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">การผลิตและจำหน่ายแร่ (ประจำเดือน)</h3>

                        <!-- <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> -->
                    </div>
                    <div class="card-body">
                        <select class="form-control" id="month">
                            <!-- <option value=''>เดือน</option> -->
                            <?php
                            $query2 = " SELECT * FROM mineral_production,mineral,license,area_engineering WHERE mineral_production.Mineral_Id = mineral.Mineral_Id AND mineral_production.Mine_Id = license.Mine_Id AND license.Area_id = area_engineering.Area_id AND area_engineering.Users_id =  '$sem' GROUP BY Month,Year ORDER BY Month DESC,Year DESC";
                            $result2 = mysqli_query($conn, $query2);
                            

                            while ($row = mysqli_fetch_assoc($result2)) {
                                $nameMonth = $row["Month"];
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
                            echo '<option value="' . $row['Month']," ",$row['Year'] . '">' . $nameMonth," ",$row['Year'] . '</option>';
                            }
                            ?>
                        </select>
                        <div class="chart" id="showMonth">
                            <?php include('selectMonth.php'); ?>
                            <!-- <canvas id="graphCanvas"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas> -->
                            <!-- <canvas id="graphCanvas"></canvas> -->
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>

                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">การผลิตและจำหน่ายแร่ (ประจำปี)</h3>

                        <!-- <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> -->
                    </div>
                    <div class="card-body">
                        <select class="form-control" id="year">
                            <!-- <option value=''>เดือน</option> -->
                            <?php
                            $query2 = " SELECT DISTINCT Year FROM mineral_production,mineral,license,area_engineering WHERE mineral_production.Mineral_Id = mineral.Mineral_Id AND mineral_production.Mine_Id = license.Mine_Id AND license.Area_id = area_engineering.Area_id AND area_engineering.Users_id =  '$sem' ORDER BY cast(Year as int) DESC";
                            $result2 = mysqli_query($conn, $query2);
                            

                            while ($row = mysqli_fetch_assoc($result2)) {
                            echo '<option value="' . $row['Year'] . '">' . $row['Year'] . '</option>';
                            }
                            ?>
                        </select>
                        <div class="chart" id="showYear">
                            <?php include('selectYear.php'); ?>
                            <!-- <canvas id="graphCanvas"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas> -->
                            <!-- <canvas id="graphCanvas"></canvas> -->
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>

                <script>
                $(document).ready(function() {
                    // $('#sel_users').select2();
                    $('#month').change(function() {
                        var value = $(this).val();
                        $.ajax({
                            url: 'selectMonth.php?month=' + value,
                            type: 'get',
                            success: function(data) {
                                $('#showMonth').html(data);
                            },
                            error: function() {
                                $('#showMonth').text('An error occurred');
                            },
                        });
                        // $('#sel_users').val(value);
                        //   $('#sel_users').select2().trigger('change');
                    });
                });

                $(document).ready(function() {
                    // $('#sel_users').select2();
                    $('#year').change(function() {
                        var value = $(this).val();
                        $.ajax({
                            url: 'selectYear.php?year=' + value,
                            type: 'get',
                            success: function(data) {
                                $('#showYear').html(data);
                            },
                            error: function() {
                                $('#showYear').text('An error occurred');
                            },
                        });
                        // $('#sel_users').val(value);
                        //   $('#sel_users').select2().trigger('change');
                    });
                });

                $(document).ready(function() {
                    showGraph();
                });

                function showGraph() {
                    {
                        $.post("data.php?month=" + <?php echo date("m",strtotime('-1 month')) ?> + "&year=" +
                            <?php echo date("Y",strtotime('543 years')) ?>,
                            function(data) {
                                console.log(data);
                                let name = [];
                                let year = [];
                                let month = [];
                                let sell = [];
                                let quantity = [];

                                for (let i in data) {
                                    name.push(data[i].Mineral_Name);
                                    year.push(data[i].Year);
                                    month.push(data[i].Month);
                                    sell.push(data[i].Mp_sell);
                                    quantity.push(data[i].Mp_Quantity);
                                }

                                let chartdata = {
                                    labels: name,
                                    datasets: [{
                                            label: 'แร่ที่ผลิตได้',
                                            backgroundColor: 'rgba(60,141,188,0.9)',
                                            borderColor: 'rgba(60,141,188,0.8)',
                                            pointRadius: false,
                                            pointColor: '#3b8bba',
                                            pointStrokeColor: 'rgba(60,141,188,1)',
                                            pointHighlightFill: '#fff',
                                            pointHighlightStroke: 'rgba(60,141,188,1)',
                                            data: quantity
                                        },
                                        {
                                            label: 'จำหน่ายแร่ออก',
                                            backgroundColor: 'rgba(210, 214, 222, 1)',
                                            borderColor: 'rgba(210, 214, 222, 1)',
                                            pointRadius: false,
                                            pointColor: 'rgba(210, 214, 222, 1)',
                                            pointStrokeColor: '#c1c7d1',
                                            pointHighlightFill: '#fff',
                                            pointHighlightStroke: 'rgba(220,220,220,1)',
                                            data: sell
                                        }
                                    ]
                                };

                                var barChartOptions = {
                                    responsive: true,
                                    maintainAspectRatio: false,
                                    datasetFill: false
                                }

                                let graphTarget = $('#graphCanvas');
                                let barGraph = new Chart(graphTarget, {
                                    type: 'bar',
                                    data: chartdata,
                                    options: barChartOptions
                                })
                            })
                    }
                }

                $(document).ready(function() {
                    showGraph2();
                });

                function showGraph2() {
                    {
                        $.post("data.php?year=" + <?php echo date("Y",strtotime('+543 years')) ?>, function(data) {
                            console.log(data);
                            let name = [];
                            let year = [];
                            let month = [];
                            let sell = [];
                            let quantity = [];

                            for (let i in data) {
                                name.push(data[i].Mineral_Name);
                                year.push(data[i].Year);
                                month.push(data[i].Month);
                                sell.push(data[i].Mp_sell);
                                quantity.push(data[i].Mp_Quantity);
                            }

                            let chartdata = {
                                labels: name,
                                datasets: [{
                                        label: 'แร่ที่ผลิตได้',
                                        backgroundColor: 'rgba(60,141,188,0.9)',
                                        borderColor: 'rgba(60,141,188,0.8)',
                                        pointRadius: false,
                                        pointColor: '#3b8bba',
                                        pointStrokeColor: 'rgba(60,141,188,1)',
                                        pointHighlightFill: '#fff',
                                        pointHighlightStroke: 'rgba(60,141,188,1)',
                                        data: quantity
                                    },
                                    {
                                        label: 'จำหน่ายแร่ออก',
                                        backgroundColor: 'rgba(210, 214, 222, 1)',
                                        borderColor: 'rgba(210, 214, 222, 1)',
                                        pointRadius: false,
                                        pointColor: 'rgba(210, 214, 222, 1)',
                                        pointStrokeColor: '#c1c7d1',
                                        pointHighlightFill: '#fff',
                                        pointHighlightStroke: 'rgba(220,220,220,1)',
                                        data: sell
                                    }
                                ]
                            };

                            var barChartOptions = {
                                responsive: true,
                                maintainAspectRatio: false,
                                datasetFill: false
                            }

                            let graphTarget = $('#graphCanvas2');
                            let barGraph = new Chart(graphTarget, {
                                type: 'bar',
                                data: chartdata,
                                options: barChartOptions
                            })
                        })
                    }
                }
                </script>

            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<?php include('footer.php'); ?>

</body>

</html>