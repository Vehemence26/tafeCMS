<?php require_once('../../../private/initialize.php'); ?>

<?php
 $driver_id = $_GET["driver_license_no"]; 

$sql = 'SELECT * FROM driver ';
$sql .='WHERE driver_license_no=' . $driver_id;

$result = mysqli_query($db,$sql);

$driver = mysqli_fetch_assoc($result);

mysqli_free_result($result);
?>

<?php $page_title = 'Show Drivers'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/schedules/drivers/index.php'); ?>">&laquo; Back to List</a>

  <div class="lecturer show">
	<h1>Driver :</h1>
	<div class ="attributes">
		<dl>
			<dt>LICENSE NO.</dt>
				<dd>
					<?php echo h($driver['driver_license_no']);?>
				</dd>
		</dl>
		<dl>
			<dt>DRIVER NAME</dt>
				<dd>
					<?php echo h($driver['name']);?>
				</dd>
		</dl>
		<dl>
			<dt>PHONE NUMBER</dt>
				<dd>
				<?php echo h($driver['phone']) ;?>
				</dd>
		</dl>
	</div>
  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
