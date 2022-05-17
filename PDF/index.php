<?php
// $conn = mysqli_connect("191.101.185.199", "dbweb", "1910511106000", "urmoodco_project6");
// $conn = mysqli_connect("localhost", "root", "", "urmoodco_project7");
// Include the main TCPDF library (search for installation path).
require_once('TCPDF-main/tcpdf.php');
include('../connection.php');
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('PDF');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 006', PDF_HEADER_STRING);

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
     require_once(dirname(__FILE__) . '/lang/eng.php');
     $pdf->setLanguageArray($l);
}
$varmonth = $_GET['varmonth'];
$varyear = $_GET['varyear'];
$varlastmonth = $varmonth - 1;
$varmineid = $_GET['varmineid'];
$varversion = $_GET['varversion'];

require_once('TCPDF-main/tcpdf.php');
$sql12345_1 = "SELECT * FROM minning,mine,mineral,license,license_mineral WHERE license.Mine_Id = mine.Mine_Id 
AND license.License_id = license_mineral.License_id AND mineral.Mineral_Id = license_mineral.Mineral_Id AND minning.Mine_Id = mine.Mine_Id 
AND mine.Mine_Id = $varmineid AND minning.Month = $varmonth AND minning.Year = $varyear  AND minning.Version = $varversion";
$result12345_1 = mysqli_query($conn, $sql12345_1);
$row = mysqli_fetch_assoc($result12345_1);
//คำนวน wa to  ไร่ งาน วา ของ พื้นที่ใหม่
$wanew = $row['Wa_New'];
$fieldsnew = floor($wanew / 400); //ไร่
$jobsnew = floor(($wanew % 400) / 100); //งาน
$sqrMetersnew = floor(($wanew % 400) % 100); //วา

//คำนวน wa to  ไร่ งาน วา ของ ทั้งหมด
$wasum = $row['Wa_Sum'];
$fieldssum = floor($wasum / 400); //ไร่
$jobssum = floor(($wasum % 400) / 100); //งาน
$sqrMeterssum = floor(($wasum % 400) % 100); //วา

$sql5_2 = "SELECT * FROM minning,mine,mineral,license,license_mineral WHERE license.Mine_Id = mine.Mine_Id AND license.License_id = license_mineral.License_id AND mineral.Mineral_Id = license_mineral.Mineral_Id AND minning.Mine_Id = mine.Mine_Id AND mine.Mine_Id = $varmineid AND minning.Month = $varlastmonth AND minning.Year = $varyear AND minning.Version = $varversion";
$result5_2 = mysqli_query($conn, $sql5_2);
$row2 = mysqli_fetch_assoc($result5_2);
//คำนวน wa to  ไร่ งาน วา ของ พื้นที่เดิม
$wasum2 = $row2['Wa_Sum'];
$fieldssum2 = floor($wasum2 / 400); //ไร่
$jobssum2 = floor(($wasum2 % 400) / 100); //งาน
$sqrMeterssum2 = floor(($wasum2 % 400) % 100); //วา




//เชื้อเพลิงและวัตถุระเบิด
$sql78 = "SELECT * FROM minning WHERE minning.Mine_Id = $varmineid AND minning.Month = $varmonth AND minning.Year = $varyear";
$result78 = mysqli_query($conn, $sql78);
$row78 = mysqli_fetch_assoc($result78);

//รายละเอียดการผลิตแร่
$sql13 = "SELECT * FROM mineral_production,details_sale,mineral WHERE mineral.Mineral_Id = details_sale.Mineral_Id AND mineral.Mineral_Id = mineral_production.Mineral_Id AND details_sale.Mine_Id = mineral_production.Mine_Id AND details_sale.Month = mineral_production.Month AND details_sale.Year = mineral_production.Year AND details_sale.Mine_Id = $varmineid AND details_sale.Month = $varmonth AND details_sale.Year = $varyear AND details_sale.Version = $varversion";
$result13 = mysqli_query($conn, $sql13);
$row13 = mysqli_fetch_assoc($result13);
//รายละเอียดการผลิตแร่2
$sql13_2 = "SELECT * FROM mineral_production,details_sale,mineral WHERE mineral.Mineral_Id = details_sale.Mineral_Id AND mineral.Mineral_Id = mineral_production.Mineral_Id AND details_sale.Mine_Id = mineral_production.Mine_Id AND details_sale.Month = mineral_production.Month AND details_sale.Year = mineral_production.Year AND details_sale.Mine_Id = $varmineid AND details_sale.Month = $varlastmonth AND details_sale.Year = $varyear AND details_sale.Version = $varversion";
$result13_2 = mysqli_query($conn, $sql13_2);
$row13_2 = mysqli_fetch_assoc($result13_2);


//รายละเอียดการจำหน่าย
$sql14 = "SELECT * FROM mine,details_sale,license,mineral WHERE details_sale.Mineral_Id = mineral.Mineral_Id AND mine.Mine_Id = details_sale.Mine_Id AND mine.Mine_Id = license.Mine_Id AND details_sale.Mine_Id = $varmineid AND details_sale.Month = $varmonth AND details_sale.Year = $varyear AND details_sale.Version = $varversion";
$result14 = mysqli_query($conn, $sql14);
$row14 = mysqli_fetch_assoc($result14);

//เครื่องจักร

// $countsql6 = 1;
// while ($countsql6 <= 16) {
//      $sql6 = "SELECT * FROM minning_machine,machine WHERE minning_machine.Machine_Id = machine.Machine_Id AND minning_machine.Mine_Id = $varmineid AND minning_machine.Month = $varmonth AND minning_machine.Year = $varyear AND machine.Machine_Id = $countsql6";
//      $result6 = mysqli_query($conn, $sql6);
//      $row6 = mysqli_fetch_assoc($result6);
//      if ($row6 != "") {

//           echo $row6["Amount"];
//           echo $machine + $countsql6; 
//           '$machine' . $countsql6 = $row6["Amount"];
//           '$hourse' . $countsql6 = $row6["Machine_Horsepower"]*$row6["Amount"];
//           echo $hourse1; 

//      } else {
//           '$machine' . $countsql6 = "";
//           '$hourse' . $countsql6 = "";
//      }

//      echo $countsql6++;
// }



$machine = array();
$hourse = array();
$count = 0;
while($count <= 15){
     $machine[$count] = "";
     $hourse[$count] = "";
     $count++;
}

$sql6_1 = "SELECT COUNT(minning_machine.Year)AS no FROM minning_machine,machine WHERE minning_machine.Machine_Id = machine.Machine_Id AND minning_machine.Mine_Id = $varmineid AND minning_machine.Month = $varmonth AND minning_machine.Year = $varyear AND minning_machine.Version = $varversion";
$result6_1 = mysqli_query($conn, $sql6_1);
$row6_1 = mysqli_fetch_assoc($result6_1);

$sql6_2 = "SELECT * FROM minning_machine,machine WHERE minning_machine.Machine_Id = machine.Machine_Id AND minning_machine.Mine_Id = $varmineid AND minning_machine.Month = $varmonth AND minning_machine.Year = $varyear AND minning_machine.Version = $varversion";
$result6_2 = mysqli_query($conn, $sql6_2);
// echo "<script>alert($row6_1['no'];)</script>";


