<?php
@ini_set('display_errors', '0');

$month = $_POST["month"];
$year = $_POST["year"];
$mine_id = $_POST["mine_id"];
$fuelArr = json_decode($_POST["fuel"]);
$fuel_inputArr = json_decode($_POST["fuel_inputr"]);
$explosiveselectedArr = json_decode($_POST["explosiveselected"]);
$explosive_inputArr = json_decode($_POST["explosive_input"]);
$explosiveRadioArr = json_decode($_POST["explosiveRadio"]);
$machine_idArr = json_decode($_POST["machine_id"]);
$Machine_numberArr = json_decode($_POST["Machine_number"]);

// $mineralArr = json_decode($_POST["mineral"]);
// $conditionArr = json_decode($_POST["condition"]);
// $quantityArr = json_decode($_POST["quantity"]);

$Wa_New = $_POST["Wa_New"];
$Wa_Sum = $_POST["Wa_Sum"];

$Amount_Employee = $_POST["Amount_Employee"];
$Amount_Day = $_POST["Amount_Day"];

$mineral = json_decode($_POST["mineral"]);
$condition = json_decode($_POST["condition"]);
$quantity = json_decode($_POST["quantity"]);

$minerals = json_decode($_POST["minerals"]);
$Property = json_decode($_POST["condition"]);
$buyer = json_decode($_POST["buyer"]);
$domestic = json_decode($_POST["domestic"]);
$industry = json_decode($_POST["industry"]);
$receipt = json_decode($_POST["receipt"]);
$royalty = json_decode($_POST["royalty"]);
$export = json_decode($_POST["DS_export"]);

$sell = json_decode($_POST["sell"]);
$balance = json_decode($_POST["balance"]);
$dressing = json_decode($_POST["dressing"]);

// $M_dressing = json_decode($_POST["M_dressing"]);
// $dressing_HP = json_decode($_POST["dressing_HP"]);
// $P_generation = json_decode($_POST["P_generation"]);
// $generation_HP = json_decode($_POST["generation_HP"]);
$other_name = json_decode($_POST["other_name"]);
$other_value = json_decode($_POST["other_value"]);


session_start();
include('../connection.php');
/* Check connection */

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//------------------------minning--------------------------------------------
$Fd_Diesel = "";
$Fd_Other = "";
$Fd_Benzene = "";
$Fd_Lubricating_Oil = "";
$Fd_Electricity = "";
$E_Meterial = "";
$E_Cap = "";
$E_Ammonia = "";
$E_Other = "";
$E_N = "";

for ($i = 0; $i < count($fuelArr); $i++) {

    if(($fuelArr[$i] != "")){   /* not allowing empty values and the row which has been removed. */
    
        if($fuelArr[$i] == 'น้ำมันเบนซิน'){

            $Fd_Benzene = $fuel_inputArr[$i];
 
        }
        if($fuelArr[$i] == 'น้ำมันดีเซล'){

            $Fd_Diesel = $fuel_inputArr[$i];
 
        }
        if($fuelArr[$i] == 'น้ำมันหล่อลื่น'){

            $Fd_Lubricating_Oil = $fuel_inputArr[$i];
 
        }
        if($fuelArr[$i] == 'ไฟฟ้า'){

            $Fd_Electricity = $fuel_inputArr[$i];
 
        }
        if($fuelArr[$i] == 'เชื้อเพลิงอื่นๆ'){

            $Fd_Other = $fuel_inputArr[$i];
 
        }
    }

}

for ($i = 0; $i < count($explosiveselectedArr); $i++) {

    if(($explosiveselectedArr[$i] != "")){   /* not allowing empty values and the row which has been removed. */
    
        if($explosiveselectedArr[$i] == 'วัตถุระเบิด'){

            $E_Meterial = $explosive_inputArr[$i];
            $E_N = $explosiveRadioArr[$i];
 
        }
        if($explosiveselectedArr[$i] == 'แก็ป'){

            $E_Cap = $explosive_inputArr[$i];
 
        }
        if($explosiveselectedArr[$i] == 'ปุ๋ยแอมโมเนีย'){

            $E_Ammonia = $explosive_inputArr[$i];
 
        }
        if($explosiveselectedArr[$i] == 'อื่น ๆ'){

            $E_Other = $explosive_inputArr[$i];
 
        }
    }

}
// print_r($explosiveselectedArr);
// print_r($explosive_inputArr);
// print_r($explosiveRadioArr);
// print_r($machine_idArr);
// print_r($Machine_numberArr);
// echo $Wa_New; echo "<br>";
// echo $Wa_Sum; echo "<br>";
// echo $Fd_Diesel; echo "<br>";
// echo $Fd_Other; echo "<br>";
// echo $Fd_Benzene; echo "<br>";
// echo $Fd_Lubricating_Oil; echo "<br>";
// echo $Fd_Electricity; echo "<br>";
// echo $E_Meterial; echo "<br>";
// echo $E_Cap; echo "<br>";
// echo $E_Ammonia; echo "<br>";
// echo $E_Other; echo "<br>";
// echo $Amount_Employee; echo "<br>";
// echo $Amount_Day; echo "<br>";
// echo $E_N; echo "<br>";
$sql2 = "INSERT INTO minning (Mine_Id,Month,Year,Wa_New,Wa_Sum,Fd_Benzene,Fd_Diesel,Fd_Lubricating_Oil,Fd_Electricity,Fd_Other
,E_Meterial,E_Cap,E_Ammonia,E_Other,Amount_Employee,Amount_Day,E_N)
            VALUE ('$mine_id','$month','$year','$Wa_New','$Wa_Sum','$Fd_Benzene','$Fd_Diesel','$Fd_Lubricating_Oil','$Fd_Electricity','$Fd_Other'
            ,'$E_Meterial','$E_Cap','$E_Ammonia','$E_Other','$Amount_Employee','$Amount_Day','$E_N')";

