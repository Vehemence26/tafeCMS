<?php

  function find_all_drivers() {
    global $db;

    $sql = "SELECT * FROM driver ";
    
    $result = mysqli_query($db, $sql);
    return $result;
  }

    function insert_payslip($driver_license_no, $name, $phone) {
    global $db;

    $sql = "INSERT INTO driver ";
    $sql .= "(driver_license_no, name, phone) ";
    $sql .= "VALUES (";
    $sql .= "'" . $driver_license_no . "',";
    $sql .= "'" . $name . "',";
    $sql .= "'" . $phone . "'";
    $sql .= ")";
    //echo "$sql";
    $result = mysqli_query($db, $sql);

    // For INSERT statements, $result is true/false
    if($result) {
      return true;
    } else {
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }
  
  function update_driver($driver){
	  
	  global $db;
	  $sql = "UPDATE driver SET ";
	  $sql .= "driver_license_no='" . $driver['driver_license_no']."',";
	  $sql .= "name='" . $driver['name']."',";
	  $sql .= "phone='" . $driver['phone']."'";
	  $sql .= "WHERE driver_license_no='" .$driver['driver_license_no'] ."'";
	  $sql .="LIMIT 1";
	  
	  $result = mysqli_query($db,$sql);
	  
	  if($result){
		  return true;
	  }else{
		  //update failed
		  echo mysqli_error($db);
		  db_disconnect($db);
		  exit;
	  }
  }
  function find_driver_by_id($id) {
    global $db;

    $sql = "SELECT * FROM driver ";
    $sql .= "WHERE driver_license_no='" . $id . "'";
    $result = mysqli_query($db, $sql);
    $payslip = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $payslip; // returns an assoc. array
  }

  function find_all_lecturers() {
    global $db;

    $sql = "SELECT * FROM driver ";
    $sql .= "ORDER BY lecturer_id ASC, position ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }
  
  function delete_driver($driver_license_no) {
    global $db;

    $sql  = "DELETE FROM driver ";
    $sql .= "WHERE driver_license_no='" . $driver_license_no . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
  
    //For DELETE statements, $result is true/false
    if($result) {
      return true;
    } else {
      //DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

////////         TRUCK FUNCTIONS  //////////


  function find_all_trucks() {
    global $db;

    $sql = "SELECT truck_id, model, year, name FROM truck ";
    $sql .= "JOIN driver ";
    $sql .= "ON truck.driver_license_no = driver.driver_license_no ";
    
    $result = mysqli_query($db, $sql);
    return $result;
  }

    function insert_truck($model,$year,$driver_license_no) {
    global $db;

    $sql = "INSERT INTO truck ";
    $sql .= "(model, year, driver_license_no) ";
    $sql .= "VALUES (";
    $sql .= "'" . $model . "',";
    $sql .= "'" . $year . "',";
    $sql .= "'" . $driver_license_no . "'";
    $sql .= ")";
    //echo "$sql";
    $result = mysqli_query($db, $sql);

    // For INSERT statements, $result is true/false
    if($result) {
      return true;
    } else {
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }
  
  function update_truck($truck){
    
    global $db;
    $sql = "UPDATE truck SET ";
    $sql .= "model='" . $truck['model'] . "',";
    $sql .= "year='" . $truck['year'] . "',";
    $sql .= "driver_license_no='" . $truck['driver_license_no'] . "'";
    $sql .= "WHERE truck_id='" .$truck['truck_id'] ."'";
    $sql .="LIMIT 1";
    
    $result = mysqli_query($db,$sql);
    
    if($result){
      return true;
    }else{
      //update failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }
  function find_truck_by_id($id) {
    global $db;

    $sql = "SELECT * FROM truck ";
    $sql .= "WHERE truck_id='" . $id . "'";
    $result = mysqli_query($db, $sql);
    $payslip = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $payslip; // returns an assoc. array
  }

  function delete_truck($truck_id) {
    global $db;

    $sql  = "DELETE FROM truck ";
    $sql .= "WHERE truck_id='" . $truck_id . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
  
    //For DELETE statements, $result is true/false
    if($result) {
      return true;
    } else {
      //DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

?>

