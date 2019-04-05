<?php require_once('../../../private/initialize.php'); ?>
<?php
  $driver_set = find_all_drivers();
?>
<?php $page_title = 'drivers'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>
<div id="content">
  <div class="drivers listing">
    <h1>Drivers</h1>
    <div class="actions">
      <a class="action" href="<?php echo url_for('/schedules/drivers/new.php'); ?>">Create New driver</a>
    </div>
  	<table class="list">
  	  <tr>
        <th>License #</th>
        <th>Name</th>
        <th>Phone number</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>
      <?php while($driver = mysqli_fetch_assoc($driver_set)) { ?>
        <tr>
          <td><?php echo h($driver['driver_license_no']); ?></td>
          <td><?php echo h($driver['name']); ?></td>
          <td><?php echo h($driver['phone']); ?></td>
          <td><a class="action" href="<?php echo url_for('/schedules/drivers/show.php?driver_license_no=' . h(u($driver['driver_license_no']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/schedules/drivers/edit.php?driver_license_no=' . h(u($driver['driver_license_no']))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/schedules/drivers/delete.php?driver_license_no=' . h(u($driver['driver_license_no']))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>
    <?php mysqli_free_result($driver_set); ?>
  </div>
</div>
<?php include(SHARED_PATH . '/footer.php'); ?>
