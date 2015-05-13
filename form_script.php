<?php
define('DB_NAME', 'fixit_log');
define('DB_USER', 'squadguy');
define('DB_PASSWORD', '1is4life');
define('DB_HOST', '192.168.1.216');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

echo 'connected sucesfully';

$case_id=$_POST['case_id'];
$date=$_POST['date'];
$owner_first_name=$_POST['owner_first_name'];
$owner_last_name=$_POST['owner_last_name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$os_make=$_POST['os_make'];
$os_type=$_POST['os_type'];
$os_architecture=$_POST['os_architecture'];
$sn=$_POST['sn'];
$ram=$_POST['ram'];
$cpu_type=$_POST['cpu_type'];
$cpu_architecture=$_POST['cpu_architecture'];
$equipment=$_POST['equipment'];
$co=$_POST['co'];
$began=$_POST['began'];
$previous_work=$_POST['previous_work'];
$previous_who=$_POST['previous_who'];
$comments=$_POST['comments'];
$boot_time_initial=$_POST['boot_time_initial'];
$memory_use_initial=$_POST['memory_use_initial'];
$cpu_use_initial=$_POST['cpu_use_initial'];
$evaluation=$_POST['evaluation'];
$actions=$_POST['actions'];
$recommendations=$_POST['recommendations'];

$sql = "INSTERT INTO jobs (case_id, date, owner_first_name, owner_last_name, phone, address, city, state, zip, email, os_make, os_type, os_architecture, sn, ram_amount, cpu_make, cpu_model, cpu_architecture, other_equipment, co, began, previous_work, previous_who, previous_when, comments_initial, boot_time_initial, memory_use_initial, cpu_use_initial, evaluation, overview, actions, summary, recommendations)
		VALUES ('$case_id', '$date', '$owner_first_name', '$owner_first_name', '$phone', '$email', '$address', '$city', '$state', '$zip', '$email', '$os_make', '$os_type', '$os_architecture', '$sn', '$ram_amount', '$cpu_make', '$cpu_model', '$cpu_architecture', '$other_equipment', '$co', '$began', '$previous_work', '$previous_who', '$previous_when', '$comments_initial', '$boot_time_initial', '$memory_use_initial', '$cpu_use_initial', '$evaluation', '$overview', '$actions', '$summary', '$recommendations')";

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error));
}

	mysql_close();	
?>
