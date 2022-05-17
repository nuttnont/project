<?php
session_start();
include('../connection.php');
// $sem = $_SESSION['ids'];

// $query = "SELECT * FROM user WHERE Users_id = '$sem'";
// $result = mysqli_query($conn,$query);
// $row = mysqli_fetch_array($result);

if (isset($_GET['brand222'])) {
    $brand = $_GET['brand222'];
    $brand333 = $_GET['brand333'];

    // $query1 = " SELECT * FROM machine WHERE Machine_Id = '$test'";
    // $result1 = mysqli_query($conn, $query1);
    // $row1 =  mysqli_fetch_assoc($result1);
    // $test = $row1['Machine_Brand'];
} else {
    $brand = " ";
}
// $query1 = " SELECT * FROM machine WHERE Machine_Id = '$test'";
// $result1 = mysqli_query($conn, $query1);
// $row1 =  mysqli_fetch_assoc($result1);
// $test = $row1['Machine_Brand'];
// echo $test;

$query3 = " SELECT * FROM machine WHERE Machine_Brand = '$brand' AND Machine_Type = '$brand333' ORDER BY Machine_Brand ASC";
$result3 = mysqli_query($conn, $query3);
?>

<select class="form-control" id="machine_model">
    <option value=''>โปรดเลือก</option>
    <?php


    while ($row =  mysqli_fetch_assoc($result3)) {
        echo '<option value="' . $row['Machine_Id'] . '">' . $row['Machine_Model'] . '</option>';
    }
    // while ($row=mysqli_fetch_assoc($result2)) {
    //                                                     echo "<option value=' 'data-showdata_model='".$row['Machine_Horsepower']."'>".$row['Machine_Model']."</option>";
    //                                                     }
    ?>
</select>