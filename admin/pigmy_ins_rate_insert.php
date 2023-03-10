<?php

$pigmy_interest_name=$_POST['pigmy_interest_name'];
$interest_rate=$_POST['interest_rate'];
$duration=$_POST['duration'];

include('dbconnect.php');

$sql="insert into pigmy_ins_rates values(null,'$pigmy_interest_name','$interest_rate','$duration')";
mysqli_query($conn,$sql);

?>
<script>
alert("Inserted...");
document.location="pigmy_ins_rates_view.php";
</script>