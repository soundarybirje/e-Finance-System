<?php
$customer_id=$_POST['customer_id'];
$agent_id=$_POST['agent_id'];
$collect_amount=$_POST['collect_amount'];
$collect_date=$_POST['collect_date'];
$time=$_POST['time'];
$reference_no=$_POST['reference_no'];

include('dbconnect.php');

$sql="insert into pigmy_collect values(null,'$customer_id','$agent_id','$collect_amount','$collect_date','$time','$reference_no')";
mysqli_query($conn,$sql);
?>

<script>
alert("Inserted...");
document.location="pigmy_collect_view.php";
</script>