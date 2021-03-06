<?php
include_once('OAuth.php');

//pesapal params
$token = $params = NULL;

/*
PesaPal Sandbox is at http://demo.pesapal.com. Use this to test your developement and
when you are ready to go live change to https://www.pesapal.com.
*/
$consumer_key = 'OQAWkvQn2x+oebu2Z+XDGRiAMJGl7qgv';//Register a merchant account on
                   //demo.pesapal.com and use the merchant key for testing.
                   //When you are ready to go live make sure you change the key to the live account
                   //registered on www.pesapal.com!
$consumer_secret = 'ynme8DzmL1OyxQKCuGHo9m7cx54=';// Use the secret from your test
                   //account on demo.pesapal.com. When you are ready to go live make sure you
                   //change the secret to the live account registered on www.pesapal.com!
$signature_method = new OAuthSignatureMethod_HMAC_SHA1();
// $iframelink = 'https://demo.pesapal.com/api/PostPesapalDirectOrderV4';
$iframelink = 'https://www.pesapal.com/API/PostPesapalDirectOrderV4';
  //change to
                   //https://www.pesapal.com/API/PostPesapalDirectOrderV4 when you are ready to go live!

//get form details
$amount = $_REQUEST['amount'];
$amount = number_format($amount, 2);//format amount to 2 decimal places
$currency_code = "USD";

$desc = $_REQUEST['description'];
$type = $_REQUEST['type']; //default value = MERCHANT
$reference = $_REQUEST['reference'];//unique order id of the transaction, generated by merchant
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$phonenumber = '';//ONE of email or phonenumber is required

$callback_url = 'http://localhost:8000/announcements/make'; //redirect url, the page that will handle the response from pesapal.

$post_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<PesapalDirectOrderInfo
xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
Amount=\"".$amount."\"
Description=\"".$desc."\"
Currency=\"".$currency_code."\"
Type=\"".$type."\"
Reference=\"".$reference."\"
FirstName=\"".$first_name."\"
LastName=\"".$last_name."\"
Email=\"".$email."\"
PhoneNumber=\"".$phonenumber."\"
xmlns=\"http://www.pesapal.com\" />";

$post_xml = htmlentities($post_xml);

$consumer = new OAuthConsumer($consumer_key, $consumer_secret);

//post transaction to pesapal
$iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, "GET", $iframelink, $params);
$iframe_src->set_parameter("oauth_callback", $callback_url);
$iframe_src->set_parameter("pesapal_request_data", $post_xml);
$iframe_src->sign_request($signature_method, $consumer, $token);

//display pesapal - iframe and pass iframe_src
?>
<iframe src="<?php echo $iframe_src;?>" width="100%" height="700px"  scrolling="no" frameBorder="0">
	<p>Browser unable to load iFrame</p>
</iframe>