for ($i = 1; $i <= $row6_1['no']; $i++) {
     $row6_2 = mysqli_fetch_assoc($result6_2);
     if ($row6_2["Machine_Type"] == "รถแทรกเตอร์") {
          $machine[1] = $row6_2["Amount"];
          $hourse[1] = $row6_2["Machine_Horsepower"] * $row6_2["Amount"];
     } else if ($row6_2["Machine_Type"] == "รถตัก") {
          $machine[2] = $row6_2["Amount"];
          $hourse[2] = $row6_2["Machine_Horsepower"] * $row6_2["Amount"];
     } else if ($row6_2["Machine_Type"] == "รถขุด") {
          $machine[3] = $row6_2["Amount"];
          $hourse[3] = $row6_2["Machine_Horsepower"] * $row6_2["Amount"];
     } else if ($row6_2["Machine_Type"] == "เครื่องอัดลม") {
          $machine[4] = $row6_2["Amount"];
          $hourse[4] = $row6_2["Machine_Horsepower"] * $row6_2["Amount"];
     } else if ($row6_2["Machine_Type"] == "เครื่องเจาะ") {
          $machine[5] = $row6_2["Amount"];
          $hourse[5] = $row6_2["Machine_Horsepower"] * $row6_2["Amount"];
     } else if ($row6_2["Machine_Type"] == "เครื่องเจาะแจคแฮมเมอร์") {
          $machine[6] = $row6_2["Amount"];
          $hourse[6] = $row6_2["Machine_Horsepower"] * $row6_2["Amount"];
     } else if ($row6_2["Machine_Type"] == "เครื่องสูบทราย") {
          $machine[7] = $row6_2["Amount"];
          $hourse[7] = $row6_2["Machine_Horsepower"] * $row6_2["Amount"];
     } else if ($row6_2["Machine_Type"] == "เครื่องสูบน้ำ") {
          $machine[8] = $row6_2["Amount"];
          $hourse[8] = $row6_2["Machine_Horsepower"] * $row6_2["Amount"];
     } else if ($row6_2["Machine_Type"] == "รถบรรทุกเทหลัง") {
          $machine[9] = $row6_2["Amount"];
          $hourse[9] = $row6_2["Machine_Horsepower"] * $row6_2["Amount"];
     } else if ($row6_2["Machine_Type"] == "รถบรรทุกน้ำ") {
          $machine[10] = $row6_2["Amount"];
          $hourse[10] = $row6_2["Machine_Horsepower"] * $row6_2["Amount"];
     } else if ($row6_2["Machine_Type"] == "สายพานลำเลียง") {
          $machine[11] = $row6_2["Amount"];
          $hourse[11] = $row6_2["Machine_Horsepower"] * $row6_2["Amount"];
     } else if ($row6_2["Machine_Type"] == "การขนส่งด้วยลวดสลิง") {
          $machine[12] = $row6_2["Amount"];
          $hourse[12] = $row6_2["Machine_Horsepower"] * $row6_2["Amount"];
     } else if ($row6_2["Machine_Type"] == "โรงแต่งแร่") {
          $hourse[13] = $row6_2["Machine_Horsepower"];
     } else if ($row6_2["Machine_Type"] == "เครื่องจักรและอุปกรณ์ผลิตกระแสไฟฟ้า") {
          $hourse[14] = $row6_2["Machine_Horsepower"];
     } else if ($row6_2["Machine_Type"] == "อื่นๆ") {
          $hourse[15] = $row6_2["Machine_Horsepower"];
     }
}


$sql6_3 = "SELECT COUNT(no)AS no FROM machine_t WHERE machine_t.Mine_Id = $varmineid AND machine_t.Month = $varmonth AND machine_t.Year = $varyear AND machine_t.Version = $varversion";
$result6_3 = mysqli_query($conn, $sql6_3);
$row6_3 = mysqli_fetch_assoc($result6_3);

$sql6_4 = "SELECT * FROM machine_t WHERE machine_t.Mine_Id = $varmineid AND machine_t.Month = $varmonth AND machine_t.Year = $varyear AND  machine_t.Version = $varversion";
$result6_4 = mysqli_query($conn, $sql6_4);
// echo "<script>alert($row6_1['no'];)</script>";


for ($i = 1; $i <= $row6_3['no']; $i++) {
     $row6_4 = mysqli_fetch_assoc($result6_4);
 if ($row6_4["Machine_ot"] == "โรงแต่งแร่") {
          $hourse[13] = $row6_4["Machine_hp"];
     } else if ($row6_4["Machine_ot"] == "เครื่องจักรและอุปกรณ์ผลิตกระแสไฟฟ้า") {
          $hourse[14] = $row6_4["Machine_hp"];
     } else {
          $machine[15] = $row6_4["Machine_ot"];
          $hourse[15] = $row6_4["Machine_hp"];
     }
}
// $countsql6 = 1;
// $machine = array();
// $hourse = array();
// while ($countsql6 <= 12) {
//      $sql6 = "SELECT * FROM minning_machine,machine WHERE minning_machine.Machine_Id = machine.Machine_Id AND minning_machine.Mine_Id = $varmineid AND minning_machine.Month = $varmonth AND minning_machine.Year = $varyear AND machine.Machine_Id = $countsql6";
//      $result6 = mysqli_query($conn, $sql6);
//      $row6 = mysqli_fetch_assoc($result6);
//      if ($row6 != "") {

//           // echo $row6["Amount"];
//           // echo $machine + $countsql6; 
//           $machine[$countsql6] = $row6["Amount"];
//           $hourse[$countsql6] = $row6["Machine_Horsepower"] * $row6["Amount"];
//           // echo $hourse1; 

//      } else {
//           $machine[$countsql6] = "";
//           $hourse[$countsql6] = "";
//      }

//      $countsql6++;
// }
// $countsql6 = 13;

// while ($countsql6 <= 15) {
//      $sql6 = "SELECT * FROM minning_machine,machine WHERE minning_machine.Machine_Id = machine.Machine_Id AND minning_machine.Mine_Id = $varmineid AND minning_machine.Month = $varmonth AND minning_machine.Year = $varyear AND machine.Machine_Id = $countsql6";
//      $result6 = mysqli_query($conn, $sql6);
//      $row6 = mysqli_fetch_assoc($result6);
//      if ($row6 != "") {

//           // echo $row6["Amount"];
//           // echo $machine + $countsql6; 

//           $hourse[$countsql6] = $row6["Machine_Horsepower"];
//           // echo $hourse1; 
//           // if($countsql6 = 15){
//           //      $else = $row6["Machine_brand_Id"];
//           // }

//      } else {
//           $machine[$countsql6] = "";
//           $hourse[$countsql6] = "";
//      }

//      $countsql6++;
// }





$sql6 = "SELECT * FROM minning_machine,machine WHERE minning_machine.Machine_Id = machine.Machine_Id AND minning_machine.Mine_Id = $varmineid AND minning_machine.Month = $varmonth AND minning_machine.Year = $varyear  AND minning_machine.Version = $varversion AND machine.Machine_Id = 15";
$result6 = mysqli_query($conn, $sql6);
$row6 = mysqli_fetch_assoc($result6);



// ---------------------------------------------------------
// Page 1
// set font
$pdf->SetFont('freeserif', '', 12);

$tagvs = array('p' => array(0 => array('h' => 0, 'n' => 0), 1 => array('h' => 0, 'n' => 0)));
//$tagvs = array('div' => array(0 => array('h' => 0, 'n' => 0), 1 => array('h' => 0, 'n' => 0)));
$pdf->setHtmlVSpace($tagvs);

// add a page
$pdf->AddPage();

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

// create some HTML content
$test = $row["License_Expired_Date"];
$test1 = substr($test, 3, 1);
$test2 = substr($test, 3, 2);
if ($test1 == "1") {
     $test = "มกราคม";
} else if ($test1 == "2") {
     $test = "กุมภาพันธ์";
} else if ($test1 == "3") {
     $test = "มีนาคม";
} else if ($test1 == "4") {
     $test = "เมษายน";
} else if ($test1 == "5") {
     $test = "พฤษภาคม";
} else if ($test1 == "6") {
     $test = "มิถุนายน";
} else if ($test1 == "7") {
     $test = "กรกฎาคม";
} else if ($test1 == "8") {
     $test = "สิงหาคม";
} else if ($test1 == "9") {
     $test = "กันยายน";
} else if ($test2 == "10") {
     $test = "ตุลาคม";
} else if ($test2 == "11") {
     $test = "พฤศจิกายน";
} else if ($test2 == "12") {
     $test = "ธันวาคม";
}

