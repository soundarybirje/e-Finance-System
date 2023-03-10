<?php
$customer_full_name=$_POST['customer_full_name'];
$gender=$_POST['gender'];
$occupation=$_POST['occupation'];
$address=$_POST['address'];
$city=$_POST['city'];
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$customer_code=$_POST['customer_code'];

include('dbconnect.php');

$sql="insert into customer_details values(null,'$customer_full_name','$gender','$occupation','$address','$city','$email_id','$contact_no','$customer_code')";
mysqli_query($conn,$sql);
?>

<script>
alert("Inserted...");
document.location="customer_details_view.php";
</script>