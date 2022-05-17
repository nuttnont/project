<?php 
@ini_set('display_errors', '0');
session_start();
include('../connection.php');
include ("head.php");

if (isset($_GET['year'])) {
    $year = $_GET['year'];
} else {
    $year = " ";
}
?>

<canvas id="graphCanvas2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>


<!-- <script src="js/report.js"></script> -->
<script>
$(document).ready(function() {
    showGraph();
});

function showGraph() {
    {
        $.post("data.php?year=" + <?php echo $year ?>, function(data) {
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