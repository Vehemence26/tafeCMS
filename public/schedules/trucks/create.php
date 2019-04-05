<?php

require_once('../../../private/initialize.php');

if(is_post_request()) {

  // Handle form values sent by new.php

  $model = $_POST['model'];
  $year = $_POST['year'];
  $driver_license_no = $_POST['driver_license_no'];
  
 // we put this part into query_funtions (CLEANING OUR PAGES)
 $result = insert_truck($model,$year,$driver_license_no);
 $new_id = mysqli_insert_id($db);
 redirect_to(url_for('/schedules/trucks/show.php?truck_id='  . $new_id));
 
}else{
	redirect_to(url_for('/schedules/trucks/new.php'));
}
 
  

?>
