
<?php
$pigmy_agent_id=$_POST['pigmy_agent_id'];
$pigmy_agent_name=$_POST['pigmy_agent_name'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$agent_code=$_POST['agent_code'];

include('dbconnect.php');

$sql="update pigmy_agent  set pigmy_agent_name='$pigmy_agent_name',gender='$gender',address='$address',email_id='$email_id',contact_no='$contact_no',agent_code='$agent_code' where pigmy_agent_id='$pigmy_agent_id'";
mysql_query($sql);
?>

<script>
alert("updated...");
document.location="pigmy_agent_view.php";
</script>

