<?

include_once ("cloudfiles.php");

$cfAuth = new CF_Authentication('storage_5591_16', '47a190888e0d2547271ee05b4713a440', NULL, 'https://api.clodo.ru');
$cfAuth->authenticate();
$cdnConnection = new CF_Connection($cfAuth);
$cdnConnection->create_container('wp-test');

print_r($cdnConnection->get_container('wp-test')); die;
