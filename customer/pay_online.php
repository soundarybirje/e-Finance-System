<?php
 session_start(); 
include'../dbconnect.php';
include 'razorpay-php/Razorpay.php';
 //$apiKey = "rzp_test_YxfkUbFXwfG4Vc";
 use Razorpay\Api\Api;


$keyId = 'rzp_test_fDmVzWIk43LrqG';
$secretKey = '2vqsxsdMHHdMpVrmvQoP5x5h';
$api = new Api($keyId, $secretKey);


$customer_id=$_POST['customer_id'];
$agent_id=$_POST['agent_id'];
$collect_amount=$_POST['collect_amount'];
$collect_date=$_POST['collect_date'];
$time=$_POST['time'];
$reference_no=$_POST['reference_no'];

$uname=$_SESSION['uname'];
//$amount=$_POST['amount'];
$paise=$collect_amount*100;

$order= $api->order->create(array(
'receipt'=>rand(1000,9999).'ORD',
'amount'=>$paise,
'payment_capture'=>1,
'currency'=>'INR',)
);
?>


<meta name="viewport" content="width=device-width">
<form action="pigmy_collect_insert.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $keyId; ?>" // Enter the Test API Key ID generated from Dashboard ? Settings ? API Keys
    data-amount="<?php echo $order->amount; ?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ?299.35.
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-order_id="<?php echo $order->id ?>"//Replace with the order_id generated by you in the backend.
    data-buttontext="Pay to Ayushman Co-operative Society"
    data-name="Ayushman Co-operative Society"
    data-description=""
    data-image="../web/assets/images/AYUSHMAN CO-OPERATIVE SOCIETY.jpg"
    data-prefill.name="<?php echo $uname;  ?>"
	data-prefill.contact="6362313052"
    data-prefill.email="example@gmaol.com"
    data-theme.color="#55637e"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
<input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>">
<input type="hidden" name="agent_id" value="<?php echo $agent_id; ?>">
<input type="hidden" name="collect_amount" value="<?php echo $collect_amount; ?>">
<input type="hidden" name="collect_date" value="<?php echo $collect_date; ?>">
<input type="hidden" name="time" value="<?php echo $time; ?>">
<input type="hidden" name="reference_no" value="<?php echo $reference_no; ?>">

</form>