$testt = $row["Month"];
if ($testt == "1") {
     $testt = "มกราคม";
} else if ($testt == "2") {
     $testt = "กุมภาพันธ์";
} else if ($testt == "3") {
     $testt = "มีนาคม";
} else if ($testt == "4") {
     $testt = "เมษายน";
} else if ($testt == "5") {
     $testt = "พฤษภาคม";
} else if ($testt == "6") {
     $testt = "มิถุนายน";
} else if ($testt == "7") {
     $testt = "กรกฎาคม";
} else if ($testt == "8") {
     $testt = "สิงหาคม";
} else if ($testt == "9") {
     $testt = "กันยายน";
} else if ($testt == "10") {
     $testt = "ตุลาคม";
} else if ($testt == "11") {
     $testt = "พฤศจิกายน";
} else if ($testt == "12") {
     $testt = "ธันวาคม";
}
// if (substr($row["License_Expired_Date"],3,4)=="1") {
//      '<td class="bb-show">มกราคม</td>'
// }else if(substr($row["License_Expired_Date"],3,4)=="2"){
//      '<td class="bb-show">กุมภาพันธ์</td>'
// }else if(substr($row["License_Expired_Date"],3,4)=="3"){
//      '<td class="bb-show">มีนาคม</td>'
// }else if(substr($row["License_Expired_Date"],3,4)=="4"){
//      '<td class="bb-show">เมษายน</td>'
// }else if(substr($row["License_Expired_Date"],3,4)=="5"){
//      '<td class="bb-show">พฤษภาคม</td>'
// }else if(substr($row["License_Expired_Date"],3,4)=="6"){
//      '<td class="bb-show">มิถุนายน</td>'
// }else if(substr($row["License_Expired_Date"],3,4)=="7"){
//      '<td class="bb-show">กรกฎาคม</td>'
// }else if(substr($row["License_Expired_Date"],3,4)=="8"){
//      '<td class="bb-show">สิงหาคม</td>'
// }else if(substr($row["License_Expired_Date"],3,4)=="9"){
//      '<td class="bb-show">กันยายนต์</td>'
// }else if(substr($row["License_Expired_Date"],3,5)=="10"){
//      '<td class="bb-show">ตุลาคม</td>'
// }else if(substr($row["License_Expired_Date"],3,5)=="11"){
//      '<td class="bb-show">พฤษจิกายน</td>'
// }else if(substr($row["License_Expired_Date"],3,5)=="12"){
//      '<td class="bb-show">ธันวาคม</td>'
// }

$html = '
<style type="text/css">
     .dot{
          text-align: center;
          text-decoration: underline;
          text-decoration-style:dashed;
     }
     .p-head{
          margin:0;
          padding:0;
     }
     .p-head .p-desc span{
          display: inline-block;
     }
     .p-head .p-desc .dot:before{
          content: "......";

     }
     .p-body{
          margin:0;
          padding:0;
     }
     #body-first{
          display: block;
          margin:0;
          background-color: red;
          text-align: justify;
          padding: 0;
     }
     .p-span{
          text-align: justify;
          display: flex;
          justify-content: space-between;
     }
     dl{
          padding-left: 5px;
     }
     .p-b-5{
          padding-bottom: 5px;
     }

     .table, th, td {
          border: 1px soild #fff;
     }
     .table td{
          padding-bottom: 5px;
          border-collapse: collapse;
     }
     .bb-show{
          border-bottom: 0.3px dotted #999;
          text-align:center;
     }
     
</style>
<div class="p-head">
     <p class="p-logo" style="text-align:center;"><img src="images/logo.png" border="0" height="100" width="100" /></p>
     <p class="p-title" style="text-align:center;font-size:16px;font-weight:bold;">กรมอุตุหกรรมพื้นฐานและการเหมืองแร่</p>
     <table class="table" style="width:100%;" cellpadding="2">
          <tr>
               <td style="width:14%;"></td>
               <td colspan="2" class="fit" style="width:30%;border-bottom-color: #ffffff; font-size:16px;">รายงานการทำเหมืืองประจำเดือน</td>
               <td colspan="2" class="bb-show" style="width:25%; font-size:16px;">' . $testt . '</td>
               <td class="fit" style="width:5%;border-bottom-color: #ffffff; font-size:16px;">พ.ศ.</td>
               <td class="bb-show">' . $row["Year"] . '</td>
          </tr>
     </table>