if (!mysqli_query($conn,$sql2))
{
    die('Error: ' . mysqli_error($conn));
}

//------------------------------------------------------------------------------------------------------

for ($i = 0; $i < count($machine_idArr); $i++) {

    if(($machine_idArr[$i] != "")){   /* not allowing empty values and the row which has been removed. */
    $sql="INSERT INTO minning_machine (Mine_Id, Month, Year, Machine_Id, Amount)
VALUES ('$mine_id','$month','$year','$machine_idArr[$i]','$Machine_numberArr[$i]')";
    if (!mysqli_query($conn,$sql))
    {
        die('Error: ' . mysqli_error($conn));
    }
    }
}


// //**************************************** */

// echo $sql;
// echo $sql2;
for ($i = 0; $i < count($other_name); $i++) {


    if(($other_name[$i] != "")){

        if($other_name[$i] == 'โรงแต่งแร่'){

            $Machine_i = "13";
 
        }else if($other_name[$i] == 'เครื่องจักรและอุปกรณ์ผลิตกระแสไฟฟ้า'){

            $Machine_i = "14";
 
        }else{
            $Machine_i = "15";
     
        }
    }

$sql8="INSERT INTO machine_t (Mine_Id, Month, Year, Machine_i, Machine_ot, Machine_hp,no)
VALUES ('$mine_id','$month','$year','$Machine_i' ,'$other_name[$i]','$other_value[$i]','$i')";
    // echo "<script>alert(".$sql8.")</script>";
if (!mysqli_query($conn,$sql8))
{
    die('Error: ' . mysqli_error($conn));
}
}




for ($i = 0; $i < count($minerals); $i++) {

    if(($minerals[$i] != "")){   /* not allowing empty values and the row which has been removed. */

        
        if($mineral[$i] == ""){
            $mineral[$i] = $mineral[$i - 1];
        }

        $sql222 = "SELECT * FROM mineral WHERE Mineral_Name = '$mineral[$i]'";
        $result222 = mysqli_query($conn, $sql222);
        $row222 = mysqli_fetch_assoc($result222);
        $Mineral_Ids = $row222['Mineral_Id'];

        // echo "<script>alert(".$Mineral_Ids.")</script>";
        // $sql5 = "SELECT * FROM mineral WHERE mineral.Mineral_Name = '$mineral[$i]'";
        // $result55=mysqli_query($conn,$sql5);
        // $row2 = mysqli_fetch_assoc($result55);    
            $sql6="INSERT INTO mineral_production (Mine_Id, Month, Year, no, Mp_condition, Mp_Quantity, Mp_Dressing, Mp_sell, Mp_balance, Mineral_Id )
            VALUES ('$mine_id','$month','$year','$i','$condition[$i]','$quantity[$i]','$dressing[$i]','$sell[$i]','$balance[$i]','$Mineral_Ids')";
        

    if (!mysqli_query($conn,$sql6))
    {
        die('Error: ' . mysqli_error($conn));
    }
    }
}

for ($i = 0; $i < count($minerals); $i++) {

    if(($minerals[$i] != "")){   /* not allowing empty values and the row which has been removed. */
        
        $sql111 = "SELECT * FROM mineral WHERE Mineral_Name = '$minerals[$i]'";
        $result111 = mysqli_query($conn, $sql111);
        $row111 = mysqli_fetch_assoc($result111);
        $Mineral_Id1 = $row111['Mineral_Id'];
        // echo "<script>alert(".$Mineral_Id1.")</script>";
            // $sql3 = "SELECT * FROM mineral WHERE mineral.Mineral_Name = '$minerals[$i]'";
            // $result5=mysqli_query($conn,$sql3);
            // $row1 = mysqli_fetch_assoc($result5);
                $sql4="INSERT INTO details_sale (Mine_Id, Month, Year, no, Ds_export, Ds_royalty, Ds_receipt, Ds_Industry, Ds_buyer, Ds_domestic, Ds_Property, Mineral_Id )
            VALUES ('$mine_id','$month','$year','$i','$export[$i]','$royalty[$i]','$receipt[$i]','$industry[$i]','$buyer[$i]','$domestic[$i]','$Property[$i]','$Mineral_Id1')";
                
    

    if (!mysqli_query($conn,$sql4))
    {
        die('Error: ' . mysqli_error($conn));
    }
    }
}




if(($mine_id != "")){
$sql7="INSERT INTO report (Mine_Id, Month, Year)
VALUES ('$mine_id','$month','$year')";
if (!mysqli_query($conn,$sql7)){
    die('Error: ' . mysqli_error($conn));
    }
}

// echo '<script>alert("Data added Successfully")</script>';
// Print  "Data added Successfully !";
// echo '<meta http-equiv="refresh" content="0.1;url=report.php">';
mysqli_close($conn);
// header("Location: index.php");
?>