<?php
$pigmy_ins_rates_id=$_POST['pigmy_ins_rates_id'];
$pigmy_ins_name=$_POST['pigmy_ins_name'];
$interest_rate=$_POST['interest_rate'];
$duration=$_POST['duration'];

include('dbconnect.php');

$sql="update pigmy_ins_rates  set pigmy_ins_name='$pigmy_ins_name',interest_rate='$interest_rate',duration='$duration' where pigmy_ins_rates_id='$pigmy_ins_rates_id'";
mysqli_query($conn,$sql);
?>

<script>
alert("updated...");
document.location="pigmy_ins_rates_view.php";
</script>

