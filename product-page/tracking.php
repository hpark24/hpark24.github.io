<?php
// get the q parameter from URL
$q = $_REQUEST["q"];

$param = urlencode('<?xml version="1.0" encoding="UTF-8" ?>
<TrackRequest USERID="849PRATT1002">
<TrackID ID="9400111899223130473898"></TrackID>
</TrackRequest>');

$api = 'http://production.shippingapis.com/ShippingAPI.dll?API=TrackV2&XML=<TrackRequest USERID="849PRATT1002"><TrackID ID="9400111899223130473898"></TrackID></TrackRequest>'
        .$param;
        
$url = $api;
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $url );
curl_setopt( $ch, CURLOPT_POST, true );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>