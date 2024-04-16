<?php include("connect.php");
$query = "SELECT * FROM doctorsignup";
$data = mysqli_query($con, $query);
$total = mysqli_num_rows($data);
//echo $total;

if($total > 0)
{
    ?>



<?php
while($result = mysqli_fetch_assoc($data))
{
    echo $result["DoctorName"]." ".$result["Specialist"]." ". $result["DoctorEmail"]."
".$result["DoctorMobileNumber"]."<br>";
    }
    }
    else
    {
    echo "No records found";
    }
    ?>