<?php
require 'connect.php';
$PatientName=$_POST["PatientName"];
$PatientEmail=$_POST["PatientEmail"];
$PatientMobileNumber=$_POST["PatientMobileNumber"];
$Password=$_POST["Password"];

$PatientImage = $_FILES["PatientImage"]["name"];
$tempname = $_FILES["PatientImage"]["tmp_name"];
$folder = "Patient_Image/".$PatientImage;
move_uploaded_file($tempname, $folder);

$a="insert into patientsignup values('".$PatientName."','".$PatientEmail."',".$PatientMobileNumber.",'".$Password."','".$PatientImage."')";
if($con->query($a)===TRUE){
    header("Location: PatientLogin.php");
}
?>