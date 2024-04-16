<?php
require 'connect.php';
$DoctorName=$_POST["DoctorName"];
$Specialist=$_POST["Specialist"];
$DoctorRegistrationNumber=$_POST["DoctorRegistrationNumber"];
$DoctorEmail=$_POST["DoctorEmail"];
$DoctorMobileNumber=$_POST["DoctorMobileNumber"];
$Password=$_POST["Password"];

$DoctorImage = $_FILES["DoctorImage"]["name"];
$tempname = $_FILES["DoctorImage"]["tmp_name"];
$folder = "Doctor_Image/".$DoctorImage;
move_uploaded_file($tempname, $folder);


$DoctorLicense = $_FILES["DoctorLicense"]["name"];
$tempname = $_FILES["DoctorLicense"]["tmp_name"];
$folder = "Doctor_License_PDF/".$DoctorLicense;
move_uploaded_file($tempname, $folder);


$a="insert into doctorsignup values('".$DoctorName."','".$Specialist."',".$DoctorRegistrationNumber.",'".$DoctorEmail."',".$DoctorMobileNumber.",'".$Password."','".$DoctorImage."','".$DoctorLicense."')";
if($con->query($a)===TRUE){
    header("Location: DoctorLogin.php");
}
?>