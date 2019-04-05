<?php
  if(!isset($page_title)) { $page_title = 'EMPLOYEES Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>PAYROLL WEBSITE <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" media="all" href="<?php echo url_for('stylesheets/main.css'); ?>" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
    <div class="container-fluid ">
      <div class="row">
        <header class="col-12">
          <h1>SCHEDULE AREA</h1>
        </header>
      </div>

      <div class="row">
        <nav class="col-12">
          <ul>
            <li><a href="<?php echo url_for('/schedules/index.php'); ?>">SELECT CATEGORY</a></li>
            <hr>
            <li><a href="<?php echo url_for('/index.php'); ?>">EXIT SCHEDULES</a></li>
          </ul>
        </nav>
      </div>
  </div>  