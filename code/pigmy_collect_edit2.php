<?php
$pigmy_collect_id=$_POST['pigmy_collect_id'];
$customer_id=$_POST['customer_id'];
$collect_amt=$_POST['collect_amt'];
$collect_date=$_POST['collect_date'];
$time=$_POST['time'];
$references_no=$_POST['references_no'];


include('dbconnect.php');

 $sql="update pigmy_collect set customer_id='$customer_id',collect_amt='$collect_amt',collect_date='$collect_date',time='$time',references_no='$references_no' where pigmy_collect_id='$pigmy_collect_id'";
mysql_query($sql);
?>

<script>
alert("updated...");
document.location="pigmy_collect_view.php";
</script>

