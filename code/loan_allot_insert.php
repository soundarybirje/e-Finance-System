<?php
$loan_id=$_POST['loan_id'];
$customer_id=$_POST['customer_id'];
$allot_date=$_POST['allot_date'];
$allot_amt=$_POST['allot_amt'];
$duration=$_POST['duration'];

include('dbconnect.php');

$sql="insert into loan_allot  values(null,'$loan_id','$customer_id','$allot_date','$allot_amt','$duration')";
mysql_query($sql);
?>

<script>
alert("Inserted...");
document.location="loan_allot_view.php";
</script>

