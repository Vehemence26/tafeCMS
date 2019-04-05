<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['truck_id'])) {
  redirect_to(url_for('/schedules/trucks/index.php'));
}
$truck_id = $_GET['truck_id'];

if(is_post_request()) {

  // Handle form values sent by new.php

  $truck = [];
  $truck['truck_id'] = $truck_id;
  $truck['model'] = $_POST['model'];
  $truck['year'] = $_POST['year'];
  $truck['driver_license_no'] = $_POST['driver_license_no'];

  $result = update_truck($truck);
  redirect_to(url_for('/schedules/trucks/show.php?id=' . $truck_id));

} else {
  $truck = find_truck_by_id($truck_id);
}

?>

<?php $page_title = 'Edit Truck'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/schedules/trucks/index.php'); ?>">&laquo; Back to List</a>

  <div class="truck edit">
    <h1>Edit Truck</h1>

    <form action="<?php echo url_for('/schedules/trucks/edit.php?truck_id=' . h(u($truck_id))); ?>" method="post">
      <dl><dt>Truck ID: <?php echo h($truck_id); ?></dt></dl>
      <dl>
        <dt>Model</dt>
        <dd><input type="text" name="model" value="<?php echo h($truck['model']); ?>" /></dd>
      </dl>
      <dl>
        <dt>Year</dt>
        <dd><input type="text" name="name" value="<?php echo h($truck['year']); ?>" /></dd>
      </dl>
      <dl>
        <dt>Driver's License No.</dt>
        <dd><input type="text" name="driver_license_no" value="<?php echo h($truck['driver_license_no']); ?>" /></dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Truck" />
      </div>
    </form>


  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
