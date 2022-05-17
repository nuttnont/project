<?php

session_start();
include('../connection.php');
date_default_timezone_set("Asia/Bangkok");
$sem = $_SESSION['ids'];
// $ssem = $_SESSION['id'];
$query = "SELECT * FROM user WHERE Users_id = '$sem'";
$result = mysqli_query($conn,$query);
// $row = mysqli_fetch_array($result);
// $_SESSION['usermoney'] = $row['users_coin'];
if(mysqli_num_rows($result) == 0) {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- DataTables -->

    <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Kanit:400" rel="stylesheet">

    <link href="assets/plugins/bootstrap-tagsinput/tagsinput.css?v=11" rel="stylesheet" type="text/css">

    <!-- ckeditor -->
    <script src="assets/adminlte/bower_components/ckeditor/ckeditor.js"></script>

    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>

    <!-- ChartJS -->
    <script src="assets/plugins/chart.js/Chart.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
</head>