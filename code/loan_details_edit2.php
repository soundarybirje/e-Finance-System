<?php
$loan_id=$_POST['loan_id'];
$loan_name=$_POST['loan_name'];
$loan_desc=$_POST['loan_desc'];
$loan_duration=$_POST['loan_duration'];
$loan_ins=$_POST['loan_ins'];
$status=$_POST['status'];


include('dbconnect.php');

$sql="update loan_details set loan_name='$loan_name',loan_desc='$loan_desc',loan_duration='$loan_duration',loan_ins='$loan_ins',status='$status' where loan_id='$loan_id'";
mysql_query($sql);
?>

<script>
alert("updated...");
document.location="loan_details_view.php";
</script>

