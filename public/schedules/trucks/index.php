<?php require_once('../../../private/initialize.php'); ?>

<?php

  $truck_set = find_all_trucks();

?>

<?php $page_title = 'trucks'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">
  <div class="Truck listing">
    <h1>Trucks</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/schedules/trucks/new.php'); ?>">Create New Truck</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Model</th>
        <th>Year</th>
  	    <th>Driver</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($truck = mysqli_fetch_assoc($truck_set)) { ?>
        <tr>
          <td><?php echo h($truck['truck_id']); ?></td>
          <td><?php echo h($truck['model']); ?></td>
          <td><?php echo h($truck['year']); ?></td>
    	    <td><?php echo h($truck['name']); ?></td>
          <td><a class="action" href="<?php echo url_for('/schedules/trucks/show.php?truck_id=' . h(u($truck['truck_id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/schedules/trucks/edit.php?truck_id=' . h(u($truck['truck_id']))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/schedules/trucks/delete.php?truck_id=' . h(u($truck['truck_id']))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

    <?php
      mysqli_free_result($truck_set);
    ?>
  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
