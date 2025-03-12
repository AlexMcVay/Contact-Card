<?php
require_once 'vCard.class.php';

$vcard = new vCard();
$vcard->set('display_name', 'Alex McVay');
$vcard->set('first_name', 'Alex');
$vcard->set('last_name', 'McVay');
$vcard->set('email1', 'alya.mcvay@gmail.com');
$vcard->set('url', 'https://alexmcvay.github.io');
$vcard->set('tel', '+1(302) 635-9643');

$vcard->download();
exit;
?>
