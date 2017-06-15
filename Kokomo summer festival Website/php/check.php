<?php
$conn = mysqli_connect('localhost', 'dbi336041', 'Guerrero', 'dbi336041');

 $camp_select = mysql_entities_fix_string($_POST['selectCamp']);

  $camp_id = "NULL";

  if ($camp_select != "NULL")
  {
    $camp_id = "'" . $camp_select . "'";
   
      
    $query = "UPDATE tent_all
              SET Occupied = 1
              WHERE TentNr = $camp_id;";
    $result = mysql_query($query);
    if (!$result) die (mysql_fatal_error("Denied access"));
    session_start();
    $_SESSION['TentNr'] = $camp_id;
    session_write_close();
  }

?>