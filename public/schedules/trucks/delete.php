<?php 
require_once('../../../private/initialize.php');

if (!isset($_GET['truck_id'])) {
	redirect_to(url_for('/schedules/trucks/index.php'));
}

$truck_id = $_GET['truck_id'];

if (is_post_request()) {
	$result = delete_truck($truck_id);
	redirect_to(url_for('/schedules/trucks/index.php'));
}	else {
	$truck = find_truck_by_id($truck_id);
}
?>

<?php $page_title = 'Delete Truck';?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">
	<a class="back-link" href="<?php echo url_for('/schedules/trucks/index.php'); ?>">&laquo; Back to List </a>

	<div class="payslip delete">
		<h1>Delete Truck</h1>
		<p>ARE YOU SURE YOU WANT TO DELETE THIS TRUCK?</p>
		<p class="item"><?php echo h($truck['model']); ?></p>

		<form action="<?php echo url_for('/schedules/trucks/delete.php?truck_id=' . h(u($truck_id))); ?>" method="post">
			<div>
				<input type="submit" name="commit" value="Delete Truck" />
			</div>
		</form>
	</div>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>