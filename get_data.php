<?php

$data = array(
  "bank_code" => "bni",
  "account_number" => "3233",
  "amount" => "32322",
  "remark" => "3232"
);
$payload = json_encode($data);

$ch = curl_init();
$secret_key = "HyzioY7LP6ZoO7nTYKbG8O4ISkyWnX1JvAEVAhtWKZumooCzqp41";
$encsky = base64_encode($secret_key);

curl_setopt($ch, CURLOPT_URL, "https://nextar.flip.id/disburse/5535152564");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
// curl_setopt($ch, CURLOPT_POST, TRUE);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/x-www-form-urlencoded"
));

curl_setopt($ch, CURLOPT_USERPWD, $secret_key.":");

$response = curl_exec($ch);
curl_close($ch);
?>

// var_dump($payload);
<pre>
<?php var_dump($response);?>
</pre>
