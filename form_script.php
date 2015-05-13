<?php
	$case=$_POST['case'];
	$date=$_POST['date'];
	$owner_first_name=$_POST['owner_first_name'];
	$owner_last_name=$_POST['owner_last_name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];
	$os=$_POST['os'];
	$sn=$_POST['sn'];
	$ram=$_POST['ram'];
	$cpu=$_POST['cpu'];
	$equipment=$_POST['equipment'];
	$co=$_POST['co'];
	$began=$_POST['began'];
	$previous_work=$_POST['previous_work'];
	$comments=$_POST['comments'];
	$boot_time_intial=$_POST['boot_time_intial'];
	$memory_use_intial=$_POST['memory_use_intial'];
	$evaluation=$_POST['evaluation'];
	$actions=$_POST['actions'];
	$recommendations=$_POST['recommendations'];
	
	print "<p>$case $owner_first_name $owner_last_name $phone $email $os $sn $ram $cpu $equipment $co
		$began $previous_work $comments</p>";
?>