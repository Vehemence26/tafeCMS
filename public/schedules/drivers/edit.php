<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['driver_license_no'])) {
  redirect_to(url_for('/schedules/drivers/index.php'));
}
$driver_license_no = $_GET['driver_license_no'];

if(is_post_request()) {

  // Handle form values sent by new.php
  $driver = [];
  $driver['driver_license_no'] = $_POST['driver_license_no'];
  $driver['name'] = $_POST['name'];
  $driver['phone'] = $_POST['phone'];

  $result = update_driver($driver);
  redirect_to(url_for('/schedules/drivers/show.php?driver_license_no='. $driver_license_no));

} else {
  $driver = find_driver_by_id($driver_license_no);
}

?>

<?php $page_title = 'Edit Driver'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/schedules/drivers/index.php'); ?>">&laquo; Back to List</a>

  <div class="driver edit">
    <h1>Edit Driver</h1>

    <form action="<?php echo url_for('/schedules/drivers/edit.php?driver_license_no=' . h(u($driver_license_no))); ?>" method="post">
      <dl>
        <dt>License No.</dt>
        <dd><input type="text" name="driver_license_no" value="<?php echo h($driver['driver_license_no']); ?>" /></dd>
      </dl>
      <dl>
        <dt>Name</dt>
        <dd><input type="text" name="name" value="<?php echo h($driver['name']); ?>" /></dd>
      </dl>
      <dl>
        <dt>Phone number</dt>
        <dd><input type="text" name="phone" value="<?php echo h($driver['phone']); ?>" /></dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Driver" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
