<?php 
    header('Content-Type: application/json');

    session_start();

    require_once "../connection.php";

    $sem = $_SESSION['ids'];

    if (isset($_GET['month'],$_GET['year'])) {
    $month = $_GET['month'];
    $year = $_GET['year'];

    $sqlQuery = "SELECT Month,Year,Mineral_Name,mineral_production.Mineral_Id,mineral_production.Mp_condition,SUM(mineral_production.Mp_Quantity) AS Mp_Quantity,SUM(mineral_production.Mp_Dressing) AS Mp_Dressing ,SUM(mineral_production.Mp_sell) AS Mp_sell ,SUM(mineral_production.Mp_balance)AS Mp_balance FROM mineral_production,mineral,license,area_engineering WHERE Month = '$month' and Year = '$year' and mineral_production.Mineral_Id = mineral.Mineral_Id AND mineral_production.Mine_Id = license.Mine_Id AND license.Area_id = area_engineering.Area_id AND area_engineering.Users_id =  '$sem' GROUP BY Mineral_Name,year";
    $result = mysqli_query($conn, $sqlQuery);
    
    // $sqlQuery = "SELECT * FROM mineral_production,mineral,license,area_engineering WHERE Month = '$month' and mineral_production.Mineral_Id = mineral.Mineral_Id AND mineral_production.Mine_Id = license.Mine_Id AND license.Area_id = area_engineering.Area_id AND area_engineering.Users_id =  '$sem'";
    // $result = mysqli_query($conn, $sqlQuery);

    } else if (isset($_GET['year'])) {
        $year = $_GET['year'];

    $sqlQuery = "SELECT Month,Year,Mineral_Name,mineral_production.Mineral_Id,mineral_production.Mp_condition,SUM(mineral_production.Mp_Quantity) AS Mp_Quantity,SUM(mineral_production.Mp_Dressing) AS Mp_Dressing ,SUM(mineral_production.Mp_sell) AS Mp_sell ,SUM(mineral_production.Mp_balance)AS Mp_balance FROM mineral_production,mineral,license,area_engineering WHERE year = '$year' and mineral_production.Mineral_Id = mineral.Mineral_Id AND mineral_production.Mine_Id = license.Mine_Id AND license.Area_id = area_engineering.Area_id AND area_engineering.Users_id =  '$sem' GROUP BY Mineral_Name,year";
    $result = mysqli_query($conn, $sqlQuery);


} else {
    $sqlQuery = "SELECT Month,Year,Mineral_Name,mineral_production.Mineral_Id,mineral_production.Mp_condition,SUM(mineral_production.Mp_Quantity) AS Mp_Quantity,SUM(mineral_production.Mp_Dressing) AS Mp_Dressing ,SUM(mineral_production.Mp_sell) AS Mp_sell ,SUM(mineral_production.Mp_balance)AS Mp_balance FROM mineral_production,mineral,license,area_engineering WHERE mineral_production.Mineral_Id = mineral.Mineral_Id AND mineral_production.Mine_Id = license.Mine_Id AND license.Area_id = area_engineering.Area_id AND area_engineering.Users_id =  '$sem' GROUP BY Mineral_Name";
    $result = mysqli_query($conn, $sqlQuery);
}

    $data = array();
    foreach ($result as $row) {
        $data[] = $row;
    }

    mysqli_close($conn);

    echo json_encode($data);

?>