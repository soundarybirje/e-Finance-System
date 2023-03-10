<?php
$customer_id=$_POST['customer_id'];
$loan_id=$_POST['loan_id'];
$request_discription=$_POST['request_discription'];
$request_date=$_POST['request_date'];


include('dbconnect.php');

 $sql="insert into loan_request values(null,'$customer_id','$loan_id','$request_discription','$request_date')";
mysqli_query($conn,$sql);
?>

<script>
alert("Inserted...");
document.location="loan_request_view.php";
</script>