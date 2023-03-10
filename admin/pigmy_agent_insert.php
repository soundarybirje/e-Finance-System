<?php
$pigmy_agent_name=$_POST['pigmy_agent_name'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$agent_code=$_POST['agent_code'];

include('dbconnect.php');

$sql="insert into pigmy_agent values (null,'$pigmy_agent_name','$gender','$address','$email_id','$contact_no','$agent_code')";
mysqli_query($conn,$sql);

$sql1="insert into login values ('$agent_code','$agent_code','agent','Enter contact no','$contact_no')";
mysqli_query($conn,$sql1);
?>

<script>
alert("Inserted...");
document.location="pigmy_agent_view.php ";
</script>

