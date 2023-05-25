<?php
function getIpAddress() {
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_adrress = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_adrress = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    $ip_adrress = $_SERVER['REMOTE_ADDR'];
  }
  return $ip_adrress;
}

echo 'IP: ' . getIpAddress();

?>
