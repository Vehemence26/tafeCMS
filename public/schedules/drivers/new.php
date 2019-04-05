<?php

require_once('../../../private/initialize.php');

$driver_license_no = '';
$name = '';
$phone = '';

if(is_post_request()) {

  // Handle form values sent by new.php

  $driver_license_no = $_POST['driver_license_no'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];

  echo "Form parameters<br>";
  echo "License No: " . $driver_license_no . "<br>";
  echo "Drivers' name: " . $name . "<br>";
  echo "Phone number: " . $phone . "<br>";
}

?>

<?php $page_title = 'REGISTER A DRIVER'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/schedules/drivers/index.php'); ?>">&laquo; Back to OUR LIST</a>

  <div class="page new">
    <h1>Create DRIVER</h1>

    <form action="<?php echo url_for('/schedules/drivers/create.php'); ?>" method="post">
      <dl>
        <dt>License No.</dt>
        <dd><input type="text" name="driver_license_no" value="<?php echo h($driver_license_no); ?>" /></dd>
      </dl>
      <dl>
        <dt>Name</dt>
        <dd>
          <dd><input type="text" name="name" value="<?php echo h($name); ?>" /></dd>
        </dd>
      </dl>
      <dl>
        <dt>Phone number</dt>
         <dd>
          <dd><input type="text" name="phone" value="<?php echo h($phone); ?>" /></dd>
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Driver" />
      </div>
    </form>


  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
