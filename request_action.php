<?php
session_start();
include_once("../dboperation.php");
$obj = new dboperation();

if (isset($_POST['submit'])) {

    $g = $_SESSION['userid'];
    $f=$_POST['id'];
    $n = $_POST['id'];
    $d = $_POST['num'];
    $m = $_POST['start'];
    $k = $_POST['END'];
    $l = date('Y-m-d'); 
    $a = $_POST['farmer'];
    $b = $_POST['Land'];
    $j = "requested";
if($l >= $m || $m > $k){
    echo "<script>alert('Invalid date selection! Please ensure the starting date is today or later');window.location='farmerdetails.php?id=$f';</script>";
}
else {
    $start = new DateTime($m);
    $end = new DateTime($k);
    $interval = $start->diff($end);
    $days = $interval->days + 1;

    $total = $a * $days *$d;

    
    $sql = "INSERT INTO tbl_request(userid, farmerservice_id, request_date, ending_date, total_amount, status, starting_date,No_farmers,Area_Land) 
            VALUES ('$g', '$n', '$l', '$k', '$total', '$j', '$m','$a', '$b')";

    $res = $obj->executequery($sql);

    if ($res == 1) {
        echo "<script>alert('Requested Successfully'); window.location='servicesview.php';</script>";
    } else {
        echo "<script>alert('Request failed!'); window.location='servicesview.php';</script>";
}
}
}
?>