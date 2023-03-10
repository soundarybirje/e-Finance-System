<?php

$loan_allot_id=$_POST['loan_allot_id'];
$loan_id=$_POST['loan_id'];
$customer_id=$_POST['customer_id'];
$allot_date=$_POST['allot_date'];
$allot_amt=$_POST['allot_amt'];
$duration=$_POST['duration'];


include('dbconnect.php');

$sql="update loan_allot set loan_id='$loan_id',customer_id='$customer_id',allot_date='$allot_date',allot_amt='$allot_amt',duration='$duration' where loan_allot_id='$loan_allot_id'";
mysqli_query($conn,$sql);
?>

<script>
alert("updated...");
document.location="loan_allot_view.php";
</script>
