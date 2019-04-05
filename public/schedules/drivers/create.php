<?php

require_once('../../../private/initialize.php');

if(is_post_request()) {

  // Handle form values sent by new.php

  $driver_license_no = $_POST['driver_license_no'];
  $name = $_POST['name'];
  $phone = $_POST['phone']; 

 // we put this part into query_funtions (CLEANING OUR PAGES)
 $result = insert_payslip($driver_license_no,$name,$phone);
 
 redirect_to(url_for('schedules/drivers/show.php?driver_license_no='  . $driver_license_no));
 
}else{
	redirect_to(url_for('schedules/drivers/new.php'));
}
?>