</div>
<div class="p-body">
     <table class="table" style="width:100%;" cellpadding="2">
          <tr>
               <td colspan="5">1. รายละเอียดผู้ถือประทานบัตร</td>
          </tr>
          <tr>
               <td style="width:2.5%;"></td>
               <td colspan="2" class="fit" style="width:18%;border-bottom-color: #ffffff;">ชื่อผู้ถือประทานบัตร</td>
               <td colspan="2" class="bb-show">' . $row["License_name"] . '</td>
               <td class="fit" style="width:16%;border-bottom-color: #ffffff;">เลขที่ประทานบัตร</td>
               <td class="bb-show">' . $row["License_id"] . '</td>
          </tr>
          <tr>
               <td style="width:2.5%;"></td>
               <td class="fit" style="width:13%;border-bottom-color: #ffffff;">ตั้งอยู่ที่ ตำบล</td>
               <td class="bb-show" style="width:30%;">' . $row["License_District"] . '</td>
               <td class="fit" style="width:7.5%;border-bottom-color: #ffffff;">อำเภอ</td>
               <td class="bb-show">' . $row["License_Sub_District"] . '</td>
               <td class="fit" style="width:7%;border-bottom-color: #ffffff;">จังหวัด</td>
               <td class="bb-show" style="">' . $row["License_Province"] . '</td>
          </tr>
          <tr>
               <td style="width:2.5%;"></td>
               <td class="fit" style="width:24%;border-bottom-color: #ffffff;">ประทานบัตรสิ้นอายุ วันที่</td>
               <td class="bb-show" style="width:18%;">' . explode("/", $row["License_Allowed_Date"])[0] . '</td>
               <td class="fit" style="width:6%;border-bottom-color: #ffffff;">เดือน</td>
               <td class="bb-show">' . $testt . '</td>
               <td class="fit" style="width:5%;border-bottom-color: #ffffff;">พ.ศ.</td>
               <td class="bb-show" style="">' . explode("/", $row["License_Allowed_Date"])[2] . '</td>
          </tr>
     </table>
     <table class="table" style="width:100%;" cellpadding="2">
          <tr>
               <td class="fit" style="width:24%;border-bottom-color: #ffffff;">2. ชื่อผู้รับช่วงการทำเหมือง</td>
               <td class="bb-show" style="width:76%;">' . $row["License_Inerhitor_Name"] . '</td>
          </tr>
     </table>
     <table class="table" style="width:100%;" cellpadding="2">
          <tr>
               <td class="fit" style="width:10%;border-bottom-color: #ffffff;">3. ชนิดแร่</td>
               <td class="bb-show" style="width:90%;">' . $row["Mineral_Name"] . '</td>
          </tr>
     </table>
     <table class="table" style="width:100%;" cellpadding="2">
          <tr>
               <td class="fit" style="width:22%;border-bottom-color: #ffffff;">4. ชื่อวิศวกรผู้ควบคุม</td>
               <td class="bb-show" style="width:32%;">' . $row["Engineer_Name"] . '</td>
               <td class="fit" style="width:28%;border-bottom-color: #ffffff;">เลขที่ใบอนุญาตประกอบอาชีพ</td>
               <td class="bb-show" style="width:18%;">' . $row["Professional_license"] . '</td>
          </tr>
     </table>
     <table class="table" style="width:100%;" cellpadding="2"> 
          <tr>
               <td class="fit" style="width:32%;border-bottom-color: #ffffff;">5. เนื้อที่ที่ได้รับประทานบัตร จำนวน</td>
               <td class="bb-show" style="width:10.4%;">1</td>
               <td lass="fit" style="width:15.5%;border-bottom-color: #ffffff;">แปลง รวมเนื้อที่</td>
               <td class="bb-show" style="width:8%;">' . $row["License_Rai"] . '</td>
               <td class="fit" style="text-align:center;width:4%;border-bottom-color: #ffffff;">ไร่</td>
               <td class="bb-show" style="width:8%;">' . $row["License_Ngan"] . '</td>
               <td class="fit" style="text-align:center;width:5%;border-bottom-color: #ffffff;">งาน</td>
               <td class="bb-show" style="width:8%;">' . $row["License_Wa"] . '</td>
               <td class="fit" style="text-align:right;width:9%;border-bottom-color: #ffffff;">ตารางวา</td>
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td colspan="2" class="fit" style="width:44%;border-bottom-color: #ffffff;">1) เนื้อที่ทำเหมืองในพื้นที่เดิม</td>
               <td colspan="1" style="width:8%;border-bottom-color: #ffffff;">จำนวน</td>
               <td class="bb-show" style="width:8%;">' . $fieldssum2 . '</td>
               <td class="fit" style="text-align:center;width:4%;border-bottom-color: #ffffff;">ไร่</td>
               <td class="bb-show" style="width:8%;">' . $jobssum2 . '</td>
               <td class="fit" style="text-align:center;width:5%;border-bottom-color: #ffffff;">งาน</td>
               <td class="bb-show" style="width:8%;">' . $sqrMeterssum2 . '</td>
               <td class="fit" style="text-align:right;width:9%;border-bottom-color: #ffffff;">ตารางวา</td>
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td colspan="2" class="fit" style="width:44%;border-bottom-color: #ffffff;">2) เนื้อที่ทำเหมืองในพื้นที่ใหม่ในเดือนนี้</td>
               <td colspan="1" style="width:8%;border-bottom-color: #ffffff;">จำนวน</td>
               <td class="bb-show" style="width:8%;">' . $fieldsnew . '</td>
               <td class="fit" style="text-align:center;width:4%;border-bottom-color: #ffffff;">ไร่</td>
               <td class="bb-show" style="width:8%;">' . $jobsnew . '</td>
               <td class="fit" style="text-align:center;width:5%;border-bottom-color: #ffffff;">งาน</td>
               <td class="bb-show" style="width:8%;">' . $sqrMetersnew . '</td>
               <td class="fit" style="text-align:right;width:9%;border-bottom-color: #ffffff;">ตารางวา</td>
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td colspan="2" class="fit" style="width:44%;border-bottom-color: #ffffff;">3) รวมเนื้อที่การทำเหมือง</td>
               <td colspan="1" style="width:8%;border-bottom-color: #ffffff;">จำนวน</td>
               <td class="bb-show" style="width:8%;">' . $fieldssum . '</td>
               <td class="fit" style="text-align:center;width:4%;border-bottom-color: #ffffff;">ไร่</td>
               <td class="bb-show" style="width:8%;">' . $jobssum . '</td>
               <td class="fit" style="text-align:center;width:5%;border-bottom-color: #ffffff;">งาน</td>
               <td class="bb-show" style="width:8%;">' . $sqrMeterssum . '</td>
               <td class="fit" style="text-align:right;width:9%;border-bottom-color: #ffffff;">ตารางวา</td>
          </tr>
     </table>
     <table class="table" style="width:100%;" cellpadding="2"> 
          <tr>
               <td class="fit" style="width:100%;border-bottom-color: #ffffff;">6. รายละเอียดเครื่องจักรและอุปกรณ์ในการทำเหมือง</td>
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td class="fit" style="width:43%;border-bottom-color: #ffffff;">1) รถแทรกเตอร์</td>
               <td style="width:8%;border-bottom-color: #ffffff;">จำนวน</td>
               <td class="bb-show" style="width:10%;">' . $machine[1] . '</td>
               <td class="fit" style="text-align:center;width:15%;border-bottom-color: #ffffff;">คัน &nbsp; แรงม้ารวม</td>
               <td class="bb-show" style="width:10%;">' . $hourse[1] . '</td>
               <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">แรงม้า</td>
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td class="fit" style="width:43%;border-bottom-color: #ffffff;">2) รถตัก </td>
               <td style="width:8%;border-bottom-color: #ffffff;">จำนวน</td>
               <td class="bb-show" style="width:10%;">' . $machine[2] . '</td>
               <td class="fit" style="text-align:center;width:15%;border-bottom-color: #ffffff;">คัน &nbsp; แรงม้ารวม</td>
               <td class="bb-show" style="width:10%;">' . $hourse[2] . '</td>
               <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">แรงม้า</td>
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td class="fit" style="width:43%;border-bottom-color: #ffffff;">3) รถขุด </td>
               <td style="width:8%;border-bottom-color: #ffffff;">จำนวน</td>
               <td class="bb-show" style="width:10%;">' . $machine[3] . '</td>
               <td class="fit" style="text-align:center;width:15%;border-bottom-color: #ffffff;">คัน &nbsp; แรงม้ารวม</td>
               <td class="bb-show" style="width:10%;">' . $hourse[3] . '</td>
               <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">แรงม้า</td>
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td class="fit" style="width:43%;border-bottom-color: #ffffff;">4) เครื่องอัดลม</td>
               <td style="width:8%;border-bottom-color: #ffffff;">จำนวน</td>
               <td class="bb-show" style="width:10%;">' . $machine[4] . '</td>
               <td class="fit" style="text-align:center;width:15%;border-bottom-color: #ffffff;">คัน &nbsp; แรงม้ารวม</td>
               <td class="bb-show" style="width:10%;">' . $hourse[4] . '</td>
               <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">แรงม้า</td>
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td class="fit" style="width:43%;border-bottom-color: #ffffff;">5) เครื่องเจาะ</td>
               <td style="width:8%;border-bottom-color: #ffffff;">จำนวน</td>
               <td class="bb-show" style="width:10%;">' . $machine[5] . '</td>
               <td class="fit" style="text-align:center;width:15%;border-bottom-color: #ffffff;">คัน &nbsp; แรงม้ารวม</td>
               <td class="bb-show" style="width:10%;">' . $hourse[5] . '</td>
               <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">แรงม้า</td>
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td class="fit" style="width:43%;border-bottom-color: #ffffff;">6) เครื่องเจาะแจคแฮมเมอร์ </td>
               <td style="width:8%;border-bottom-color: #ffffff;">จำนวน</td>
               <td class="bb-show" style="width:10%;">' . $machine[6] . '</td>
               <td class="fit" style="text-align:center;width:15%;border-bottom-color: #ffffff;">คัน &nbsp; แรงม้ารวม</td>
               <td class="bb-show" style="width:10%;">' . $hourse[6] . '</td>
               <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">แรงม้า</td>
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td class="fit" style="width:43%;border-bottom-color: #ffffff;">7) เครื่องสูบทราย</td>
               <td style="width:8%;border-bottom-color: #ffffff;">จำนวน</td>
               <td class="bb-show" style="width:10%;">' . $machine[7] . '</td>
               <td class="fit" style="text-align:center;width:15%;border-bottom-color: #ffffff;">คัน &nbsp; แรงม้ารวม</td>
               <td class="bb-show" style="width:10%;">' . $hourse[7] . '</td>
               <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">แรงม้า</td>
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td class="fit" style="width:43%;border-bottom-color: #ffffff;">8) เครื่องสูบน้ำ</td>
               <td style="width:8%;border-bottom-color: #ffffff;">จำนวน</td>
               <td class="bb-show" style="width:10%;">' . $machine[8] . '</td>
               <td class="fit" style="text-align:center;width:15%;border-bottom-color: #ffffff;">คัน &nbsp; แรงม้ารวม</td>
               <td class="bb-show" style="width:10%;">' . $hourse[8] . '</td>
               <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">แรงม้า</td>
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td class="fit" style="width:43%;border-bottom-color: #ffffff;">9) รถบรรทุกเทหลัง</td>
               <td style="width:8%;border-bottom-color: #ffffff;">จำนวน</td>
               <td class="bb-show" style="width:10%;">' . $machine[9] . '</td>
               <td class="fit" style="text-align:center;width:15%;border-bottom-color: #ffffff;">คัน &nbsp; แรงม้ารวม</td>
               <td class="bb-show" style="width:10%;">' . $hourse[9] . '</td>
               <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">แรงม้า</td>
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td class="fit" style="width:43%;border-bottom-color: #ffffff;">10) รถบรรทุกน้ำ</td>
               <td style="width:8%;border-bottom-color: #ffffff;">จำนวน</td>
               <td class="bb-show" style="width:10%;">' . $machine[10] . '</td>
               <td class="fit" style="text-align:center;width:15%;border-bottom-color: #ffffff;">คัน &nbsp; แรงม้ารวม</td>
               <td class="bb-show" style="width:10%;">' . $hourse[10] . '</td>
               <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">แรงม้า</td>
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td class="fit" style="width:43%;border-bottom-color: #ffffff;">11) สายพานลำเลียง</td>
               <td style="width:8%;border-bottom-color: #ffffff;">จำนวน</td>
               <td class="bb-show" style="width:10%;">' . $machine[11] . '</td>
               <td class="fit" style="text-align:center;width:15%;border-bottom-color: #ffffff;">คัน &nbsp; แรงม้ารวม</td>
               <td class="bb-show" style="width:10%;">' . $hourse[11] . '</td>
               <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">แรงม้า</td>
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td class="fit" style="width:43%;border-bottom-color: #ffffff;">12) การขนส่งด้วยลวดสลิง</td>
               <td style="width:8%;border-bottom-color: #ffffff;">จำนวน</td>
               <td class="bb-show" style="width:10%;">' . $machine[12] . '</td>
               <td class="fit" style="text-align:center;width:15%;border-bottom-color: #ffffff;">คัน &nbsp; แรงม้ารวม</td>
               <td class="bb-show" style="width:10%;">' . $hourse[12] . '</td>
               <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">แรงม้า</td>
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td colspans="1" class="fit" style="width:25%;border-bottom-color: #ffffff;">13) โรงโต่งแร่</td>
               <td style="width:35.7%;"></td>
               <td class="fit" style="text-align:right;width:15%;border-bottom-color: #ffffff;">แรงม้ารวม</td>
               <td class="bb-show" style="width:10%;">' . $hourse[13] . '</td>
               <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">แรงม้า</td>
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td colspans="1" class="fit" style="width:51%;border-bottom-color: #ffffff;">14) เครื่องจักรและอุปกรณ์ผลิตกระแสไฟฟ้า</td>
               <td style="width:9.8%;"></td>
               <td class="fit" style="text-align:right;width:15%;border-bottom-color: #ffffff;">แรงม้ารวม</td>
               <td class="bb-show" style="width:10%;">' . $hourse[14] . '</td>
               <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">แรงม้า</td>
               
          </tr>
          <tr>
               <td style="width:6%;"></td>
               <td colspans="1" class="fit" style="width:9%;border-bottom-color: #ffffff;">15) อื่นๆ</td>
               <td class="bb-show" style="width:54.8%;">' . $machine[15] . '</td>
               <td class="fit" style="text-align:right;width:12%;border-bottom-color: #ffffff;">แรงม้ารวม</td>
               <td class="bb-show" style="width:10%;">' . $hourse[15] . '</td>
               <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">แรงม้า</td>
               
          </tr>
     </table>


