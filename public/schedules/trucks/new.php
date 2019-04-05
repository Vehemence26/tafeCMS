<?php
require_once('../../../private/initialize.php');

$model = '';
$year = '';
$driver_license_no = '';

if(is_post_request()) {

  // Handle form values sent by new.php

  $model = $_POST['model'];
  $year = $_POST['year'];
  $driver_license_no = $_POST['driver_license_no'];
}

?>

<?php $page_title = 'Create Truck'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/schedules/trucks/index.php'); ?>">&laquo; Back to List</a>

  <div class="truck new">
    <h1>Create Truck</h1>

    <form action="<?php echo url_for('/schedules/trucks/create.php'); ?>" method="post">
      <dl>
        <dt>Model</dt>
        <dd><input type="text" name="model" value="<?php echo h($model); ?>" /></dd>
      </dl>
      <dl>
        <dt>Year</dt>
        <dd>
        <dd><input type="text" name="year" value="<?php echo h($year); ?>" /></dd>
        </dd>
      </dl>
      <dl>
        <dt>Driver's License No.</dt>
        <dd><input type="text" name="driver_license_no" value="<?php echo h($driver_license_no); ?>" /></dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Truck" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
