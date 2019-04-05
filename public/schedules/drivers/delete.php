<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['driver_license_no'])) {
  redirect_to(url_for('/schedules/drivers/index.php'));
}

$driver_license_no = $_GET['driver_license_no'];

if (is_post_request()) {
	$result = delete_driver($driver_license_no);
	redirect_to(url_for('/schedules/drivers/index.php'));

} else {
	$driver = find_driver_by_id($driver_license_no);
}

?>

<?php $page_title = 'Delete Driver';?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">
	<a class="back-link" href="<?php echo url_for('/schedules/drivers/index.php'); ?>">&laquo; Back to List </a>

	<div class="payslip delete">
		<h1>Delete Driver</h1>
		<p>ARE YOU SURE YOU WANT TO DELETE THIS DRIVER?</p>
		<p class="item"><?php echo h($driver['name']); ?></p>

		<form action="<?php echo url_for('/schedules/drivers/delete.php?driver_license_no=' . h(u($driver_license_no))); ?>" method="post">
			<div>
				<input type="submit" name="commit" value="Delete Driver" />
			</div>
		</form>
	</div>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>