</div>
';



// output the HTML content
//$pdf->writeHTMLCell(50, 0, 10, 70, $n1, $border=1, $ln=10, $fill=0, $reseth=true, $align=true, $autopadding=true);
$pdf->writeHTML($html, true, false, true, false, '');

//writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)


// reset pointer to the last page
$pdf->lastPage();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Page 2
//รายละเอียดการผลิตแร่
$sql13_1 = "SELECT COUNT(mineral_production.Mineral_Id)AS AA FROM mineral_production,mineral WHERE mineral_production.Mineral_Id = mineral.Mineral_Id AND mineral_production.Mine_Id = $varmineid AND mineral_production.Month = $varmonth AND mineral_production.Year = $varyear AND mineral_production.Version = $varversion GROUP BY mineral_production.Mineral_Id";
$result13_1 = mysqli_query($conn, $sql13_1);
$row11155 =  mysqli_fetch_assoc($result13_1);
$cc = 1;
$cc2 = 1;
$cc3 = 1;
$cc4 = 1;

//รายละเอียดการผลิตแร่
$sql13 = "SELECT mineral_production.Mineral_Id,mineral.Mineral_Name,mineral_production.Mp_condition,SUM(mineral_production.Mp_Quantity) AS Mp_Quantity,SUM(mineral_production.Mp_Dressing) AS Mp_Dressing ,SUM(mineral_production.Mp_sell) AS Mp_sell ,SUM(mineral_production.Mp_balance)AS Mp_balance FROM mineral_production,mineral WHERE mineral_production.Mineral_Id = mineral.Mineral_Id AND mineral_production.Mine_Id = $varmineid AND mineral_production.Month = $varmonth AND mineral_production.Year = $varyear AND mineral_production.Version = $varversion GROUP BY mineral_production.Mineral_Id";
$result13 = mysqli_query($conn, $sql13);
// $row13 = mysqli_fetch_assoc($result13);
//รายละเอียดการผลิตแร่2
$sql13_2 = "SELECT mineral_production.Mineral_Id,mineral_production.Mp_condition,SUM(mineral_production.Mp_Quantity) AS Mp_Quantity,SUM(mineral_production.Mp_Dressing) AS Mp_Dressing ,SUM(mineral_production.Mp_sell) AS Mp_sell ,SUM(mineral_production.Mp_balance)AS Mp_balance FROM mineral_production,mineral WHERE mineral_production.Mineral_Id = mineral.Mineral_Id AND mineral_production.Mine_Id = $varmineid AND mineral_production.Month = $varmonth AND mineral_production.Year = $varyear AND mineral_production.Version = $varversion GROUP BY mineral_production.Mineral_Id";
$result13_2 = mysqli_query($conn, $sql13_2);
// $row13_2 = mysqli_fetch_assoc($result13_2);
// echo $row11155['AA'];

