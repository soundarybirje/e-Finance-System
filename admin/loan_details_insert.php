<?php
$loan_name=$_POST['loan_name'];
$loan_desc=$_POST['loan_desc'];
$loan_duration=$_POST['loan_duration'];
$loan_interest=$_POST['loan_interest'];


include('dbconnect.php');

$sql="insert into loan_details values(null,'$loan_name','$loan_desc','$loan_duration','$loan_interest','Active')";
mysqli_query($conn,$sql);
?>

<script>
alert("Inserted...");
document.location="loan_details_view.php";
</script>