<?php
$customer_id=$_POST['customer_id'];
$customer_full_name=$_POST['customer_full_name'];
$gender=$_POST['gender'];
$occupation=$_POST['occupation'];
$address=$_POST['address'];
$city=$_POST['city'];
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$customer_code=$_POST['customer_code'];

include('dbconnect.php');

$sql="update customer_details set customer_full_name='$customer_full_name',gender='$gender',occupation='$occupation',address='$address',city='$city',email_id='$email_id',contact_no='$contact_no',customer_code='$customer_code' where customer_id='$customer_id'";
mysqli_query($conn,$sql);
?>

<script>
alert("updated...");
document.location="customer_details_edit1.php";
</script>