$loop13 = array();
while ($cc2 <= 100) {
     $loop13[$cc2] = " ";
     //     echo $cc2;
     $cc2++;
}
// echo "<br>";
while ($cc <= $row11155['AA']) {
     $row13 = mysqli_fetch_assoc($result13);
     $row13_2 = mysqli_fetch_assoc($result13_2);

     $loop13[$cc3] = $row13["Mineral_Name"];
     $cc3++;
     $loop13[$cc3] = $row13["Mp_condition"];
     $cc3++;
     if (number_format($row13_2["Mp_balance"]) == 0) {
          $loop13[$cc3] = " ";
          $cc3++;
     } else {
          $loop13[$cc3] = number_format($row13_2["Mp_balance"]);
          $cc3++;
     }
     if (number_format($row13["Mp_Quantity"]) == 0) {
          $loop13[$cc3] = " ";
          $cc3++;
     } else {
          $loop13[$cc3] = number_format($row13["Mp_Quantity"]);
          $cc3++;
     }
     if (number_format($row13["Mp_Dressing"]) == 0) {
          $loop13[$cc3] = " ";
          $cc3++;
     } else {
          $loop13[$cc3] = number_format($row13["Mp_Dressing"]);
          $cc3++;
     }
     if (number_format($row13["Mp_sell"]) == 0) {
          $loop13[$cc3] = " ";
          $cc3++;
     } else {
          $loop13[$cc3] = number_format($row13["Mp_sell"]);
          $cc3++;
     }
     if (number_format($row13["Mp_balance"]) == 0) {
          $loop13[$cc3] = " ";
          $cc3++;
     } else {
          $loop13[$cc3] = number_format(($row13_2["Mp_balance"] + $row13["Mp_Quantity"]) - $row13["Mp_sell"]);
          $cc3++;
     }




     // $loop13[$cc3] = number_format($row13_2["Mp_balance"]);
     // $cc3++;
     // $loop13[$cc3] = number_format($row13["Mp_Quantity"]);
     // $cc3++;
     // $loop13[$cc3] = number_format($row13["Mp_Dressing"]);
     // $cc3++;
     // $loop13[$cc3] = number_format($row13["Mp_sell"]);
     // $cc3++;
     // $loop13[$cc3] = number_format($row13["Mp_balance"]);
     // $cc3++;
     $cc++;
}
// echo "<br>";
// while ($cc4 <= 100){

//     echo $loop13[$cc4];
//     echo "<br>";
//     $cc4++;
// }
// add a page
$pdf->AddPage();

// create some HTML content

// Page 2
$html = '
<style type="text/css">
.dot{
     text-align: center;
     text-decoration: underline;
     text-decoration-style:dashed;
}
.p-head{
     margin:0;
}
.p-head .p-desc span{
     display: inline-block;
}
.p-head .p-desc .dot:before{
     content: "......";

}
#body-first{
     display: block;
     margin:0;
     background-color: red;
     text-align: justify;
     padding: 0;
}
.p-span{
     text-align: justify;
     display: flex;
     justify-content: space-between;
}
dl{
     padding-left: 5px;
}
.p-b-5{
     padding-bottom: 5px;
}

table, th, td {
     border: 1px soild #fff;
}
.table td{
     padding-bottom: 5px;
     border-collapse: collapse;
}
.bb-show{
     border-bottom: 0.3px dotted #999;
     text-align:center;
}

</style>
<div class="p-body">
<table class="table" style="width:100%;" cellpadding="2"> 
     <tr>
          <td class="fit" style="width:100%;border-bottom-color: #ffffff;">7. รายละเอียดพเชื้อเพลิงใช้ในเดือนนี้</td>
     </tr>
     <tr>
          <td style="width:6%;"></td>
          <td class="fit" style="width:43%;border-bottom-color: #ffffff;">1) น้ำมันเบนซิน</td>
          <td class="bb-show" style="width:43%;">' . $row78["Fd_Benzene"] . '</td>
          <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">ลิตร</td>
     </tr>
     <tr>
          <td style="width:6%;"></td>
          <td class="fit" style="width:43%;border-bottom-color: #ffffff;">2) น้ำมันดีเซล</td>
          <td class="bb-show" style="width:43%;">' . $row78["Fd_Diesel"] . '</td>
          <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">ลิตร</td>
     </tr>
     <tr>
          <td style="width:6%;"></td>
          <td class="fit" style="width:43%;border-bottom-color: #ffffff;">3) น้ำมันหล่อลื่น</td>
          <td class="bb-show" style="width:43%;">' . $row78["Fd_Lubricating_Oil"] . '</td>
          <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">ลิตร</td>
     </tr>
     <tr>
          <td style="width:6%;"></td>
          <td class="fit" style="width:43%;border-bottom-color: #ffffff;">4) ไฟฟ้า</td>
          <td class="bb-show" style="width:43%;">' . $row78["Fd_Electricity"] . '</td>
          <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">ลิตร</td>
     </tr>
     <tr>
          <td style="width:6%;"></td>
          <td class="fit" style="width:43%;border-bottom-color: #ffffff;">5) เชื้อเพลงอื่น ๆ</td>
          <td class="bb-show" style="width:43%;">' . $row78["Fd_Other"] . '</td>
          <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">ลิตร</td>
     </tr>
     <tr>
          <td></td>
     </tr>
</table>
<table class="table" style="width:100%;" cellpadding="2"> 
     <tr>
          <td class="fit" style="width:100%;border-bottom-color: #ffffff;">8. รายฃละเอียดและปริมาณการใช้วัตถุระเบิดในเดือนนี้ (ถ้ามี)</td>
     </tr>
     <tr>
          <td style="width:6%;"></td>
          <td class="fit" style="width:43%;border-bottom-color: #ffffff;">1) วัตถุระเบิด</td>
          <td class="bb-show" style="width:43%;">' . $row78["E_Meterial"] . '</td>
          <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">' . $row78["E_N"] . '</td>
     </tr>
     <tr>
          <td style="width:6%;"></td>
          <td class="fit" style="width:43%;border-bottom-color: #ffffff;">2) แก็ป</td>
          <td class="bb-show" style="width:43%;">' . $row78["E_Cap"] . '</td>
          <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">ดอก</td>
     </tr>
     <tr>
          <td style="width:6%;"></td>
          <td class="fit" style="width:43%;border-bottom-color: #ffffff;">3) ปุ๋ยแอมโมเนีย</td>
          <td class="bb-show" style="width:43%;">' . $row78["E_Ammonia"] . '</td>
          <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">กิโลกรัม</td>
     </tr>
     <tr>
          <td style="width:6%;"></td>
          <td class="fit" style="width:43%;border-bottom-color: #ffffff;">4) อื่น ๆ (ระบุ)</td>
          <td class="bb-show" style="width:43%;">' . $row78["E_Other"] . '</td>
     </tr>
     <tr>
          <td></td>
     </tr>
</table>
<table class="table" style="width:100%;" cellpadding="2"> 
     <tr>
          <td class="fit" style="width:28%;border-bottom-color: #ffffff;">9. จำนวนพนักงานและคนงาน</td>
          <td class="bb-show" style="width:10%;">' . $row78["Amount_Employee"] . '</td>
          <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">คน</td>
     </tr>
</table>
<table class="table" style="width:100%;" cellpadding="2"> 
     <tr>
          <td class="fit" style="width:28%;border-bottom-color: #ffffff;">10. จำนวนวันทำงานในเดือนนี้</td>
          <td class="bb-show" style="width:10%;">' . $row78["Amount_Day"] . '</td>
          <td class="fit" style="text-align:left;width:10%;border-bottom-color: #ffffff;">คน</td>
     </tr>
     <tr>
          <td></td>
     </tr>
</table>
<table class="table" style="width:100%;" cellpadding="2"> 
     <tr>
          <td class="fit" style="width:100%;border-bottom-color: #ffffff;">11. ผลการปฏิบัติงานตามมารตรการป้องกันและแก้ไขผลกระทบสิ่งแวดล้อม (ถ้ามี) (รายละเอียดตามแบบ)</td>
     </tr>
</table>
<table class="table" style="width:100%;" cellpadding="2"> 
     <tr>
          <td class="fit" style="width:100%;border-bottom-color: #ffffff;">12. แผนที่แสดงการทำเหมือง (รายละเอียดตามแบบ) กรณีประทานบัตร ชนิดหินอุตสาหกรรมเพื่อซีเมนต์ และถ่านหิน ให้แนบรายละเอียดภาพถ่ายและการคำนวณหาปริมาณหินและแร่ที่ผลิตได้ จากผลการรังวัดโดยอากาศยานไร้คนชับประกอบด้วย</td>
     </tr>
     <tr>
          <td></td>
     </tr>
