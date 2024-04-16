<?php
require 'connect.php';
$PatientEmail=$_POST["PatientEmail"];
$MedicineName=$_POST["MedicineName"];
$Medicine_Time=$_POST["Medicine_Time"];

$MedicineImage = $_FILES["MedicineImage"]["name"];
$tempname = $_FILES["MedicineImage"]["tmp_name"];
$folder = "Doctor_License_PDF/".$MedicineImage;
move_uploaded_file($tempname, $folder);

$a="insert into medicinedetails values('".$PatientEmail."','".$MedicineName."','".$Medicine_Time."','".$MedicineImage."')";
if($con->query($a)===TRUE){
    header("Location: Index.php");
}
?>