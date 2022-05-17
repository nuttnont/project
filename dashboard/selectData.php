<?php 
session_start();
include('../connection.php');
// $sem = $_SESSION['ids'];

// $query = "SELECT * FROM user WHERE Users_id = '$sem'";
// $result = mysqli_query($conn,$query);
// $row = mysqli_fetch_array($result);

if (isset($_GET['type'])) {
    $type = $_GET['type'];
    // $query1 = " SELECT * FROM machine WHERE Machine_Id = '$test'";
    // $result1 = mysqli_query($conn, $query1);
    // $row1 =  mysqli_fetch_assoc($result1);
    // $test = $row1['Machine_Brand'];
} else {
    $type = " ";
}
// $query1 = " SELECT * FROM machine WHERE Machine_Id = '$test'";
// $result1 = mysqli_query($conn, $query1);
// $row1 =  mysqli_fetch_assoc($result1);
// $test = $row1['Machine_Brand'];
// echo $test;

$query2 = " SELECT DISTINCT Machine_Brand FROM machine WHERE Machine_Type = '$type'ORDER BY Machine_Type ASC";
$result2 = mysqli_query($conn, $query2);
?>

<select class="form-control" id="machine_brand">
    <option value=''>โปรดเลือก</option>
    <?php


    while ($row =  mysqli_fetch_assoc($result2)) {
        echo '<option value="' . $row['Machine_Brand'] . '">' . $row['Machine_Brand'] . '</option>';
    }
    // while ($row=mysqli_fetch_assoc($result2)) {
    //                                                     echo "<option value=' 'data-showdata_model='".$row['Machine_Horsepower']."'>".$row['Machine_Model']."</option>";
    //                                                     }
    ?>
</select>


<!-- <script src="js/report.js"></script> -->
<script>
    $(document).ready(function() {


// $('#sel_users').select2();

$('#machine_brand').change(function() {
    var value = $(this).val();
    var value2 = $('#machine_type').val();
    $.ajax({
        url: 'selectData2.php?brand222=' + value + '&brand333=' + value2,
        type: 'get',
        success: function(data) {
            $('#changee2').html(data);
            $('body').css('background', 'black');
        },
        error: function() {
            $('#changee2').text('An error occurred');
        }
    });

});
});

</script>