</table>
<table class="table" style="width:100%;" cellpadding="2">
          <tr>
               <td class="fit" style="width:100%;border-bottom-color: #ffffff;">13. รายละเอียดการผลิตแร่</td>
          </tr> 
          <table class="table table-bordered" style="padding:10px 0 10px 0;">  
               <thead>
                    <tr>
                         <th style="border: 1px soild #000; text-align: center;">ชนิดแร่</th>  
                         <th style="border: 1px soild #000; text-align: center;">สภาพ/<br>คุณลักษณะ</th>  
                         <th style="border: 1px soild #000; text-align: center;">ยอดยกมา(ตัน)</th>  
                         <th style="border: 1px soild #000; text-align: center;">ผลิตได้(ตัน)</th>
                         <th style="border: 1px soild #000; text-align: center;">ส่งไปแต่งแร่<br>(ตัน)</th>
                         <th style="border: 1px soild #000; text-align: center;">จำหน่ายแร่ออก<br>(ตัน)</th>
                         <th style="border: 1px soild #000; text-align: center;">ยอดคงเหลือ ณ สิ้นเดือน(ตัน)</th>  
                    </tr>
               </thead>
               <tbody> 
 <tr>
                         <td style="border: 1px soild #000; text-align: center;">' . $loop13[1] . '</td>
                         <td style="border: 1px soild #000; text-align: center;">' . $loop13[2] . '</td>
                         <td style="border: 1px soild #000; text-align: center;">' . $loop13[3] . '</td>
                         <td style="border: 1px soild #000; text-align: center;">' . $loop13[4] . '</td>
                         <td style="border: 1px soild #000; text-align: center;">' . $loop13[5] . '</td>
                         <td style="border: 1px soild #000; text-align: center;">' . $loop13[6] . '</td>
                         <td style="border: 1px soild #000; text-align: center;">' . $loop13[7] . '</td>
                    </tr>
                    <tr>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[8] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[9] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[10] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[11] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[12] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[13] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[14] . '</td>
                    </tr>
                    <tr>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[15] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[16] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[17] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[18] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[19] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[20] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[21] . '</td>
                    </tr>
                    <tr>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[22] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[23] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[24] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[25] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[26] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[27] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[28] . '</td>
                    </tr>
                    <tr>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[29] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[30] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[31] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[32] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[33] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[34] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop13[35] . '</td>
                    </tr>
               </tbody>  
          </table>
</table>


</div>
';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');
// reset pointer to the last page
$pdf->lastPage();





// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Page 3
//รายละเอียดการผลิตแร่
$sql13_1 = "SELECT COUNT('Mine_Id')AS 'AA' FROM mine,details_sale,license,mineral WHERE details_sale.Mineral_Id = mineral.Mineral_Id AND mine.Mine_Id = details_sale.Mine_Id AND mine.Mine_Id = license.Mine_Id AND details_sale.Mine_Id = $varmineid AND details_sale.Month = $varmonth AND details_sale.Year = $varyear AND details_sale.Version = $varversion";
$result13_1 = mysqli_query($conn, $sql13_1);
$row11155 =  mysqli_fetch_assoc($result13_1);
$cc = 1;
$cc2 = 1;
$cc3 = 1;
$cc4 = 1;

//รายละเอียดการผลิตแร่
$sql13 = "SELECT * FROM mine,details_sale,license,mineral WHERE details_sale.Mineral_Id = mineral.Mineral_Id AND mine.Mine_Id = details_sale.Mine_Id AND mine.Mine_Id = license.Mine_Id AND details_sale.Mine_Id = $varmineid AND details_sale.Month = $varmonth AND details_sale.Year = $varyear AND details_sale.Version = $varversion";
$result13 = mysqli_query($conn, $sql13);
// $row13 = mysqli_fetch_assoc($result13);
//รายละเอียดการผลิตแร่2


$loop14 = array();
while ($cc2 <= 100) {
     $loop14[$cc2] = "";
     //     echo $cc2;
     $cc2++;
}
// echo "<br>";
while ($cc <= $row11155['AA']) {
     $row13 = mysqli_fetch_assoc($result13);
     $row13_2 = mysqli_fetch_assoc($result13_2);


     $loop14[$cc3] = $row13["Mineral_Name"];
     $cc3++;
     $loop14[$cc3] = $row13["Ds_Property"];
     $cc3++;
     $loop14[$cc3] = $row13["Ds_buyer"];
     $cc3++;
     $loop14[$cc3] = number_format($row13["Ds_domestic"]);
     $cc3++;
     $loop14[$cc3] = $row13["Ds_Industry"];
     $cc3++;
     // $loop14[$cc3] = number_format($row13["Ds_receipt"]);
     $loop14[$cc3] = $row13["Ds_receipt"];
     $cc3++;
     $loop14[$cc3] = number_format($row13["Ds_royalty"]);
     $cc3++;
     $loop14[$cc3] = number_format($row13["Ds_export"]);
     $cc3++;
     $cc++;
}
// add a page
$pdf->AddPage();

// Page 3
$html = '
<style type="text/css">
.dot{
     text-align: center;
     text-decoration: underline;
     text-decoration-style:dashed;
}
.p-head{
     margin:0;
}
.p-head .p-desc span{
     display: inline-block;
}
.p-head .p-desc .dot:before{
     content: "......";

}
#body-first{
     display: block;
     margin:0;
     background-color: red;
     text-align: justify;
     padding: 0;
}
.p-span{
     text-align: justify;
     display: flex;
     justify-content: space-between;
}
dl{
     padding-left: 5px;
}
.p-b-5{
     padding-bottom: 5px;
}

table, th, td {
     border: 1px soild #fff;
}
.table td{
     padding-bottom: 5px;
     border-collapse: collapse;
}
.bb-show{
     border-bottom: 0.3px dotted #999;
     text-align:center;
}

