<?php  include('dbconnect.php');?>/>
<?php
$ac_id=$_REQUEST["ac_id"];
$sql="delete from account_request where ac_id='$ac_id' ";
$conn->query($sql);
?>
<script>
alert("account_request item deleted.....");
document.location="account_request_view.php";
</script>
