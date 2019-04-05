<?php require_once('../../../private/initialize.php'); ?>

<?php

$truck_id = $_GET['truck_id']; 

$sql = "SELECT truck_id, model, year, name FROM truck ";
$sql .= "JOIN driver ";
$sql .= "ON truck.driver_license_no = driver.driver_license_no ";
$sql .='WHERE truck_id=' . $truck_id;

$result = mysqli_query($db,$sql);

$truck = mysqli_fetch_assoc($result);

mysqli_free_result($result);
?>

<?php $page_title = 'Show Truck'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/schedules/trucks/index.php'); ?>">&laquo; Back to List</a>

  <div class="trucks show">
	<h1>Truck :</h1>
	<div class ="attributes">
		<dl>
			<dt>Truck ID</dt>
				<dd>
					<?php echo h($truck['truck_id']);?>
				</dd>
		</dl>
		<dl>
			<dt>Model</dt>
				<dd>
					<?php echo h($truck['model']);?>
				</dd>
		</dl>
		<dl>
			<dt>Year</dt>
				<dd>
				<?php echo h($truck['year']) ;?>
				</dd>
		</dl>
		<dl>
			<dt>Driver</dt>
				<dd>
				<?php echo h($truck['name']) ;?>
				</dd>
		</dl>

	</div>
  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>