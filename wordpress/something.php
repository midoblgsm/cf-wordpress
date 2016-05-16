<html>
<head>
<title>something</title>
</head>
<?php
$services = json_decode($_ENV['VCAP_SERVICES'], true);
$service = $services['user-provided'][0];

define('DB_NAME', $service['credentials']['name']);
echo $service['credentials']['name'];
?>
</html>