</style>
<div class="p-body">
<table class="table" style="width:100%;" cellpadding="2">
          <tr>
               <td class="fit" style="width:100%;border-bottom-color: #ffffff;">14. รายละเอียดการจำหน่ายแร่</td>
          </tr> 
          <table class="table table-bordered" style="padding:10px 0 10px 0;">  
               <thead>
                    <tr>
                         <th style="border: 1px soild #000; text-align: center;">ชนิดแร่</th>  
                         <th style="border: 1px soild #000; text-align: center;">สภาพ/<br>คุณลักษณะ</th>  
                         <th style="border: 1px soild #000; text-align: center;">ชื่อ/ทะเบียน<br>ของผู้ซื้อแร่<br>หรือผู้ใช้แร่</th>  
                         <th style="border: 1px soild #000; text-align: center;">เพื่อใช้ภายในประเทศ(ตัน)</th>
                         <th style="border: 1px soild #000; text-align: center;">ประเภท<br>อุตสาหกรรม<br>ที่นำแร่ไปใช้</th>
                         <th style="border: 1px soild #000; text-align: center;">เลขที่ใบเสร็จ<br>รับเงินค่า<br>ภาคหลวงแร่/<br>ลงวันที่</th>
                         <th style="border: 1px soild #000; text-align: center;">ค่าภาคหลวง<br>(บาท)</th>
                         <th style="border: 1px soild #000; text-align: center;">เพื่อการส่ง<br>ออกต่าง<br>ประเทศ(ตัน)/<br>ด่านที่ส่งออก</th>  
                    </tr>
               </thead>
               <tbody>  
                    <tr>
                         <td style="border: 1px soild #000; text-align: center;">' . $loop14[1] . '</td>
                         <td style="border: 1px soild #000; text-align: center;">' . $loop14[2] . '</td>
                         <td style="border: 1px soild #000; text-align: center;">' . $loop14[3] . '</td>
                         <td style="border: 1px soild #000; text-align: center;">' . $loop14[4] . '</td>
                         <td style="border: 1px soild #000; text-align: center;">' . $loop14[5] . '</td>
                         <td style="border: 1px soild #000; text-align: center;">' . $loop14[6] . '</td>
                         <td style="border: 1px soild #000; text-align: center;">' . $loop14[7] . '</td>
                         <td style="border: 1px soild #000; text-align: center;">' . $loop14[8] . '</td>
                    </tr>
                    <tr>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop14[9] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop14[10] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop14[11] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop14[12] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop14[13] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop14[14] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop14[15] . '</td>
                    <td style="border: 1px soild #000; text-align: center;">' . $loop14[16] . '</td>
               </tr>
               <tr>
               <td style="border: 1px soild #000; text-align: center;">' . $loop14[17] . '</td>
               <td style="border: 1px soild #000; text-align: center;">' . $loop14[18] . '</td>
               <td style="border: 1px soild #000; text-align: center;">' . $loop14[19] . '</td>
               <td style="border: 1px soild #000; text-align: center;">' . $loop14[20] . '</td>
               <td style="border: 1px soild #000; text-align: center;">' . $loop14[21] . '</td>
               <td style="border: 1px soild #000; text-align: center;">' . $loop14[22] . '</td>
               <td style="border: 1px soild #000; text-align: center;">' . $loop14[23] . '</td>
               <td style="border: 1px soild #000; text-align: center;">' . $loop14[24] . '</td>
          </tr>
          <tr>
          <td style="border: 1px soild #000; text-align: center;">' . $loop14[25] . '</td>
          <td style="border: 1px soild #000; text-align: center;">' . $loop14[26] . '</td>
          <td style="border: 1px soild #000; text-align: center;">' . $loop14[27] . '</td>
          <td style="border: 1px soild #000; text-align: center;">' . $loop14[28] . '</td>
          <td style="border: 1px soild #000; text-align: center;">' . $loop14[29] . '</td>
          <td style="border: 1px soild #000; text-align: center;">' . $loop14[30] . '</td>
          <td style="border: 1px soild #000; text-align: center;">' . $loop14[31] . '</td>
          <td style="border: 1px soild #000; text-align: center;">' . $loop14[32] . '</td>
     </tr>


               <tr>
               <td>
               </td>
               </tr>
               </tbody>  
          </table>
          <table class="table" style="width:100%;" cellpadding="2"> 
               <tr>
                    <td class="fit" style="width:9%;"></td>
                    <td class="fit" style="width:6%;border-bottom-color: #ffffff;">ลงชื่อ</td>
                    <td class="bb-show" style="width:30%;"></td>
                    <td class="fit" style="width:10%;"></td>
                    <td class="fit" style="width:6%;border-bottom-color: #ffffff;">ลงชื่อ</td>
                    <td class="bb-show" style="width:30%;"></td>
               </tr>
               <tr>
                    <td class="fit" style="width:18%;"></td>
                    <td class="fit" style="width:2%;border-bottom-color: #ffffff;">(</td>
                    <td class="bb-show" style="width:20%;"></td>
                    <td class="fit" style="width:2%;border-bottom-color: #ffffff;">)</td>
                    <td class="fit" style="width:22.5%;"></td>
                    <td class="fit" style="width:2%;border-bottom-color: #ffffff;">(</td>
                    <td class="bb-show" style="width:20%;"></td>
                    <td class="fit" style="width:2%;border-bottom-color: #ffffff;">)</td>
               </tr>
               <tr>
                    <td class="fit" style="width:23%;"></td>
                    <td class="fit" style="width:13%;border-bottom-color: #ffffff;">วิศวกรควบคุม</td>
                    <td class="fit" style="width:18%;"></td>
                    <td class="fit" style="width:40%;border-bottom-color: #ffffff;">ผู้ถือประทานบัตร/ผู้รับช่วงการทำเหมือง/ผู้แทน</td>
               </tr>
               <tr>
                     <td></td>
               </tr>
               <tr>
                     <td></td>
               </tr>
          </table>
          <table class="table" style="width:100%;" cellpadding="2">
               <tr>
                    <td class="fit" style="width:100%;border-bottom-color: #ffffff;">15. บันทึกของเจ้าหน้าที่ผู้ตรวจรายงาน</td>
               </tr> 
               <tr>
                    <td style="width:6%;"></td>
                    <td class="fit" style="width:100%;border-bottom-color: #ffffff;">1) การชำระค่าภาคหลวงแร่</td>
               </tr> 
               <tr>
                    <td class="fit" style="width:5%;"></td>
                    <td class="bb-show" style="width:90%;"></td>
               </tr> 
               <tr>
                    <td class="fit" style="width:5%;"></td>
                    <td class="bb-show" style="width:90%;"></td>
               </tr> 
               <tr>
                     <td></td>
               </tr>
               <tr>
                     <td></td>
               </tr>
          </table>
          <table class="table" style="width:100%;" cellpadding="2"> 
               <tr>
                    <td class="fit" style="width:49%;"></td>
                    <td class="fit" style="width:15%;border-bottom-color: #ffffff;">ลงชื่อผู้ตรวจสอบ</td>
                    <td class="bb-show" style="width:30%;"></td>
               </tr>
               <tr>
                    <td class="fit" style="width:67%;"></td>
                    <td class="fit" style="width:2%;border-bottom-color: #ffffff;">(</td>
                    <td class="bb-show" style="width:20%;"></td>
                    <td class="fit" style="width:2%;border-bottom-color: #ffffff;">)</td>
               </tr>
               <tr>
                    <td class="fit" style="width:61.5%;"></td>
                    <td class="fit" style="width:35%;border-bottom-color: #ffffff;">เจ้าหน้าที่งานอุตสาหกรรมแร่ประจำท้องที่</td>
               </tr>
               <tr>
                     <td></td>
               </tr>
          </table>
          <table class="table" style="width:100%;" cellpadding="2"> 
               <tr>
                    <td style="width:6%;"></td>
                    <td class="fit" style="width:100%;border-bottom-color: #ffffff;">2) ข้อมูลการผลิตและข้อมูลทางวิชาการ</td>
               </tr> 
               <tr>
                    <td class="fit" style="width:5%;"></td>
                    <td class="bb-show" style="width:90%;"></td>
               </tr> 
               <tr>
                    <td class="fit" style="width:5%;"></td>
                    <td class="bb-show" style="width:90%;"></td>
               </tr> 
               <tr>
                     <td></td>
               </tr>
               <tr>
                     <td></td>
               </tr>
          </table>
          <table class="table" style="width:100%;" cellpadding="2"> 
               <tr>
                    <td class="fit" style="width:49%;"></td>
                    <td class="fit" style="width:15%;border-bottom-color: #ffffff;">ลงชื่อผู้ตรวจสอบ</td>
                    <td class="bb-show" style="width:30%;"></td>
               </tr>
               <tr>
                    <td class="fit" style="width:67%;"></td>
                    <td class="fit" style="width:2%;border-bottom-color: #ffffff;">(</td>
                    <td class="bb-show" style="width:20%;"></td>
                    <td class="fit" style="width:2%;border-bottom-color: #ffffff;">)</td>
               </tr>
               <tr>
                    <td class="fit" style="width:67%;"></td>
                    <td class="fit" style="width:35%;border-bottom-color: #ffffff;">วิศวกรเหมืองแร่ชำนาญการ</td>
               </tr>
               <tr>
                    <td class="fit" style="width:66.5%;"></td>
                    <td class="fit" style="width:35%;border-bottom-color: #ffffff;">วิศวกรเหมืองแร่ ผู้ตรวจสอบ</td>
               </tr>
          </table>
</table>


</div>
';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();



//Close and output PDF document
$pdf->Output('PDF', 'I');

//============================================================+
// END OF FILE
//============================================================+
///* rowspan="6"  */