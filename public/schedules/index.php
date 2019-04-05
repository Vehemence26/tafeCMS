<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Main'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">
  <div id="main-menu">
    <h2>Select category</h2>
    <ul>
      <li><a href="<?php echo url_for('/schedules/drivers/index.php'); ?>">Drivers</a></li>
      <li><a href="<?php echo url_for('/schedules/trucks/index.php'); ?>">Trucks</a></li>
    </ul>
  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
